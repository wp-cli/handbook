# wp user privacy-request list

Lists privacy requests.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--action-type=&lt;action-type&gt;]
: Filter the list by action type.
\---
options:
  - export_personal_data
  - remove_personal_data
\---

[\--status=&lt;status&gt;]
: Filter the list by request status.
\---
options:
  - request-pending
  - request-confirmed
  - request-failed
  - request-completed
\---

[\--field=&lt;field&gt;]
: Prints the value of a single field for each request.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each request:

* ID
* user_email
* action_name
* status
* created_timestamp

These fields are optionally available:

* user_id
* confirmed_timestamp
* completed_timestamp

### EXAMPLES

    # List all privacy requests.
    $ wp user privacy-request list
    +----+-------------------+----------------------+-------------------+--------------------+
    | ID | user_email        | action_name          | status            | created_timestamp  |
    +----+-------------------+----------------------+-------------------+--------------------+
    | 1  | bob@example.com   | export_personal_data | request-pending   | 1713779524         |
    +----+-------------------+----------------------+-------------------+--------------------+

    # List only export requests.
    $ wp user privacy-request list --action-type=export_personal_data

    # List only completed requests.
    $ wp user privacy-request list --status=request-completed

    # List request IDs only.
    $ wp user privacy-request list --format=ids
    1 2

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
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
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
