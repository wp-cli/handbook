# wp scaffold package-readme

Generate a README.md for your command.

Creates a README.md with Using, Installing, and Contributing instructions based on the composer.json file for your WP-CLI package. Run this command at the beginning of your project, and then every time your usage docs change.

These command-specific docs are generated based composer.json -&gt; 'extra'
-&gt; 'commands'. For instance, this package's composer.json includes:

```
{
  "name": "wp-cli/scaffold-package-command",
   // [...]
   "extra": {
       "commands": [
           "scaffold package",
           "scaffold package-tests",
           "scaffold package-readme"
       ]
   }
}
```

You can also customize the rendering of README.md generally with composer.json -&gt; 'extra' -&gt; 'readme'. For example, runcommand/hook's composer.json includes:

```
{
    "extra": {
        "commands": [
            "hook"
        ],
        "readme": {
            "shields": [
                "[![Build Status](https://travis-ci.org/runcommand/reset-password.svg?branch=master)](https://travis-ci.org/runcommand/reset-password)"
            ],
            "sections": [
                "Using",
                "Installing",
                "Support"
            ],
            "support": {
                "body": "https://raw.githubusercontent.com/runcommand/runcommand-theme/master/bin/readme-partials/support-open-source.md"
            },
            "show_powered_by": false
        }
    }
}
```

In this example:

* "shields" supports arbitrary images as shields to display.
* "sections" permits defining arbitrary sections (instead of default Using, Installing and Contributing).
* "support" -&gt; "body" uses a remote Markdown file as the section contents. This can also be a local file path, or a string.
* "show_powered_by" shows or hides the Powered By mention at the end of the readme.

### OPTIONS

&lt;dir&gt;
: Directory path to an existing package to generate a readme for.

[\--force]
: Overwrite the readme if it already exists.

[\--branch=&lt;branch&gt;]
: Name of default branch of the underlaying repository. Defaults to master.

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
