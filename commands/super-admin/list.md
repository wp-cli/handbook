# wp super-admin list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asuper-admin-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List users with super admin capabilities.

### OPTIONS

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: list
options:
  - list
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    # List user with super-admin capabilities
    $ wp super-admin list
    supervisor
    administrator


