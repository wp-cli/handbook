# wp db size

Display the database name and size.

Display the database name and size for `DB_NAME` specified in wp-config.php.
The size defaults to a human-readable number.

### OPTIONS

[\--size_format]
: Display the database size only, as a bare number.
\---
default: b
options:
 - b (bytes)
 - kb (kilobytes)
 - mb (megabytes)
 ---

[\--tables]
: Display each table name and size instead of the database size.

[\--format]
: table, csv, json
\---
default: table
options:
  - table
  - csv
  - json
\---

[\--scope=&lt;scope&gt;]
: Can be all, global, ms_global, blog, or old tables. Defaults to all.

[\--network]
: List all the tables in a multisite install. Overrides --scope=&lt;scope&gt;.

[\--all-tables-with-prefix]
: List all tables that match the table prefix even if not registered on $wpdb. Overrides --network.

[\--all-tables]
: List all tables in the database, regardless of the prefix, and even if not registered on $wpdb. Overrides --all-tables-with-prefix.

### EXAMPLES

    $ wp db size
    +-------------------+------+
    | Name              | Size |
    +-------------------+------+
    | wordpress_default | 6 MB |
    +-------------------+------+

    $ wp db size --tables
    +-----------------------+-------+
    | Name                  | Size  |
    +-----------------------+-------+
    | wp_users              | 64 KB |
    | wp_usermeta           | 48 KB |
    | wp_posts              | 80 KB |
    | wp_comments           | 96 KB |
    | wp_links              | 32 KB |
    | wp_options            | 32 KB |
    | wp_postmeta           | 48 KB |
    | wp_terms              | 48 KB |
    | wp_term_taxonomy      | 48 KB |
    | wp_term_relationships | 32 KB |
    | wp_termmeta           | 48 KB |
    | wp_commentmeta        | 48 KB |
    +-----------------------+-------+

    $ wp db size --size_format=b
    5865472

    $ wp db size --size_format=kb
    5728

    $ wp db size --size_format=mb
    6

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

