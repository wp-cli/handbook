---
layout: default
title: Command line interface for WordPress
---

**wp-cli** is a set of command-line tools for managing [WordPress](http://wordpress.org) installations. You can update plugins, set up multisite installs, create posts and much more.

Requirements
============

* PHP >= 5.3
* WordPress >= 3.3

Installing
==========

**Via Phar Archive:**

```
sudo -s
curl http://wp-cli.org/packages/phar/wp-cli.phar > /usr/bin/wp
chmod +x /usr/bin/wp
```

If you have Suhosin enabled, make sure to set `suhosin.executor.include.whitelist="phar"` in your `suhosin.ini` or `php.ini` file.

**Via GIT:**

```
git clone git://github.com/wp-cli/wp-cli.git ~/git/wp-cli
cd ~/git/wp-cli
sudo utils/dev-build
```

You can replace `~/git/wp-cli` with whatever you want.

**Without sudo:**

```
git clone git://github.com/wp-cli/wp-cli.git ~/git/wp-cli
cd ~/git/wp-cli
./utils/local-build
```

MAMP, XAMP, etc.
-----------

If the `php` command is not available, you can try finding an appropriate binary:

```
./utils/find-php
```

Then, create an environment variable called `WP_CLI_PHP` with the path found by `find-php`.

In a UNIX environment, you would do this by adding the following line to your `.bashrc` file:

```
export WP_CLI_PHP=/path/to/php-binary
```

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

Changelog
=========

### [0.8](https://github.com/wp-cli/wp-cli/issues?milestone=6&state=closed)

Commands:

- added `wp search-replace` command
- added `wp scaffold` command. props [jmslbam](http://github.com/jmslbam) and [sebastiaandegeus](http://github.com/sebastiaandegeus)
- added `wp cap` command
- added `wp user add-role` subcommand
- added `--role` parameter to `wp user remove-role`
- added `--ids` parameter to `wp user list`
- added `--post__in` parameter to `wp export`
- added `--str` parameter to most `wp db` subcommands
- removed community commands (`wp total-cache`, `wp super-cache`, `wp sitemap`)
- made `wp post update` accept multiple IDs
- fixed incorrect exit code from `wp core is-installed` in some cases
- fixed `wp user import-csv`. props [danielbachhuber](http://github.com/danielbachhuber)
- fixed `wp theme update <theme>`
- fixed `wp plugin update <plugin>` not reactivating the plugin

Internals:

- added support for `wp-cli.yml` config file
- bypass full-page caching plugins
- disabled coloring when not in a TTY and added `--color/no-color` global parameters
- added `--debug` global parameter
- added `wp --info` utility
- added unit tests for `wp core` subcommands. props [mwilliamson](http://github.com/mwilliamson)
- [Composer](http://getcomposer.org) compatibility

### [0.7](https://github.com/wp-cli/wp-cli/issues?milestone=5&state=closed)

Commands:

- added [wp shell](/blog/wp-shell.html)
- added `wp cache`, props [tollmanz](http://github.com/tollmanz)
- added `wp comment`, props [ozh](http://github.com/ozh)
- added `wp rewrite`, props [goldenapples](http://github.com/goldenapples)
- added `wp user import-csv`, props [danielbachhuber](http://github.com/danielbachhuber)
- added `wp user set-role` and `wp user remove-role`, props danielbachhuber 
- added `wp core is-installed`
- added `wp blog delete`
- added `wp post list`
- made `wp post delete` accept a list of IDs
- added `--dry-run` option `wp plugin update-all`
- improved `wp export`, props danielbachhuber

Breaking changes:

- converted `wp plugin update --all` to `wp plugin update-all`
- converted `wp theme update --all` to `wp theme update-all`
- converted `wp generate posts` to `wp post generate`
- converted `wp generate users` to `wp user generate`
- renamed `wp core install_network` to `wp core install-network`
- renamed `--path` option to `--dir` in `wp export`

Internals:

- removed support for default subcommands
- introduced `@synopsis` docblock tag
- introduced `@subcommand` docblock tag
- introduced `@alias` docblock tag
- introduced `WP_CLI::add_man_dir()`

### [0.6](https://github.com/wp-cli/wp-cli/issues?milestone=4&state=closed)

Commands:

- added `wp post` and `wp post-meta`
- added `wp user-meta`, props [mwilliamson-red-gate](http://github.com/mwilliamson-red-gate)
- added `wp blog create`, props [kidfiction](http://github.com/kidfiction)
- added `wp export`, props [tott](http://github.com/tott)
- added `wp theme install` and `wp theme update`, props [getsource](http://github.com/getsource)
- added `wp transient`, props [tollmanz](http://github.com/tollmanz)
- added `wp db optimize` and `wp db repair`, props getsource
- added `wp db create`, `wp db drop` and `wp db reset`
- added `wp db import`, props [svaj](http://github.com/svaj)
- added `wp core install_network`
- added `wp core update_db`, props mwilliamson-red-gate
- added `--json` option to several subcommands
- added `--network` option to `wp plugin activate`
- fixed `wp plugin update`

Internals:

- added `--require` global parameter
- fixed "out of memory" error
- misc bugfixes and optimizations
- man pages (not in PEAR package)

### [0.5](https://github.com/wp-cli/wp-cli/issues?milestone=3&state=closed)

Commands:

- added `wp user`, props [wopr42](http://github.com/wopr42)
- added `wp core download`, props [ericandrewlewis](http://github.com/ericandrewlewis)
- added `wp core config`
- added `wp plugin update --all`, props [getsource](http://github.com/getsource)

Internals:

- added `--url` `--path` and `--user` global parameters
- various bugfixes

### [0.4](https://github.com/wp-cli/wp-cli/issues?milestone=2&state=closed)

- added `wp eval` and `wp eval-file`
- added `wp export`
- added `wp core install`
- fixed `wp core update`
- added `--dev` flag to `wp plugin install`
- added `wp plugin uninstall`
- fixed `wp plugin install` and `wp plugin update`

### 0.3

- added `wp sql`
- improved `wp option`
- pear installer

### 0.2

- added multisite support
- improved `wp plugin` and `wp theme`
- added `wp generate`
- added `wp core version`
- added `wp --version`
- added bash completion script

### 0.1

- initial release

Contributors
------------

- [Contributor list](https://github.com/wp-cli/wp-cli/contributors)
- [Contributor guide](https://github.com/wp-cli/wp-cli/wiki/Commands-Cookbook)
