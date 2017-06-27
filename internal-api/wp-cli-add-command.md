# WP_CLI::add_command()

Register a command to WP-CLI.

***

## Usage

    WP_CLI::add_command( $name, $callable, $args = array() )

<div>
<strong>$name</strong> (string) Name for the command (e.g. "post list" or "site empty").<br />
<strong>$callable</strong> (string) Command implementation as a class, function or closure.<br />
<strong>$args</strong> (array) {<br />   Optional. An associative array with additional registration parameters.<br />   @type callable $before_invoke Callback to execute before invoking the command.<br />   @type callable $after_invoke  Callback to execute after invoking the command.<br />   @type string   $short_desc    Short description (80 char or less) for the command.<br />   @type string   $synopsis      The synopsis for the command (string or array).<br />   @type string   $when          Execute callback on a named WP-CLI hook (e.g. before_wp_load).<br />   @type bool     $is_deferred   Whether the command addition had already been deferred.<br />}<br />
<strong>@return</strong> (true) on success, false if deferred, hard error if registration failed.<br />
</div>


***

## Notes

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


    # Register a custom 'foo-assoc' command to output a supplied associative param.
    #
    # $ wp foo-assos --foo=bar
    # Success: bar
    
    /**
     * My awesome closure command
     *
     * <message>
     * : An awesome message to display
     *
     * @when before_wp_load
     */
    $foo_assoc = function( $args, $args_assoc ) {
        WP_CLI::success( $args_assoc['foo'] );
    };
    WP_CLI::add_command( 'foo-assoc', $foo_assoc );


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-hook/">WP_CLI::add_hook()</a></strong> - Schedule a callback to be executed at a certain point.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-do-hook/">WP_CLI::do_hook()</a></strong> - Execute callbacks registered to a given hook.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-wp-hook/">WP_CLI::add_wp_hook()</a></strong> - Add a callback to a WordPress action or filter.</li>



</ul>


