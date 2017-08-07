# wp import

Import content from a WXR file.

Provides a command line interface to the WordPress Importer plugin, for
performing data migrations.

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

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

