---
layout: doc
title: Commands Cookbook
description: The full 101 on writing a command.
category: Guides
---

Creating your own custom WP-CLI command can be easier than it looks.

## Overview

WP-CLI's goal is to offer a complete alternative to the WordPress admin; for any action you might want to perform in the WordPress admin, there should be an equivalent WP-CLI command. A _command_ is an atomic unit of WP-CLI functionality. `wp plugin install` ([doc](/commands/plugin/install/)) is one such command, as is `wp plugin activate` ([doc](/commands/plugin/activate/)). Commands are useful because they can offer simple, precise interfaces for performing complex tasks.

_But_, the WordPress admin is a Swiss Army knife of infinite complexity. There's no way just this project could handle every use case. This is why WP-CLI includes a set of [common internal commands](/commands/), while also offering a rich API for third-parties to register and [distribute their own commands](/package-index/).

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

~~~
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
~~~

Importantly, classes behave a bit differently than functions and closures in that:

* Any public methods on a class are registered as subcommands of the command. For instance, given the examples above, a method `bar()` on the class `Foo` would be registered as `wp foo bar`. But...
* `__invoke()` is treated as a magic method. If a class implements `__invoke()`, the command name will be registered to that method and no other methods of that class will be registered as commands.

### Command internals

Your command can do whatever it wants!

As an example, say you were tasked with finding all unused themes on a multisite network ([#2523](https://github.com/wp-cli/wp-cli/issues/2523)). If you had to perform this task manually through the WordPress admin, it would probably take hours, if not days, of effort. However, if you're familiar with writing WP-CLI commands, you could complete the task in 15 minutes or less.

Here's what such a command looks like:

~~~
/**
 * Find unused themes on a multisite network.
 *
 * Iterates through all sites on a network to find themes which aren't enabled
 * on any site.
 */
$find_unused_themes_command = function() {
	$response = WP_CLI::launch_self( 'site list', array(), array( 'format' => 'json' ), false, true );
	$sites = json_decode( $response->stdout );
	$unused = array();
	$used = array();
	foreach( $sites as $site ) {
		WP_CLI::log( "Checking {$site->url} for unused themes..." );
		$response = WP_CLI::launch_self( 'theme list', array(), array( 'url' => $site->url, 'format' => 'json' ), false, true );
		$themes = json_decode( $response->stdout );
		foreach( $themes as $theme ) {
			if ( 'no' == $theme->enabled && 'inactive' == $theme->status && ! in_array( $theme->name, $used ) ) {
				$unused[ $theme->name ] = $theme;
			} else {
				if ( isset( $unused[ $theme->name ] ) ) {
					unset( $unused[ $theme->name ] );
				}
				$used[] = $theme->name;
			}
		}
	}
	WP_CLI\Utils\format_items( 'table', $unused, array( 'name', 'version' ) );
};
WP_CLI::add_command( 'find-unused-themes', $find_unused_themes_command, array(
	'before_invoke' => function(){
		if ( ! is_multisite() ) {
			WP_CLI::error( 'This is not a multisite install.' );
		}
	},
) );
~~~

Let's run through the [internal APIs](/docs/internal-apis/) this command uses to achieve its goal:

* `WP_CLI::add_command()` ([doc](/docs/internal-api/wp-cli-add-command/)) is used to register a `find-unused-themes` command to the `$find_unused_themes_command` closure. The `before_invoke` argument makes it possible to verify the command is running on a multisite install, and error if not.
* `WP_CLI::error()` ([doc](/docs/internal-api/wp-cli-error/)) renders a nicely formatted error message and exits.
* `WP_CLI::launch_self()` ([doc](/docs/internal-api/wp-cli-launch-self/)) initially spawns a process to get a list of all sites, then is later used to get the list of themes for a given site.
* `WP_CLI::log()` ([doc](/docs/internal-api/wp-cli-log/)) renders informational output to the end user.
* `WP_CLI\Utils\format_items()` ([doc](/docs/internal-api/wp-cli-utils-format-items/)) renders the list of unused themes after the command has completed its discovery.

### Writing tests

tk

## Distributing your command

tk

### Including a command in your plugin

    if ( defined( 'WP_CLI' ) && WP_CLI ) {
        require_once dirname( __FILE__ ) . '/inc/class-plugin-cli-command.php';
    }

### Publishing a WP-CLI package
