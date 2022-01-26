# wp import

Imports content from a given WXR file.

Provides a command line interface to the WordPress Importer plugin, for performing data migrations.

### OPTIONS

&lt;file&gt;...
: Path to one or more valid WXR files for importing. Directories are also accepted.

\--authors=&lt;authors&gt;
: How the author mapping should be handled. Options are 'create', 'mapping.csv', or 'skip'. The first will create any non-existent users from the WXR file. The second will read author mapping associations from a CSV, or create a CSV for editing if the file path doesn't exist. The CSV requires two columns, and a header row like "old_user_login,new_user_login". The last option will skip any author mapping.

[\--skip=&lt;data-type&gt;]
: Skip importing specific data. Supported options are: 'attachment' and 'image_resize' (skip time-consuming thumbnail generation).

### EXAMPLES

    # Import content from a WXR file
    $ wp import example.wordpress.2016-06-21.xml --authors=create
    Starting the import process...
    Processing post #1 ("Hello world!") (post_type: post)
    -- 1 of 1
    -- Tue, 21 Jun 2016 05:31:12 +0000
    -- Imported post as post_id #1
    Success: Finished importing from 'example.wordpress.2016-06-21.xml' file.

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
