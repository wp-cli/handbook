# wp user meta get

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-meta-get+sort%3Aupdated-desc">Github issues</a></small>

Get meta field value.

### OPTIONS

&lt;user&gt;
: The user login, user email, or user ID of the user to get metadata for.

&lt;key&gt;
: The metadata key.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

### EXAMPLES

    # Get user meta
    $ wp user meta get 123 bio
    Mary is an WordPress developer.



