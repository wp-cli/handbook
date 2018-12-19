# wp db columns

Displays information about a given table.

### OPTIONS

[&lt;table&gt;]
: Name of the database table.

[\--format]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

### EXAMPLES

    $ wp db columns wp_posts
    +-----------------------+---------------------+------+-----+---------------------+----------------+
    |         Field         |        Type         | Null | Key |       Default       |     Extra      |
    +-----------------------+---------------------+------+-----+---------------------+----------------+
    | ID                    | bigint(20) unsigned | NO   | PRI |                     | auto_increment |
    | post_author           | bigint(20) unsigned | NO   | MUL | 0                   |                |
    | post_date             | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
    | post_date_gmt         | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
    | post_content          | longtext            | NO   |     |                     |                |
    | post_title            | text                | NO   |     |                     |                |
    | post_excerpt          | text                | NO   |     |                     |                |
    | post_status           | varchar(20)         | NO   |     | publish             |                |
    | comment_status        | varchar(20)         | NO   |     | open                |                |
    | ping_status           | varchar(20)         | NO   |     | open                |                |
    | post_password         | varchar(255)        | NO   |     |                     |                |
    | post_name             | varchar(200)        | NO   | MUL |                     |                |
    | to_ping               | text                | NO   |     |                     |                |
    | pinged                | text                | NO   |     |                     |                |
    | post_modified         | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
    | post_modified_gmt     | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
    | post_content_filtered | longtext            | NO   |     |                     |                |
    | post_parent           | bigint(20) unsigned | NO   | MUL | 0                   |                |
    | guid                  | varchar(255)        | NO   |     |                     |                |
    | menu_order            | int(11)             | NO   |     | 0                   |                |
    | post_type             | varchar(20)         | NO   | MUL | post                |                |
    | post_mime_type        | varchar(100)        | NO   |     |                     |                |
    | comment_count         | bigint(20)          | NO   |     | 0                   |                |
    +-----------------------+---------------------+------+-----+---------------------+----------------+

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
