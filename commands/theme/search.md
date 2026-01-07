# wp theme search

Searches the WordPress.org theme directory.

Displays themes in the WordPress.org theme directory matching a given search query.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<search>
: The string to search for.

[\--page=<page>]
: Optional page to display.
\---
default: 1
\---

[\--per-page=<per-page>]
: Optional number of results to display. Defaults to 10.

[\--field=<field>]
: Prints the value of a single field for each theme.

[\--fields=<fields>]
: Ask for specific fields from the API. Defaults to name,slug,author,rating. Acceptable values:

    **name**: Theme Name
    **slug**: Theme Slug
    **version**: Current Version Number
    **author**: Theme Author
    **preview_url**: Theme Preview URL
    **screenshot_url**: Theme Screenshot URL
    **rating**: Theme Rating
    **num_ratings**: Number of Theme Ratings
    **homepage**: Theme Author's Homepage
    **description**: Theme Description
    **url**: Theme's URL on wordpress.org

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    $ wp theme search photo --per-page=6
    Success: Showing 6 of 203 themes.
    +----------------------+----------------------+--------+
    | name                 | slug                 | rating |
    +----------------------+----------------------+--------+
    | Photos               | photos               | 100    |
    | Infinite Photography | infinite-photography | 100    |
    | PhotoBook            | photobook            | 100    |
    | BG Photo Frame       | bg-photo-frame       | 0      |
    | fPhotography         | fphotography         | 0      |
    | Photo Perfect        | photo-perfect        | 98     |
    +----------------------+----------------------+--------+

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
