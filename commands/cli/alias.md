# wp cli alias

List available WP-CLI aliases.

Aliases are shorthand references to WordPress installs. For instance,
`@dev` could refer to a development install and `@prod` could refer to
a production install. This command gives you visibility in what
registered aliases you have available.

### OPTIONS

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: yaml
options:
  - yaml
  - json
\---

### EXAMPLES

    # List all available aliases.
    $ wp cli alias
    ---
    @all: Run command against every registered alias.
    @prod:
      ssh: runcommand@runcommand.io~/webapps/production
    @dev:
      ssh: vagrant@192.168.50.10/srv/www/runcommand.dev
    @both:
      - @prod
      - @dev

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

