# wp language core install

Installs a given language.

Downloads the language pack from WordPress.org. Find your language code at: https://translate.wordpress.org/

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;language&gt;...
: Language code to install.

[\--activate]
: If set, the language will be activated immediately after install.

[\--format=&lt;format&gt;]
: Render output in a particular format (for one or more languages).
\---
options:
  - table
  - csv
  - json
  - summary
\---

### EXAMPLES

    # Install the Brazilian Portuguese language.
    $ wp language core install pt_BR
    Downloading translation from https://downloads.wordpress.org/translation/core/6.5/pt_BR.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'pt_BR' installed.
    Success: Installed 1 of 1 languages.

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
