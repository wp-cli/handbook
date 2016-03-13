---
layout: doc
title: Quick Start
description: Where to begin after you've installed WP-CLI for the first time.
category: Guides
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

## Example usage

Ready to dive in? Here are some examples of common WP-CLI commands:

### Download latest [en_US] version of WordPress into the current folder

    wp core download

If you have WordPress already installed in the current folder:

    wp core download --force

### Create WXR export files from site in a multisite install to current directory

    wp export --url=sub.domain.com

### Import WXR file from current directory into a specific site in a multisite install, create authors and skip image resize

    wp import domain.wordpress.2014-01-01.xml --authors=create --skip="image_resize" --url=sub.domain.com

### Regenerate all thumbnails for a specific site in a multisite install

    wp media regenerate --url=sub.domain.com --yes

### Delete all pages

    wp post list --post_type=page --field=ID | xargs wp post delete

and for a specific site in a multisite install:

    WP='wp --url=sub.domain.com'
    $WP post list --post_type=page --field=ID | xargs $WP post delete
