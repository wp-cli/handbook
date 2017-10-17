# wp db query

Execute a SQL query against the database.

Executes an arbitrary SQL query using `DB_HOST`, `DB_NAME`, `DB_USER`
 and `DB_PASSWORD` database credentials specified in wp-config.php.

### OPTIONS

[&lt;sql&gt;]
: A SQL query. If not passed, will try to read from STDIN.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to mysql.

### EXAMPLES

    # Execute a query stored in a file
    $ wp db query < debug.sql

    # Check all tables in the database
    $ wp db query "CHECK TABLE $(wp db tables | paste -s -d, -);"
    +---------------------------------------+-------+----------+----------+
    | Table                                 | Op    | Msg_type | Msg_text |
    +---------------------------------------+-------+----------+----------+
    | wordpress_dbase.wp_users              | check | status   | OK       |
    | wordpress_dbase.wp_usermeta           | check | status   | OK       |
    | wordpress_dbase.wp_posts              | check | status   | OK       |
    | wordpress_dbase.wp_comments           | check | status   | OK       |
    | wordpress_dbase.wp_links              | check | status   | OK       |
    | wordpress_dbase.wp_options            | check | status   | OK       |
    | wordpress_dbase.wp_postmeta           | check | status   | OK       |
    | wordpress_dbase.wp_terms              | check | status   | OK       |
    | wordpress_dbase.wp_term_taxonomy      | check | status   | OK       |
    | wordpress_dbase.wp_term_relationships | check | status   | OK       |
    | wordpress_dbase.wp_termmeta           | check | status   | OK       |
    | wordpress_dbase.wp_commentmeta        | check | status   | OK       |
    +---------------------------------------+-------+----------+----------+

    # Pass extra arguments through to MySQL
    $ wp db query 'SELECT * FROM wp_options WHERE option_name="home"' --skip-column-names
    +---+------+------------------------------+-----+
    | 2 | home | http://wordpress-develop.dev | yes |
    +---+------+------------------------------+-----+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id|login|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
