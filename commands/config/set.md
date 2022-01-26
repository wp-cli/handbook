# wp config set

Sets the value of a specific constant or variable defined in wp-config.php file.

### OPTIONS

&lt;name&gt;
: Name of the wp-config.php constant or variable.

&lt;value&gt;
: Value to set the wp-config.php constant or variable to.

[\--add]
: Add the value if it doesn't exist yet. This is the default behavior, override with --no-add.

[\--raw]
: Place the value into the wp-config.php file as is, instead of as a quoted string.

[\--anchor=&lt;anchor&gt;]
: Anchor string where additions of new values are anchored around. Defaults to "/* That's all, stop editing!". The special case "EOF" string uses the end of the file as the anchor.

[\--placement=&lt;placement&gt;]
: Where to place the new values in relation to the anchor string.
\---
default: 'before'
options:
  - before
  - after
\---

[\--separator=&lt;separator&gt;]
: Separator string to put between an added value and its anchor string. The following escape sequences will be recognized and properly interpreted: '\n' => newline, '\r' => carriage return, '\t' => tab. Defaults to a single EOL ("\n" on *nix and "\r\n" on Windows).

[\--type=&lt;type&gt;]
: Type of the config value to set. Defaults to 'all'.
\---
default: all
options:
  - constant
  - variable
  - all
\---

[\--config-file=&lt;path&gt;]
: Specify the file path to the config file to be modified. Defaults to the root of the WordPress installation and the filename "wp-config.php".

### EXAMPLES

    # Set the WP_DEBUG constant to true.
    $ wp config set WP_DEBUG true --raw

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
