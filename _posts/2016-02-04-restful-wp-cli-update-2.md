---
layout: post
author: danielbachhuber
title: RESTful WP-CLI - No rest for the weary
---

Like my title? Get the pun? Te he he.

I'm just back from [A Day of REST](https://feelingrestful.com/), where I spoke about [a more RESTful WP-CLI](/restful/), and unlocking the potential of the WP REST API at the command line. It was probably the best talk I've ever done. You can [check out my annotated slides](http://blog.handbuilt.co/2016/01/28/feelingrestful-a-more-restful-wp-cli/) if you haven't already.

The talk covered the progress I've already made, and the hypotheticals on my mind every day when I go for a swim.

### wp-rest-cli v0.1.0

Today marks v0.1.0 for [wp-rest-cli](https://github.com/danielbachhuber/wp-rest-cli). This initial release makes WP REST API endpoints available as WP-CLI commands. It does so by:

* Auto-discovering endpoints from any WordPress site running WordPress 4.4 or higher.
* Registering WP-CLI commands for the endpoints it understands.

**Warning:** This project is at a very early stage. Treat it as an experiment, and understand that breaking changes will be made without warning. The sky may also fall on your head.

Here's how it works:

    $ wp rest
    usage: wp rest attachment <command>
       or: wp rest category <command>
       or: wp rest comment <command>
       or: wp rest meta <command>
       or: wp rest page <command>
       or: wp rest pages-revision <command>
       or: wp rest post <command>
       or: wp rest posts-revision <command>
       or: wp rest status <command>
       or: wp rest tag <command>
       or: wp rest taxonomy <command>
       or: wp rest type <command>
       or: wp rest user <command>

    $ wp --http=demo.wp-api.org rest tag get 65 --format=json
    {
      "id": 65,
      "link": "http://demo.wp-api.org/tag/dolor-in-sunt-placeat-molestiae-ipsam/",
      "name": "Dolor in sunt placeat molestiae ipsam",
      "slug": "dolor-in-sunt-placeat-molestiae-ipsam",
      "taxonomy": "post_tag"
    }

Notice how you can use `--http=<domain>` to interact with a remote WordPress site. `--http=<domain>` must be supplied as the second argument to be used. Without it, wp-rest-cli will look for endpoints of a WordPress site in a directory specified by `--path=<path>` (or the current directory, if `--path=<path` isn't supplied).

Using wp-rest-cli requires the latest nightly build of WP-CLI, which you can install with `wp cli update --nightly`. Once you've done so, you can install wp-rest-cli with `wp package install danielbachhuber/wp-rest-cli`.

### Unreleased WP-CLI improvements

Wait, `wp package install`. What in the?

That's right, WP-CLI now has package management. Using `wp cli update --nightly`, you now can:

* `wp package browse` to browse [packages available for installation](http://wp-cli.org/package-index/).
* `wp package install` to install a given package.
* `wp package list` to list packages installed locally.
* `wp package uninstall` to uninstall a given package.

While I wasn't *planning* to dive down this rabbit hole during the Kickstarter project, I was finally inspired on how to finish the feature, and took a couple hours yesterday to do so. It's amazing how you can be mentally blocked on a problem for literally two years but then, once you're unblocked, finish it up in a short period of time.

You'll probably run into one or more bugs with `wp package`. When you do, please [let me know on this issue](https://github.com/wp-cli/wp-cli/issues/1564). If the bugs get too hairy, I may pull the feature from the release and revisit. But, for now, you can much more easily install and use community packages.

wp-rest-cli also makes use of another new feature: register arbitrary functions, closures, and class methods as WP-CLI commands.

For instance, given a closure `$hook_command`:

    $hook_command = function( $args, $assoc_args ) {
        // the meat of the command
    };
    WP_CLI::add_command( 'hook', $hook_command, array(
        'shortdesc' => 'List callbacks registered to a given action or filter.',
        'synopsis' => array(
            array(
                'name'        => 'hook',
                'type'        => 'positional',
                'description' => 'The key for the action or filter.',
            ),
            array(
                'name'        => 'format',
                'type'        => 'assoc',
                'description' => 'List callbacks as a table, JSON, or CSV. Default: table.',
                'optional'    => true,
            ),
        ),
    ) );

Then, when you run `wp hook init`, you'll see:

    $ wp hook init
    +---------------------------------+----------+---------------+
    | function                        | priority | accepted_args |
    +---------------------------------+----------+---------------+
    | create_initial_post_types       | 0        | 1             |
    | create_initial_taxonomies       | 0        | 1             |
    | wp_widgets_init                 | 1        | 1             |
    | smilies_init                    | 5        | 1             |
    | wp_cron                         | 10       | 1             |
    | _show_post_preview              | 10       | 1             |
    | rest_api_init                   | 10       | 1             |
    | kses_init                       | 10       | 1             |
    | wp_schedule_update_checks       | 10       | 1             |
    | ms_subdomain_constants          | 10       | 1             |
    | maybe_add_existing_user_to_blog | 10       | 1             |
    | check_theme_switched            | 99       | 1             |
    +---------------------------------+----------+---------------+

Want to use this command locally? Update to the nightly, and then run `wp package install danielbachhuber/wp-hook-command`.

### What's next

Well... I've spent a ton of hours over the last month on the WP REST API. 67.03 hours of 83 budgeted, to be precise. Given there doesn't yet seem to be an end in site, I may reallocate ~30 hours or so out of the WP-CLI budget for continued involvement with the WP REST API. But, I do need to slow down the pace of my involvement a bit, because it's not sustainable.

On the wp-rest-cli front, the product problems at the top of my mind are authentication and aliases. Instead of:

    wp --http=demo.wp-api.org --user=daniel:daniel rest tag create

I'd much prefer the following, where `@wpapi` is an alias for both the target and authentication:

    wp @wpapi tag create

In this hypothetical universe, aliases would also be injected into the WP-CLI runtime:

    $ wp @wpapi
    usage: wp @wpapi attachment <command>
       or: wp @wpapi category <command>
       or: wp @wpapi comment <command>
       or: wp @wpapi meta <command>
       or: wp @wpapi page <command>
       or: wp @wpapi pages-revision <command>
       or: wp @wpapi post <command>
       or: wp @wpapi posts-revision <command>
       or: wp @wpapi status <command>
       or: wp @wpapi tag <command>
       or: wp @wpapi taxonomy <command>
       or: wp @wpapi type <command>
       or: wp @wpapi user <command>

There's a bit of thinking to do to get from here to there, though.

Feeling inspired? I want to hear from you! Particularly if you've written custom endpoints I can test against. Please [open a Github issue](https://github.com/danielbachhuber/wp-rest-cli/issues) with questions, feedback, and violent dissent, or [email me directly](mailto:daniel@handbuilt.co).
