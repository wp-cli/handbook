# wp scaffold plugin

Generates starter code for a plugin.

The following files are always generated:

* `plugin-slug.php` is the main PHP plugin file.
* `readme.txt` is the readme file for the plugin.
* `package.json` needed by NPM holds various metadata relevant to the project. Packages: `grunt`, `grunt-wp-i18n` and `grunt-wp-readme-to-markdown`.
* `Gruntfile.js` is the JS file containing Grunt tasks. Tasks: `i18n` containing `addtextdomain` and `makepot`, `readme` containing `wp_readme_to_markdown`.
* `.editorconfig` is the configuration file for Editor.
* `.gitignore` tells which files (or patterns) git should ignore.
* `.distignore` tells which files and folders should be ignored in distribution.

The following files are also included unless the `--skip-tests` is used:

* `phpunit.xml.dist` is the configuration file for PHPUnit.
* `.travis.yml` is the configuration file for Travis CI. Use `--ci=&lt;provider&gt;` to select a different service.
* `bin/install-wp-tests.sh` configures the WordPress test suite and a test database.
* `tests/bootstrap.php` is the file that makes the current plugin active when running the test suite.
* `tests/test-sample.php` is a sample file containing test cases.
* `.phpcs.xml.dist` is a collection of PHP_CodeSniffer rules.

### OPTIONS

&lt;slug&gt;
: The internal name of the plugin.

[\--dir=&lt;dirname&gt;]
: Put the new plugin in some arbitrary directory path. Plugin directory will be path plus supplied slug.

[\--plugin_name=&lt;title&gt;]
: What to put in the 'Plugin Name:' header.

[\--plugin_description=&lt;description&gt;]
: What to put in the 'Description:' header.

[\--plugin_author=&lt;author&gt;]
: What to put in the 'Author:' header.

[\--plugin_author_uri=&lt;url&gt;]
: What to put in the 'Author URI:' header.

[\--plugin_uri=&lt;url&gt;]
: What to put in the 'Plugin URI:' header.

[\--skip-tests]
: Don't generate files for unit testing.

[\--ci=&lt;provider&gt;]
: Choose a configuration file for a continuous integration provider.
\---
default: travis
options:
  - travis
  - circle
  - gitlab
\---

[\--activate]
: Activate the newly generated plugin.

[\--activate-network]
: Network activate the newly generated plugin.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    $ wp scaffold plugin sample-plugin
    Success: Created plugin files.
    Success: Created test files.

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
