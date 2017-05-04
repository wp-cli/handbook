# wp user list-caps

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Auser-list-caps+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List all capabilities for a user.

### OPTIONS

&lt;user&gt;
: User ID, user email, or login.

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

    $ wp user list-caps 21
    edit_product
    create_premium_item


