# WP_CLI\Utils\http_request()

Make a HTTP request to a remote URL.

***

## Usage

    WP_CLI\Utils\http_request( $method, $url, $data = null, $headers = [], $options = [] )

<div>
<strong>$method</strong> (string) HTTP method (GET, POST, DELETE, etc.).<br />
<strong>$url</strong> (string) URL to make the HTTP request to.<br />
<strong>$data</strong> (array|null) Data to send either as a query string for GET/HEAD requests,<br />
<strong>$headers</strong> (array) Add specific headers to the request.<br />
<strong>$options</strong> (array) {<br />    Optional. An associative array of additional request options.<br />    @type bool $halt_on_error Whether or not command execution should be halted on error. Default: true<br />    @type bool|string $verify A boolean to use enable/disable SSL verification<br />                              or string absolute path to CA cert to use.<br />                              Defaults to detected CA cert bundled with the Requests library.<br />    @type bool $insecure      Whether to retry automatically without certificate validation.<br />}<br />
<strong>@return</strong> (object) <br />
</div>


***

## Notes

Wraps the Requests HTTP library to ensure every request includes a cert.

```
# `wp core download` verifies the hash for a downloaded WordPress archive

$md5_response = Utils\http_request( 'GET', $download_url . '.md5' );
if ( 20 != substr( $md5_response->status_code, 0, 2 ) ) {
     WP_CLI::error( "Couldn't access md5 hash for release (HTTP code {$response->status_code})" );
}
```
                           or in the body for POST requests.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-ssh-url/">WP_CLI\Utils\parse_ssh_url()</a></strong> - Parse a SSH url for its host, port, and path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-basename/">WP_CLI\Utils\basename()</a></strong> - Locale-independent version of basename()</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-ispiped/">WP_CLI\Utils\isPiped()</a></strong> - Checks whether the output of the current script is a TTY or a pipe / redirect</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-proc-open-compat/">WP_CLI\Utils\proc_open_compat()</a></strong> - Windows compatible `proc_open()`. Works around bug in PHP, and also deals with *nix-like `ENV_VAR=blah cmd` environment variable prefixes.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-esc-like/">WP_CLI\Utils\esc_like()</a></strong> - First half of escaping for LIKE special characters % and _ before preparing for MySQL.</li>



</ul>


