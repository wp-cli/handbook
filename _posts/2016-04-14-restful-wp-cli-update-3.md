---
layout: post
author: danielbachhuber
title: RESTful WP-CLI - What I've been hacking on
---

Let me just say — Thursday, February 4th was [pretty darn demoralizing](https://twitter.com/Krogsgard/status/695634320401285121). I spent a huge amount of time in January towards the WP REST API in preparation for what I wanted to do on the command line, and a lot of momentum / inspiration / general good feelings were destroyed in that meeting. As such, I spent much of February and March working on WP-CLI features unrelated to the WP REST API (e.g. [package management](http://wp-cli.org/commands/package/)).

But, I'm back in the saddle. Because I'm 2/3 of the way through one of those fancy WP REST API + React WordPress applications, I'm running into dozens of ways I want to be able to make WordPress more efficiently. And of course, this means doing it on the command line.

Before we proceed: most of the, if not all, RESTful WP-CLI features have required under the hood changes to WP-CLI. You'll want to `wp cli update --nightly` to play with this new functionality locally. Once you've done so, you can `wp package install danielbachhuber/wp-rest-cli` to install the latest.

### Use `--debug` and `--debug=rest` to profile your REST endpoints

REST APIs are all about speed. Milliseconds matter, and every one you manage to shave off will have a real world impact on user experience.

To make it *much*, much easier to understand how many queries your endpoint is performing, and how long they take, I've added some lightweight profiling to RESTful WP-CLI.

Use `--debug` to get a summary of your queries for any command.

    $ wp rest post list --debug
    Debug (rest): REST command executed 7 queries in 0.001954 seconds. Use --debug=rest to see all queries. (1.446s)
    +----+-----------------------------+
    | id | title                       |
    +----+-----------------------------+
    | 1  | {"rendered":"Hello world!"} |
    +----+-----------------------------+

Use `--debug=rest` to get the full list of queries executed.

    $ wp rest post list --fields=id,title --debug=rest
    Debug: REST command executed 7 queries in 0.001696 seconds. Ordered by slowness, the queries are:
    1:
      - 0.000291 seconds
      - WP_REST_Posts_Controller->get_items, WP_Query->query, WP_Query->get_posts
      - SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  WHERE 1=1  AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish')  ORDER BY wp_posts.post_date DESC LIMIT 0, 10
    2:
      - 0.000257 seconds
      - WP_REST_Posts_Controller->get_items, WP_Query->query, WP_Query->get_posts, WP_Query->set_found_posts
      - SELECT FOUND_ROWS()
    3:
      - 0.000256 seconds
      - WP_REST_Posts_Controller->get_items, WP_REST_Posts_Controller->prepare_item_for_response, setup_postdata, WP_Query->setup_postdata, get_userdata, get_user_by, WP_User::get_data_by
      - SELECT * FROM wp_users WHERE ID = '1'
    4:
      - 0.000244 seconds
      - WP_REST_Posts_Controller->get_items, WP_REST_Posts_Controller->prepare_item_for_response, setup_postdata, WP_Query->setup_postdata, get_userdata, get_user_by, WP_User->init, WP_User->for_blog, WP_User->_init_caps, get_user_meta, get_metadata, update_meta_cache
      - SELECT user_id, meta_key, meta_value FROM wp_usermeta WHERE user_id IN (1) ORDER BY umeta_id ASC
    5:
      - 0.000233 seconds
      - WP_REST_Posts_Controller->get_items, WP_Query->query, WP_Query->get_posts, _prime_post_caches
      - SELECT wp_posts.* FROM wp_posts WHERE ID IN (1)
    6:
      - 0.000209 seconds
      - WP_REST_Posts_Controller->get_items, WP_Query->query, WP_Query->get_posts, _prime_post_caches, update_post_caches, update_object_term_cache, wp_get_object_terms
      - SELECT t.*, tt.*, tr.object_id FROM wp_terms AS t INNER JOIN wp_term_taxonomy AS tt ON tt.term_id = t.term_id INNER JOIN wp_term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id  WHERE tt.taxonomy IN ('category', 'post_tag', 'post_format') AND tr.object_id IN (1) ORDER BY t.name ASC
    7:
      - 0.000206 seconds
      - WP_REST_Posts_Controller->get_items, WP_Query->query, WP_Query->get_posts, _prime_post_caches, update_post_caches, update_postmeta_cache, update_meta_cache
      - SELECT post_id, meta_key, meta_value FROM wp_postmeta WHERE post_id IN (1) ORDER BY meta_id ASC
     (1.598s)
    +----+-----------------------------+
    | id | title                       |
    +----+-----------------------------+
    | 1  | {"rendered":"Hello world!"} |
    +----+-----------------------------+

Profiling works for any CRUD operation.

    $ wp rest post create --title="Test post" --user=daniel --debug
    Debug (rest): REST command executed 28 queries in 0.023962 seconds. Use --debug=rest to see all queries. (1.777s)
    Success: Created post.
    $ wp rest post update 3 --content="Foo bar" --user=daniel --debug
    Debug (rest): REST command executed 31 queries in 0.023309 seconds. Use --debug=rest to see all queries. (1.634s)
    Success: Updated post.

Hopefully this feature becomes an invaluable part of your REST endpoint development process, as it has mine. Hit me with feedback on [its Github issue](https://github.com/danielbachhuber/wp-rest-cli/issues/42).

### Use `wp rest * edit` to edit a resource in your system editor

Most people probably don't know this, but you can use `wp post edit <id>` to edit post content in your system editor (e.g. vim). Now, with `wp rest * edit`, you can edit any REST resource in your system editor.

    $ wp rest post edit 3 --user=daniel

When you run `wp rest * edit`, RESTful WP-CLI fetches the resource, transforms it into a YAML document, and puts it in your system editor:

    ---
    date: 2016-04-14T14:02:57
    date_gmt: null
    password:
    slug:
    status: draft
    title:
      raw: Test post
      rendered: Test post
    content:
      raw: Foo bar
      rendered: |
        |
            <p>Foo bar</p>
    excerpt:
      raw:
      rendered: |
        |
            <p>Foo bar</p>
    author: 1
    featured_media: 0
    comment_status: open
    ping_status: open
    sticky: false
    format: standard
    categories:
      - 1
    tags: [ ]

If you make changes to any of the fields, then the command sends it back to WordPress (through the WP REST API) to update.

On WordPress installs that support Basic Auth, editing also works over HTTP:

    $ wp --http=http://daniel:daniel@wordpress-develop.dev rest post edit 1

Et, voila.

### Get involved!

I'd love your input on the dozens of ideas I have for a more RESTful WP-CLI:

* Render the help docs in formats like API Blueprint and Swagger [[#36](https://github.com/danielbachhuber/wp-rest-cli/issues/36)]
* Introduce `wp rest * generate` to generate mock data in the format your application expects.
* Introduce `wp rest * diff` to be able to diff the state of two different WordPresses, a la [Dictator](https://github.com/danielbachhuber/dictator).
* Figure out an elegant aliases implementation, so `--http=http://daniel:daniel@wordpress-develop.dev` becomes `@wpdev` [[#2039](https://github.com/wp-cli/wp-cli/issues/2039)]

And I want to hear your ideas too! As well as any feedback, questions, or violent dissent. [Let's chat on Github](https://github.com/danielbachhuber/wp-rest-cli/issues).
