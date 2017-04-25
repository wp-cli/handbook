# wp site option get

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asite-option-get+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Get a site option.

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



