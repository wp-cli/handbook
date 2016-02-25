---
layout: default
title: WP_CLI::add_hook()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Registration

## WP_CLI::add_hook()

Schedule a callback to be executed at a certain point.

***

### Usage

    WP_CLI::add_hook( $when, $callback )

<div>
<strong>$when</strong> (string) Identifier for the hook.<br />
<strong>$callback</strong> (mixed) Callback to execute when hook is called.<br />
<strong>@return</strong> (null) <br /></p>
</div>


***

### Notes

Hooks conceptually are very similar to WordPress actions. WP-CLI hooks
are typically called before WordPress is loaded.

WP-CLI hooks include:

* 'before_invoke:<command>' - Just before a command is invoked.
* 'after_invoke:<command>' - Just after a command is involved.
* 'before_wp_load' - Just before the WP load process begins.
* 'before_wp_config_load' - After wp-config.php has been located.
* 'after_wp_config_load' - After wp-config.php has been loaded into scope.
* 'after_wp_load' - Just after the WP load process has completed.

WP-CLI commands can create their own hooks with `WP_CLI::do_hook()`.


    # `wp network meta` confirms command is executing in multisite context.
    WP_CLI::add_command( 'network meta', 'Network_Meta_Command', array(
       'before_invoke' => function () {
           if ( !is_multisite() ) {
               WP_CLI::error( 'This is not a multisite install.' );
           }
       }
    ) );
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-do-hook/">WP_CLI::do_hook()</a></strong> - Execute callbacks registered to a given hook.</li>


<li><strong><a href="/docs/internal-api/wp-cli-add-command/">WP_CLI::add_command()</a></strong> - Register a command to WP-CLI.</li>



</ul>


