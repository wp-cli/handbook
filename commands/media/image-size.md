# wp media image-size

List image sizes registered with WordPress.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Render output in a specific format
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
  - count
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each image size:
* name
* width
* height
* crop

### EXAMPLES

    # List all registered image sizes
    $ wp media image-size
    +---------------------------+-------+--------+-------+
    | name                      | width | height | crop  |
    +---------------------------+-------+--------+-------+
    | full                      |       |        | N/A   |
    | twentyfourteen-full-width | 1038  | 576    | hard  |
    | large                     | 1024  | 1024   | soft  |
    | medium_large              | 768   | 0      | soft  |
    | medium                    | 300   | 300    | soft  |
    | thumbnail                 | 150   | 150    | hard  |
    +---------------------------+-------+--------+-------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
