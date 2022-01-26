# wp scaffold block

Generates PHP, JS and CSS code for registering a Gutenberg block for a plugin or theme.

Blocks are the fundamental element of the Gutenberg editor. They are the primary way in which plugins and themes can register their own functionality and extend the capabilities of the editor.

Visit the [Gutenberg handbook](https://wordpress.org/gutenberg/handbook/block-api/) to learn more about Block API.

When you scaffold a block you must use either the theme or plugin option. The latter is recommended.

### OPTIONS

&lt;slug&gt;
: The internal name of the block.

[\--title=&lt;title&gt;]
: The display title for your block.

[\--dashicon=&lt;dashicon&gt;]
: The dashicon to make it easier to identify your block.

[\--category=&lt;category&gt;]
: The category name to help users browse and discover your block.
\---
default: widgets
options:
  - common
  - embed
  - formatting
  - layout
  - widgets
\---

[\--theme]
: Create files in the active theme directory. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[\--plugin=&lt;plugin&gt;]
: Create files in the given plugin's directory.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a 'movie' block for the 'movies' plugin
    $ wp scaffold block movie --title="Movie block" --plugin=movies
    Success: Created block 'Movie block'.

    # Generate a 'movie' block for the 'simple-life' theme
    $ wp scaffold block movie --title="Movie block" --theme=simple-life
     Success: Created block 'Movie block'.

    # Create a new plugin and add two blocks
    # Create plugin called books
    $ wp scaffold plugin books
    # Add a block called book to plugin books
    $ wp scaffold block book --title="Book" --plugin=books
    # Add a second block to plugin called books.
    $ wp scaffold block books --title="Book List" --plugin=books

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
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
