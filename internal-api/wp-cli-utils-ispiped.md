# WP_CLI\Utils\isPiped()

Checks whether the output of the current script is a TTY or a pipe / redirect

***

## Usage

    WP_CLI\Utils\isPiped()

<div>
<strong>@return</strong> (bool) <br />
</div>


***

## Notes

Returns true if STDOUT output is being redirected to a pipe or a file; false is
output is being sent directly to the terminal.

If an env variable SHELL_PIPE exists, returned result depends it's
value. Strings like 1, 0, yes, no, that validate to booleans are accepted.

To enable ASCII formatting even when shell is piped, use the
ENV variable SHELL_PIPE=0


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-http-request/">WP_CLI\Utils\http_request()</a></strong> - Make a HTTP request to a remote URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-ssh-url/">WP_CLI\Utils\parse_ssh_url()</a></strong> - Parse a SSH url for its host, port, and path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-basename/">WP_CLI\Utils\basename()</a></strong> - Locale-independent version of basename()</li>



</ul>


