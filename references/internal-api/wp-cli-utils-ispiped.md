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

Returns `true` if `STDOUT` output is being redirected to a pipe or a file; `false` is
output is being sent directly to the terminal.

If an env variable `SHELL_PIPE` exists, the returned result depends on its
value. Strings like `1`, `0`, `yes`, `no`, that validate to booleans are accepted.

To enable ASCII formatting even when the shell is piped, use the
ENV variable `SHELL_PIPE=0`.
```
SHELL_PIPE=0 wp plugin list | cat
```

Note that the db command forwards to the mysql client, which is unaware of the env
variable. For db commands, pass the `--table` option instead.
```
wp db query --table "SELECT 1" | cat
```


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-http-request/">WP_CLI\Utils\http_request()</a></strong> - Make a HTTP request to a remote URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-ssh-url/">WP_CLI\Utils\parse_ssh_url()</a></strong> - Parse a SSH url for its host, port, and path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-basename/">WP_CLI\Utils\basename()</a></strong> - Locale-independent version of basename()</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-proc-open-compat/">WP_CLI\Utils\proc_open_compat()</a></strong> - Windows compatible `proc_open()`. Works around bug in PHP, and also deals with *nix-like `ENV_VAR=blah cmd` environment variable prefixes.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-esc-like/">WP_CLI\Utils\esc_like()</a></strong> - First half of escaping for LIKE special characters % and _ before preparing for MySQL.</li>



</ul>


