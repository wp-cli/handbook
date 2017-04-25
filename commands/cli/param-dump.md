# wp cli param-dump

<small>[Commands](/commands/) &raquo; [cli](/commands/cli/) &raquo; param-dump</small>

`wp cli param-dump` - Dump the list of global parameters, as JSON or in var_export format.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli-param-dump+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--with-values]
: Display current values also.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: json
options:
  - var_export
  - json
\---

### EXAMPLES

    # Dump the list of global parameters.
    $ wp cli param-dump --format=var_export
    array (
      'path' =>
      array (
        'runtime' => '=&lt;path&gt;',
        'file' => '&lt;path&gt;',
        'synopsis' => '',
        'default' => NULL,
        'multiple' => false,
        'desc' => 'Path to the WordPress files.',
      ),
      'url' =>
      array (



