# wp i18n audit

Audit strings in a project.

This command runs on the `before_wp_load` hook, just before the WP load process begins.

Scans PHP, Blade-PHP and JavaScript files for translatable strings to find possible mistakes.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;source&gt;
: Directory to scan for string extraction.

[\--slug=&lt;slug&gt;]
: Plugin or theme slug. Defaults to the source directory's basename.

[\--domain=&lt;domain&gt;]
: Text domain to look for in the source code, unless the `--ignore-domain` option is used. By default, the "Text Domain" header of the plugin or theme is used. If none is provided, it falls back to the project slug.

[\--ignore-domain]
: Ignore the text domain completely and extract strings with any text domain.

[\--include=&lt;paths&gt;]
: Comma-separated list of files and paths that should be used for string extraction. If provided, only these files and folders will be taken into account.

[\--exclude=&lt;paths&gt;]
: Comma-separated list of files and paths that should be ignored for string extraction. For example, `--exclude=.github,myfile.php` would ignore any strings found within `myfile.php` or the `.github` folder. Simple glob patterns can be used, i.e. `--exclude=foo-*.php` excludes any PHP file with the `foo-` prefix. Leading and trailing slashes are ignored, i.e. `/my/directory/` is the same as `my/directory`. The following files and folders are always excluded: node_modules, .git, .svn, .CVS, .hg, vendor, *.min.js, test, tests.

[\--skip-js]
: Skips JavaScript string extraction.

[\--skip-php]
: Skips PHP string extraction.

[\--skip-blade]
: Skips Blade-PHP string extraction.

[\--skip-block-json]
: Skips string extraction from block.json files.

[\--skip-theme-json]
: Skips string extraction from theme.json files.

[\--format=&lt;format&gt;]
: Output format for the audit results.
\---
default: plaintext
options:
  - plaintext
  - json
  - github-actions
\---

### EXAMPLES

    # Audit a plugin for possible translation issues.
    $ wp i18n audit wp-content/plugins/hello-world

    # Audit a plugin and output results as JSON.
    $ wp i18n audit wp-content/plugins/hello-world --format=json

    # Audit a plugin with GitHub Actions annotations format.
    $ wp i18n audit wp-content/plugins/hello-world --format=github-actions

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
