# wp cli alias update

Updates an alias.

### OPTIONS

&lt;key&gt;
: Key for the alias.

[\--set-user=&lt;user&gt;]
: Set user for alias.

[\--set-url=&lt;url&gt;]
: Set url for alias.

[\--set-path=&lt;path&gt;]
: Set path for alias.

[\--set-ssh=&lt;ssh&gt;]
: Set ssh for alias.

[\--set-http=&lt;http&gt;]
: Set http for alias.

[\--grouping=&lt;grouping&gt;]
: For grouping multiple aliases.

[\--config=&lt;config&gt;]
: Config file to be considered for operations.
\---
options:
  - global
  - project
\---

### EXAMPLES

    # Update alias.
    $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/
    Success: Updated 'prod' alias.

    # Update project alias.
    $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/ --config=project
    Success: Updated 'prod' alias.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**			  |
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
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
