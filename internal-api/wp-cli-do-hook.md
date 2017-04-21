# WP_CLI::do_hook()

Execute callbacks registered to a given hook.

***

## Usage

    WP_CLI::do_hook( $when )

<div>
<strong>$when</strong> (string) Identifier for the hook.<br />
<strong>@return</strong> (null) <br />
</div>


***

## Notes

See `WP_CLI::add_hook()` for details on WP-CLI's internal hook system.
Commands can provide and call their own hooks.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-hook/">WP_CLI::add_hook()</a></strong> - Schedule a callback to be executed at a certain point.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-wp-hook/">WP_CLI::add_wp_hook()</a></strong> - Add a callback to a WordPress action or filter.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-command/">WP_CLI::add_command()</a></strong> - Register a command to WP-CLI.</li>



</ul>


