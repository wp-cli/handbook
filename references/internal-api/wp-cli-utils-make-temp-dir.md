# WP_CLI\Utils\make_temp_dir()

Create a unique temporary directory safely without following symlinks.

***

## Usage

    WP_CLI\Utils\make_temp_dir( $prefix = wp-cli- )

<div>
<strong>$prefix</strong> (string) Optional. Prefix for the temporary directory name. Default 'wp-cli-'.<br />
<strong>@return</strong> (string) to the created temporary directory with a trailing slash.<br />
</div>


***

## Notes

The directory is only accessible by its owner on non-Windows systems.

The directory is created in the directory returned by WP-CLI's `get_temp_dir()`
(based on `sys_get_temp_dir()`), not WordPress's `get_temp_dir()`, and is
not removed automatically; callers are responsible for cleaning it up.

On failure, this function exits via `WP_CLI::error()` rather than throwing.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-home-dir/">WP_CLI\Utils\get_home_dir()</a></strong> - Get the home directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-trailingslashit/">WP_CLI\Utils\trailingslashit()</a></strong> - Appends a trailing slash.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-is-stream/">WP_CLI\Utils\is_stream()</a></strong> - Check if a path is a PHP stream URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-normalize-path/">WP_CLI\Utils\normalize_path()</a></strong> - Normalize a filesystem path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-temp-dir/">WP_CLI\Utils\get_temp_dir()</a></strong> - Get the system's temp directory. Warns user if it isn't writable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-make-temp-file/">WP_CLI\Utils\make_temp_file()</a></strong> - Create a unique temporary file safely without following symlinks.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-php-binary/">WP_CLI\Utils\get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-get-php-binary/">WP_CLI::get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>



</ul>


