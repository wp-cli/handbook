# wp language theme install

Installs a given language for a theme.

Downloads the language pack from WordPress.org.

### OPTIONS

[&lt;theme&gt;]
: Theme to install language for.

[\--all]
: If set, languages for all themes will be installed.

&lt;language&gt;...
: Language code to install.

[\--format=&lt;format&gt;]
: Render output in a particular format. Used when installing languages for all themes.
\---
default: table
options:
  - table
  - csv
  - json
  - summary
\---

### EXAMPLES

    # Install the Japanese language for Twenty Seventeen.
    $ wp language theme install twentyseventeen ja
    Downloading translation from https://downloads.wordpress.org/translation/theme/twentyseventeen/1.3/ja.zip...
    Unpacking the update...
    Installing the latest version...
    Translation updated successfully.
    Language 'ja' installed.
    Success: Installed 1 of 1 languages.

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
