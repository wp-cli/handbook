---
layout: doc
title: Shell tips
description: Helpful shortcuts for bash and zsh.
category: References
---

Master of bash or zsh? Share your tips here.

## Take a look at the plugin changelog

Needs `elinks` to browse HTML.

```bash
wget -qO- http://api.wordpress.org/plugins/info/1.0/akismet|php -r '$seri=unserialize(stream_get_contents(STDIN)); echo $seri->sections["changelog"];'|elinks -force-html
```

Explanation

- set wget quiet & query the WordPress.org Plugin API
- unserialize with php, `stream_get_contents(STDIN)` means "get all from *stdin*"
- echo the changelog part from the API's reply
- fire up elinks (a console browser) to view the changelog

## Start wp-cli with ABSPATH in the current dir and under the current dir's owner

```bash
#!/bin/bash

sudo -u $(stat . -c %U) -- wp --path="$PWD" "$@"
```

Explanation

The `stat` command returns the owner of the current directory, WordPress root.

## Install and Configure WordPress with WP-CLI

```bash
wp_install () 
{ 
    wp core download --path=$1;
    cd $1;
    read -p 'name the database:' dbname;
    wp core config --dbname=$dbname --dbuser=root --dbpass=awoods --dbhost=localhost;
    wp db create;
    wp core install --prompt
}

$ source ~/.bashrc
$ wp_install new-site
```

Explanation

Add this function to your ~/.bashrc are reload your shell (or open a new shell). 
You'll need to substitute these database credentials with your own.
When you need create a new wordpress install, call this function and specify the
name of the directory where you want to create the site. This emulates the 
web-based install process.

## List all image URL-s in posts

```bash
wp post list --field=ID|xargs -I % wp post get % --field=post_content|sed -ne 's;.*\(https\?\S\+\(jpe\?g\|png\|gif\)\).*;\1;gp'
```

Explanation

- List all post ID-s
- Get each content (xargs)
- Display only image URL-s (sed)
