---
layout: default
title: Command line interface for WordPress
---
**WP-CLI** is a set of command-line tools for managing [WordPress](http://wordpress.org) installations. You can update plugins, set up multisite installs, create posts and much more.

Minimum Requirements
==========

You'll need **PHP 5.3.2** or later.

All WP-CLI commands are guaranteed to work with **WordPress 3.4** or later. Some commands, like `wp core update`, might work with older versions as well.

Installing
==========

Just execute the following command:

```
curl http://wp-cli.org/installer.sh | bash
```

This will allow you to run `~/.composer/bin/wp`.

If you get a `using non-default PHP CLI:` message, you should save that path in your `.bash_profile` file:

```
export WP_CLI_PHP=/path/found/during/install
```

If you want to be able to type just `wp`, add the following lines to your `.bash_profile` file:

```
# Composer scripts
PATH=$HOME/.composer/bin:$PATH

# WP-CLI completions
source $HOME/.composer/vendor/wp-cli/wp-cli/utils/wp-completion.bash
```

Finally, reload the file:

```
source ~/.bash_profile
```

### Updating

If you installed WP-CLI using the method above, you can also easily update it:

```
cd ~/.composer
php composer.phar update
```

Also see [Alternative Install Methods](https://github.com/wp-cli/wp-cli/wiki/Alternative-Install-Methods).

Using
=====

Go into a WordPress root folder:

```
cd /var/www/wp/
```

Typing `wp` should show you output similar to this:

```
Available commands:
    wp blog create|delete
    wp cache add|decr|delete|flush|get|incr|replace|set|type
    wp comment create|delete|trash|untrash|spam|unspam|approve|unapprove|count|status|last
    wp core download|config|is-installed|install|install-network|version|update|update-db
    wp db create|drop|reset|optimize|repair|connect|cli|query|export|import
    wp eval-file
    ...

See 'wp help &lt;command&gt;' for more information on a specific command.
```

Let's try to install the Hello Dolly plugin from wordpress.org:

```
wp plugin install hello-dolly
```

Output:

```
Installing Hello Dolly (1.5)

Downloading install package from http://downloads.WordPress.org/plugin/hello-dolly.1.5.zip ...
Unpacking the package ...
Installing the plugin ...
Plugin installed successfully.
```

Multisite
---------

On a multisite installation, you need to pass a `--url` parameter, so that wp-cli knows which site it's supposed to be operating on:

```
wp theme status --url=localhost/wp/test
```

If you have a subdomain installation, it would look like this:

```
wp theme status --url=test.example.com
```

If you're usually working on the same site most of the time, you can create a `wp-cli.yml` file in the root directory:

```
url: test.example.com
```

Then, you can call `wp` without the `--url` parameter again:

```
wp theme status
```

Adding commands
===============

Adding commands to wp-cli is very easy. You can even add them from within your own plugin.
You can find more information about adding commands in the [Commands Cookbook](https://github.com/wp-cli/wp-cli/wiki/Commands-Cookbook) on our Wiki.

**Please share the commands you make, issue a pull request to get them included in wp-cli by default.**

Contributors
------------

- [Contributor list](https://github.com/wp-cli/wp-cli/contributors)
- [Contributor guide](https://github.com/wp-cli/wp-cli/blob/master/CONTRIBUTING.md)
