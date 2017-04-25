# wp site option get

<small>[Commands](/commands/) &raquo; [site](/commands/site/) &raquo; [option](/commands/site/option/) &raquo; get</small>

`wp site option get` - Get a site option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-option-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: Key for the site option.

[\--format=&lt;format&gt;]
: Get value in a particular format.
\---
default: var_export
options:
  - var_export
  - json
  - yaml
\---

### EXAMPLES

    # Get site upload filetypes
    $ wp site option get upload_filetypes
    jpg jpeg png gif mov avi mpg



