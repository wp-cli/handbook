# wp cli param-dump

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acli-param-dump+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Dump the list of global parameters, as JSON or in var_export format.

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


