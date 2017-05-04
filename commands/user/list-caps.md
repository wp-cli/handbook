# wp user list-caps

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


