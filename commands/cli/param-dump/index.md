---
layout: default
title: 'wp cli param-dump'
display_global_parameters: true
---

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

    $ wp cli param-dump --format=var_export
    array (
      'path' =&gt;
      array (
        'runtime' =&gt; '=&lt;path&gt;',
        'file' =&gt; '&lt;path&gt;',
        'synopsis' =&gt; '',
        'default' =&gt; NULL,
        'multiple' =&gt; false,
        'desc' =&gt; 'Path to the WordPress files.',
      ),
      'url' =&gt;
      array (



