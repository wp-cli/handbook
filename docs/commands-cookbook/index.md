---
layout: doc
title: Commands Cookbook
description: The full 101 on writing a command.
category: Guides
---

Creating your own custom WP-CLI command can be easier than it looks.

## Overview

WP-CLI's goal is to offer a complete alternative to the WordPress admin; for any action you might want to perform in the WordPress admin, there should be an equivalent WP-CLI command. A _command_ is an atomic unit of WP-CLI functionality. `wp plugin install` ([doc](/commands/plugin/install/)) is one such command, as is `wp plugin activate` ([doc](/commands/plugin/activate/)).

_But_, the WordPress admin is a Swiss Army knife of infinite complexity. There's no way just this project could handle every use case. This is why WP-CLI includes a set of common internal commands, while also offering a rich API for third-parties to register and distribute their own commands.

### Command types

Internal commands:

* Usually cover functionality offered by a standard install WordPress. There are exceptions to this rule though, notably `wp search-replace` ([doc](/commands/search-replace/)).
* Do not depend on other components such as plugins, themes etc.
* Are maintained by the WP-CLI team.

Third-party commands:

* Can be defined in plugins or themes.
* Can be distributed independent of a plugin or theme in the [Package Index](/package-index/).

## Anatomy of a command

WP-CLI supports registering any callable class, function, or closure as a command. `WP_CLI::add_command()` ([doc](/docs/internal-api/wp-cli-add-command/)) is used for both internal and third-party command registration.

### Required arguments

The two required arguments for `WP_CLI::add_command()` are `$name` and `$callable`:

1. `$name` is the command's name within WP-CLI's namespace (e.g. `plugin install` or `post list`).
2. `$callable` is the implementation of the command, as a callable class, function, or closure.

For instance, here are three ways of registering a functionally-equivalent command:

    // 1. Command is a function
    function foo_command( $args ) {
        WP_CLI::success( $args[0] );
    }
    WP_CLI::add_command( 'foo', 'foo_command' );

    // 2. Command is a closure
    $foo_command = function( $args ) {
        WP_CLI::success( $args[0] );
    }
    WP_CLI::add_command( 'foo', $foo_command );

    // 3. Command is a method on a class
    class Foo_Command {
        public function __invoke( $args ) {
            WP_CLI::success( $args[0] );
        }
    }
    WP_CLI::add_command( 'foo', 'Foo_Command' );

Importantly, classes behave a bit differently than functions and closures in that:

* Any public methods on a class are registered as subcommands of the command. For instance, given the examples above, a method `bar()` on the class `Foo` would be registered as `wp foo bar`. But...
* `__invoke()` is treated as a magic method. If a class implements `__invoke()`, the command name will be registered to that method and no other methods of that class will be registered as commands.

## Distributing your command

### Including a command in your plugin

    if ( defined( 'WP_CLI' ) && WP_CLI ) {
        require_once dirname( __FILE__ ) . '/inc/class-plugin-cli-command.php';
    }

### Publishing a WP-CLI package
