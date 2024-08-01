# wp scaffold package

Generate the files needed for a basic WP-CLI command.

This command runs on the `before_wp_load` hook, just before the WP load process begins.

Default behavior is to create the following files:
- command.php
- composer.json (with package name, description, and license)
- .gitignore, .editorconfig, and .distignore
- README.md (via wp scaffold package-readme)
- Test harness (via wp scaffold package-tests)

Unless specified with `--dir=&lt;dir&gt;`, the command package is placed in the WP-CLI `packages/local/` directory.

### OPTIONS

&lt;name&gt;
: Name for the new package. Expects &lt;author&gt;/&lt;package&gt; (e.g. 'wp-cli/scaffold-package').

[\--description=&lt;description&gt;]
: Human-readable description for the package.

[\--homepage=&lt;homepage&gt;]
: Homepage for the package. Defaults to 'https://github.com/&lt;name&gt;'

[\--dir=&lt;dir&gt;]
: Specify a destination directory for the command. Defaults to WP-CLI's `packages/local/` directory.

[\--license=&lt;license&gt;]
: License for the package.
\---
default: MIT
\---

[\--require_wp_cli=&lt;version&gt;]
: Required WP-CLI version for the package.
\---
default: ^2.5
\---

[\--require_wp_cli_tests=&lt;version&gt;]
: Required WP-CLI testing framework version for the package.
\---
default: ^3.0.11
\---

[\--skip-tests]
: Don't generate files for integration testing.

[\--skip-readme]
: Don't generate a README.md for the package.

[\--skip-github]
: Don't generate GitHub issue and pull request templates.

[\--skip-install]
: Don't install the package after scaffolding.

[\--force]
: Overwrite files that already exist.

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
