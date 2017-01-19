---
layout: doc
title: Quick start
description: Where to begin after you've installed WP-CLI for the first time.
category: Guides
quick_links:
  - Introduction
  - Common Terms
  - Practical Examples
---

Congratulations! You've [installed WP-CLI](/docs/installing/) for the first time, and are ready to level-up your use of WordPress. This page contains a brief introduction to WP-CLI with some example usage.

## Introduction

WP-CLI is a command line interface for WordPress. The project's goal is to offer a complete alternative to the WordPress admin; for any action you might want to perform in the WordPress admin, there should be an equivalent WP-CLI command.

For instance, because you can install a plugin from the WordPress admin, you can also [install a plugin](/commands/plugin/install/) with WP-CLI:

    $ wp plugin install akismet
    Installing Akismet (3.1.8)
    Downloading install package from https://downloads.wordpress.org/plugin/akismet.3.1.8.zip...
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.

And, because you can also activate plugins from the WordPress admin, you can [activate a plugin](/commands/plugin/activate/) with WP-CLI:

    $ wp plugin activate akismet
    Success: Plugin 'akismet' activated.

One key difference between using the WordPress admin and WP-CLI: performing any action takes many fewer clicks. As you become more familiar with the command line, you'll notice performing a given task with WP-CLI is generally much faster than performing the same task through the WordPress admin. Investing time upfront into learning how to better use WP-CLI pays dividends in the long term.

## Common Terms

Throughout your usage of WP-CLI, you'll hear certain terms used over and over again.

For instance, a _command_ is an atomic unit of WP-CLI functionality. `wp plugin install` is one such command, as is `wp plugin activate`. Commands represent a name (e.g. 'plugin install') and a callback, and are registered with `WP_CLI::add_command()` ([doc](/docs/internal-api/wp-cli-add-command/)).

The _synopsis_ defines which _positional_ and _associative_ arguments a command accepts. Let's take a look at the synopsis for `wp plugin install`:

    $ wp plugin install
    usage: wp plugin install <plugin|zip|url>... [--version=<version>] [--force] [--activate] [--activate-network]

In this example, `<plugin|zip|url>...` is the accepted _positional_ argument. In fact, `wp plugin install` accepts the same positional argument (the slug, ZIP, or URL of a plugin to install) multiple times. `[--version=<version>]` is one of the accepted _associative_ arguments. It's used to denote the version of the plugin to install. Notice, too, the square brackets around the argument definition; square brackets mean the argument is optional.

WP-CLI also has a [series of _global_ arguments](/config/) which work with all commands. For instance, including `--debug` means your command execution will display all PHP errors, and add extra verbosity to the WP-CLI bootstrap process.

## Practical Examples

Ready to dive in? Here are some common examples of how WP-CLI is used:

**Download and install WordPress in seconds**

1. Download the latest version of WordPress with `wp core download` ([doc](/commands/core/download/)).

```
$ wp core download --path=wpclidemo.dev
Creating directory '/srv/www/wpclidemo.dev/'.
Downloading WordPress 4.6.1 (en_US)...
Using cached file '/home/vagrant/.wp-cli/cache/core/wordpress-4.6.1-en_US.tar.gz'...
Success: WordPress downloaded.
```

2. Create a new wp-config.php file with `wp core config` ([doc](/commands/core/config/)).

```
$ cd wpclidemo.dev
$ wp core config --dbname=wpclidemo --dbuser=root
Success: Generated 'wp-config.php' file.
```

3. Create the database based on wp-config.php with `wp db create` ([doc](/commands/db/create/)).

```
$ wp db create
Success: Database created.
```

4. Install WordPress with `wp core install` ([doc](/commands/core/install/)).

```
$ wp core install --url=wpclidemo.dev --title="WP-CLI" --admin_user=wpcli --admin_password=wpcli --admin_email=info@wp-cli.org
Success: WordPress installed successfully.
```

That's it!

**Update plugins to their latest version**

Use `wp plugin update --all` ([doc](/commands/plugin/update/)) to update all plugins to their latest version.

```
$ wp plugin update --all
Enabling Maintenance mode...
Downloading update from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
Unpacking the update...
Installing the latest version...
Removing the old version of the plugin...
Plugin updated successfully.
Downloading update from https://downloads.wordpress.org/plugin/nginx-champuru.3.2.0.zip...
Unpacking the update...
Installing the latest version...
Removing the old version of the plugin...
Plugin updated successfully.
Disabling Maintenance mode...
Success: Updated 2/2 plugins.
+------------------------+-------------+-------------+---------+
| name                   | old_version | new_version | status  |
+------------------------+-------------+-------------+---------+
| akismet                | 3.1.3       | 3.1.11      | Updated |
| nginx-cache-controller | 3.1.1       | 3.2.0       | Updated |
+------------------------+-------------+-------------+---------+
```

**Add a user as a super-admin**

On multisite, use `wp super-admin add` ([doc](/commands/super-admin/add/)) to grant super admin capabilities to an existing user.

```
$ wp super-admin add wpcli
Success: Granted super-admin capabilities.
```

**Regenerate thumbnails**

If you've added or changed an image size registered with `add_image_size()`, you may want to use `wp media regenerate` ([doc](/commands/media/regenerate/)) so your theme displays the correct image size.

```
wp media regenerate --yes
Found 1 image to regenerate.
1/1 Regenerated thumbnails for "charlie-gpa" (ID 4).
Success: Finished regenerating the image.
```

Wondering what's next? Browse through [all of WP-CLI's commands](/commands/) to explore your new world. Or, catch up with [shell friends](/docs/shell-friends/) to learn about helpful command line utilities.
