# WP_CLI\Utils\wp_clear_object_cache()

Clear WordPress internal object caches.

***

## Usage

    WP_CLI\Utils\wp_clear_object_cache()

<div>
</div>


***

## Notes

In long-running scripts, the internal caches on `$wp_object_cache` and `$wpdb`
can grow to consume gigabytes of memory. Periodically calling this utility
can help with memory management.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-home-dir/">WP_CLI\Utils\get_home_dir()</a></strong> - Get the home directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-trailingslashit/">WP_CLI\Utils\trailingslashit()</a></strong> - Appends a trailing slash.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-temp-dir/">WP_CLI\Utils\get_temp_dir()</a></strong> - Get the system's temp directory. Warns user if it isn't writable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-php-binary/">WP_CLI\Utils\get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-get-php-binary/">WP_CLI::get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>



</ul>


