# wp user generate

Generate some users.

Creates a specified number of new users with dummy data.

### OPTIONS

[\--count=&lt;number&gt;]
: How many users to generate?
\---
default: 100
\---

[\--role=&lt;role&gt;]
: The role of the generated users. Default: default role from WP

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Add meta to every generated users.
    $ wp user generate --format=ids --count=3 | xargs -d ' ' -I % wp user meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.


