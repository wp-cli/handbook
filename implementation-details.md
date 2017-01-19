---
layout: doc
title: Implementation details
description: Catalog of historical design decisions.
category: Contributing
---

This page contains some history on various implementation details of WP-CLI.

### Bootstrapping WordPress

On a normal web request, your web server calls the `index.php` file in the root of the web directory to bootstrap the WordPress load process:

```
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
```

You'll notice `index.php` calls `wp-blog-header.php`, which then calls `wp-load.php`, which then calls `wp-config.php`, which then calls `wp-settings.php`.

This last file, `wp-settings.php`, is WordPress' primary bootstrap file. It loads your plugins, active theme, and calls the `init` action.

On the command line, WP-CLI follows a similar process to bootstrap WordPress. However, instead of loading `index.php`, using the `wp` command starts with this:

```
<?php

// Can be used by plugins/themes to check if WP-CLI is running or not
define( 'WP_CLI', true );
define( 'WP_CLI_VERSION', trim( file_get_contents( WP_CLI_ROOT . '/VERSION' ) ) );
define( 'WP_CLI_START_MICROTIME', microtime( true ) );

// Set common headers, to prevent warnings from plugins
$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.0';
$_SERVER['HTTP_USER_AGENT'] = '';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

include WP_CLI_ROOT . '/php/utils.php';
include WP_CLI_ROOT . '/php/dispatcher.php';
include WP_CLI_ROOT . '/php/class-wp-cli.php';
include WP_CLI_ROOT . '/php/class-wp-cli-command.php';

\WP_CLI\Utils\load_dependencies();

WP_CLI::get_runner()->start();
```

WP-CLI includes a good amount of setup code prior to calling `wp-settings.php`, which is different than a web request in a couple of notable ways:

* Rather than calling `wp-config.php` directly, WP-CLI gets the contents of `wp-config.php`, parses out the `require_once ABSPATH . 'wp-settings.php';` statement, and loads the constants into scope with `eval()`.
* WP-CLI loads WordPress with the `WP_CLI::get_runner()->load_wordpress()` method, meaning WordPress plugins and themes aren't loaded in global scope. Any global variables used in plugins or themes need to be explicitly globalized.

Once `WP_CLI::get_runner()->load_wordpress()` calls `wp-settings.php`, WordPress handles the rest of the bootstrap process.

### Command Help Text

The `wp help <command>` has been through several incarnations.

Since WP-CLI 0.3, it invoked a static `help()` method in the command class, if it existed. ([48a8887d](https://github.com/wp-cli/wp-cli/commit/48a8887d46be25e0c0ad326975729ec816c17331))

Since WP-CLI 0.6, it looked for a `<command>.1` ROFF file and displayed it using `man`. The ROFF file was compiled from a corresponding `<command>.txt` markdown file and from PHPDoc metadata. ([#24](https://github.com/wp-cli/wp-cli/issues/24)).

Since WP-CLI 0.11, it generates the help text on the fly. ([#548](https://github.com/wp-cli/wp-cli/pull/548))

### WP_ADMIN

Most WP-CLI commands perform administrative actions and they need access to code defined in `wp-admin/includes`. This code can be loaded on-demand or preemptively.

The question is: should the `WP_ADMIN` constant be set to `true` or `false`?

Initially, WP-CLI just loaded the wp-admin code and didn't mess with the WP_ADMIN constant at all.

Then, it sort of pretended it was doing a front-end page load, for doing integration testing ([#69](https://github.com/wp-cli/wp-cli/issues/69)). <sup><a href="#note-1">[1]</a></sup>

Then it pretended it was loading wp-admin, to side-step caching plugins ([#164](https://github.com/wp-cli/wp-cli/issues/164)).

Then it stopped pretending it was loading wp-admin ([#352](https://github.com/wp-cli/wp-cli/issues/352)), because we found a better way to side-step caching plugins. <sup><a href="#note-2">[2]</a></sup>

----

* <sup><a name="note-1">[1]</a></sup>: It turned out that the official WordPress testing suite had a better solution: the `go_to()` method.
* <sup><a name="note-2">[2]</a></sup>: The solution was rolling our own `wp-settings.php` file.

