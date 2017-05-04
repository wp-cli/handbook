# wp site option get

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


