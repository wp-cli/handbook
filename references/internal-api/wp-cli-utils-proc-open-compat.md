# WP_CLI\Utils\proc_open_compat()

Windows compatible `proc_open()`. Works around bug in PHP, and also deals with *nix-like `ENV_VAR=blah cmd` environment variable prefixes.

***

## Usage

    WP_CLI\Utils\proc_open_compat( $cmd, $descriptorspec, $pipes, $cwd = null, $env = null, $other_options = null )

<div>
<strong>$cmd</strong> (string) Command to execute.<br />
<strong>string&gt;</strong> (array&lt;int,) $descriptorspec Indexed array of descriptor numbers and their values.<br />
<strong>string&gt;</strong> (array&lt;int,) &$pipes         Indexed array of file pointers that correspond to PHP's end of any pipes that are created.<br />
<strong>$cwd</strong> (string) Initial working directory for the command.<br />
<strong>string&gt;</strong> (array&lt;string,) $env            Array of environment variables.<br />
<strong>$other_options</strong> (array&lt;string&gt;) Array of additional options (Windows only).<br />
<strong>@return</strong> (resource) stripped of any environment variable settings.<br />
</div>


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-http-request/">WP_CLI\Utils\http_request()</a></strong> - Make a HTTP request to a remote URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-ssh-url/">WP_CLI\Utils\parse_ssh_url()</a></strong> - Parse a SSH url for its host, port, and path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-basename/">WP_CLI\Utils\basename()</a></strong> - Locale-independent version of basename()</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-ispiped/">WP_CLI\Utils\isPiped()</a></strong> - Checks whether the output of the current script is a TTY or a pipe / redirect</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-esc-like/">WP_CLI\Utils\esc_like()</a></strong> - First half of escaping for LIKE special characters % and _ before preparing for MySQL.</li>



</ul>


