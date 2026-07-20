# HTTP Proxy Configuration

When running WP-CLI in restricted network environments or behind corporate firewalls, you may need to route outbound HTTP/HTTPS requests through an HTTP proxy.

WP-CLI and WordPress core use the Requests HTTP library for performing remote HTTP requests. By default, WP-CLI does not automatically read or trust proxy environment variables (such as `HTTP_PROXY` or `HTTPS_PROXY`) out of the box.

To configure an HTTP proxy for WP-CLI, you can use the community package `ekamran/wp-cli-http-proxy-command` (recommended for full WP-CLI and WordPress proxy support), or manually configure WordPress core proxy constants in a bootstrap file.

## Using the HTTP Proxy Package (Recommended)

The [`ekamran/wp-cli-http-proxy-command`](https://github.com/ekamran/wp-cli-http-proxy-command) community package provides complete proxy support for both WP-CLI's internal HTTP requests (e.g. package management, updates) and WordPress core HTTP requests.

> Note: The package requires WP-CLI 2.12.0 or newer.

### Installation

Install the package using the `wp package install` command:

```bash
wp package install ekamran/wp-cli-http-proxy-command
```

### Configuration

Add an `http-proxy` configuration block to your project's `wp-cli.yml` or your global `~/.wp-cli/config.yml` file:

```yaml
http-proxy:
  url: http://proxy.example.com:8080
```

Scheme-less proxy URLs are also supported:

```yaml
http-proxy:
  url: proxy.example.com:8080
```

Or configure the host and port separately:

```yaml
http-proxy:
  host: proxy.example.com
  port: 8080
```

### Authentication and Bypass Hosts

If your proxy requires authentication or if specific hosts should bypass the proxy, specify them in the configuration:

```yaml
http-proxy:
  url: http://proxy.example.com:8080
  username: proxy-user
  password: proxy-password
  bypass-hosts:
    - localhost
    - 127.0.0.1
    - "*.local"
    - "*.example.com"
```

### Using Environment Variables

By default, proxy environment variables are not read automatically. To opt into reading proxy settings from your environment variables, set `env: true`:

```yaml
http-proxy:
  env: true
```

When `env: true` is set, the package checks the following environment variables in order:
1. `HTTPS_PROXY`
2. `https_proxy`
3. `HTTP_PROXY`
4. `http_proxy`

### Diagnostic Commands

The package includes diagnostic commands to help verify your proxy configuration:

Check the current proxy configuration status:

```bash
wp http-proxy status
```

Perform a test HTTP request through WP-CLI's HTTP helper to verify connectivity:

```bash
wp http-proxy check https://wordpress.org
```

### Behavior and Disabling

When active, the package:
- Automatically defines missing WordPress proxy constants (`WP_PROXY_HOST`, `WP_PROXY_PORT`, `WP_PROXY_USERNAME`, `WP_PROXY_PASSWORD`, `WP_PROXY_BYPASS_HOSTS`) after `wp-config.php` loads.
- Configures WP-CLI's internal HTTP requests by filtering `http_request_options`.
- Normalizes proxy URLs to Requests' `host:port` format.
- Applies `bypass-hosts` to both WordPress and WP-CLI HTTP requests.

To temporarily disable the proxy without removing the package, set `enabled: false` in your YAML configuration:

```yaml
http-proxy:
  enabled: false
```

You can also bypass all installed packages for a single command invocation by passing the `--skip-packages` global flag:

```bash
wp --skip-packages core update
```

## Manual Configuration (WordPress Core Only)

If you cannot install community packages or only need to configure proxy support for WordPress core HTTP requests, you can define the core proxy constants in a custom PHP file loaded via `wp-cli.yml`.

1. Create a `proxy.php` file (e.g. in your project or home directory):

```php
<?php
$proxy_host = getenv( 'HTTPS_PROXY' ) ?: getenv( 'HTTP_PROXY' );

if ( ! $proxy_host ) {
	return;
}

$proxy_url = parse_url( $proxy_host );

if ( ! empty( $proxy_url['host'] ) ) {
	define( 'WP_PROXY_HOST', $proxy_url['host'] );
}

if ( ! empty( $proxy_url['port'] ) ) {
	define( 'WP_PROXY_PORT', $proxy_url['port'] );
}

if ( ! empty( $proxy_url['user'] ) ) {
	define( 'WP_PROXY_USERNAME', $proxy_url['user'] );
}

if ( ! empty( $proxy_url['pass'] ) ) {
	define( 'WP_PROXY_PASSWORD', $proxy_url['pass'] );
}

if ( ! defined( 'WP_PROXY_BYPASS_HOSTS' ) ) {
	define( 'WP_PROXY_BYPASS_HOSTS', 'localhost, 127.0.0.1' );
}
```

2. Require this file in your `wp-cli.yml` or `~/.wp-cli/config.yml`:

```yaml
require:
  - proxy.php
```

> Note: This manual approach sets the constants used by WordPress core HTTP requests after WordPress loads, but does not automatically route WP-CLI's pre-bootstrap or standalone HTTP requests (such as `wp package` commands). For complete proxy coverage across all WP-CLI operations, use the `ekamran/wp-cli-http-proxy-command` package.
