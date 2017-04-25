# wp post get

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-get+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Get details about a post.

### OPTIONS

&lt;id&gt;
: The ID of the post to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole post, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

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

    # Save the post content to a file
    $ wp post get 123 --field=content > file.txt



