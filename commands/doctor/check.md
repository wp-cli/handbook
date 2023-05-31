# wp doctor check

Run a series of checks against WordPress to diagnose issues.

A check is a routine run against some scope of WordPress that reports a 'status' and a 'message'. The status can be 'success', 'warning', or
'error'. The message is a human-readable explanation of the status. If any of the checks fail, then the command will exit with the code `1`.

### OPTIONS

[&lt;checks&gt;...]
: Names of one or more checks to run.

[\--all]
: Run all registered checks.

[\--spotlight]
: Focus on warnings and errors; ignore any successful checks.

[\--config=&lt;file&gt;]
: Use checks registered in a specific configuration file.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Default is name,status,message.

[\--format=&lt;format&gt;]
: Render results in a particular format.
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
  - count
\---

### EXAMPLES

    # Verify WordPress core is up to date.
    $ wp doctor check core-update
    +-------------+---------+-----------------------------------------------------------+
    | name        | status  | message                                                   |
    +-------------+---------+-----------------------------------------------------------+
    | core-update | warning | A new major version of WordPress is available for update. |
    +-------------+---------+-----------------------------------------------------------+

    # Verify the site is public as expected.
    $ wp doctor check option-blog-public
    +--------------------+--------+--------------------------------------------+
    | name               | status | message                                    |
    +--------------------+--------+--------------------------------------------+
    | option-blog-public | error  | Site is private but expected to be public. |
    +--------------------+--------+--------------------------------------------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
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
