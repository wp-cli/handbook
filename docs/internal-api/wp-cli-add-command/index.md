---
layout: default
title: WP_CLI::add_command()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Registration

## WP_CLI::add_command()

Register a command to WP-CLI.

***

### Usage

    WP_CLI::add_command( $name, $callable, $args = array() )

<div>
<strong>$name</strong> (string) Name for the command (e.g. "post list" or "site empty").<br />
<strong>$callable</strong> (string) Command implementation as a class, function or closure.<br />
<strong>$args</strong> (array) {<br />     Optional An associative array with additional registration parameters.<br />     'before_invoke' => callback to execute before invoking the command,<br />     'shortdesc' => short description (80 char or less) for the command,<br />     'synopsis' => the synopsis for the command (string or array),<br />     'when' => execute callback on a named WP-CLI hook (e.g. before_wp_load),<br />}<br />
<strong>@return</strong> (true) on success, hard error if registration failed.<br /></p>
</div>


***

### Notes

WP-CLI supports using any callable class, function, or closure as a
command. `WP_CLI::add_command()` is used for both internal and
third-party command registration.

Command arguments are parsed from PHPDoc by default, but also can be
supplied as an optional third argument during registration.


    # Register a custom 'foo' command to output a supplied positional param.
    #
    # $ wp foo bar
    # Success: bar
    
    /**
     * My awesome closure command
     *
     * <message>
     * : An awesome message to display
     *
     * @when before_wp_load
     */
    $foo = function( $args ) {
        WP_CLI::success( $args[0] );
    };
    WP_CLI::add_command( 'foo', $foo );
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*




