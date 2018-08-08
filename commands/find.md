# wp find

Find WordPress installations on the filesystem.

Recursively iterates subdirectories of provided `&lt;path&gt;` to find and report WordPress installations. A WordPress installation is a wp-includes directory with a version.php file.

Avoids recursing some known paths (e.g. /node_modules/, hidden sys dirs) to significantly improve performance.

Indicates depth at which the WordPress installations was found, and its alias, if it has one.

```
$ wp find ./
+--------------------------------------+---------------------+-------+--------+
| version_path                         | version             | depth | alias  |
+--------------------------------------+---------------------+-------+--------+
| /Users/wpcli/wp-includes/version.php | 4.8-alpha-39357-src | 2     | @wpcli |
+--------------------------------------+---------------------+-------+--------+
```

### OPTIONS

&lt;path&gt;
: Path to search the subdirectories of.

[\--skip-ignored-paths]
: Skip the paths that are ignored by default.

[\--include_ignored_paths=&lt;paths&gt;]
: Include additional ignored paths as CSV (e.g. '/sys-backup/,/temp/').

[\--max_depth=&lt;max-depth&gt;]
: Only recurse to a specified depth, inclusive.

[\--fields=&lt;fields&gt;]
: Limit the output to specific row fields.

[\--field=&lt;field&gt;]
: Output a specific field for each row.

[\--format=&lt;format&gt;]
: Render output in a specific format.
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
  - count
\---

[\--verbose]
: Log useful information to STDOUT.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
