# wp comment generate

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acomment-generate+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Generate some number of new dummy comments.

Creates a specified number of new comments with dummy data.

### OPTIONS

[\--count=&lt;number&gt;]
: How many comments to generate?
\---
default: 100
\---

[\--post_id=&lt;post-id&gt;]
: Assign comments to a specific post.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Generate comments for the given post.
    $ wp comment generate --format=ids --count=3 --post_id=123
    138 139 140

    # Add meta to every generated comment.
    $ wp comment generate --format=ids --count=3 | xargs -d ' ' -I % wp comment meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.



