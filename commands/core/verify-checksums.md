# wp core verify-checksums

Verifies WordPress files against WordPress.org's checksums.

Downloads md5 checksums for the current version from WordPress.org, and compares those checksums against the currently installed files.

For security, avoids loading WordPress when verifying checksums.

If you experience issues verifying from this command, ensure you are passing the relevant `--locale` and `--version` arguments according to the values from the `Dashboard-&gt;Updates` menu in the admin area of the site.

### OPTIONS

[\--version=&lt;version&gt;]
: Verify checksums against a specific version of WordPress.

[\--locale=&lt;locale&gt;]
: Verify checksums against a specific locale of WordPress.

### EXAMPLES

    # Verify checksums
    $ wp core verify-checksums
    Success: WordPress installation verifies against checksums.

    # Verify checksums for given WordPress version
    $ wp core verify-checksums --version=4.0
    Success: WordPress installation verifies against checksums.

    # Verify checksums for given locale
    $ wp core verify-checksums --locale=en_US
    Success: WordPress installation verifies against checksums.

    # Verify checksums for given locale
    $ wp core verify-checksums --locale=ja
    Warning: File doesn't verify against checksum: wp-includes/version.php
    Warning: File doesn't verify against checksum: readme.html
    Warning: File doesn't verify against checksum: wp-config-sample.php
    Error: WordPress installation doesn't verify against checksums.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
