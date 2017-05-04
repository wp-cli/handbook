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


