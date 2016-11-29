---
layout: default
title: 'wp post generate'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [post](/commands/post/) &raquo; generate</small>

`wp post generate` - Generate some posts.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Creates a specified number of new posts with dummy data.

### OPTIONS

[\--count=&lt;number&gt;]
: How many posts to generate?
\---
default: 100
\---

[\--post_type=&lt;type&gt;]
: The type of the generated posts.
\---
default: post
\---

[\--post_status=&lt;status&gt;]
: The status of the generated posts.
\---
default: publish
\---

[\--post_author=&lt;login&gt;]
: The author of the generated posts.
\---
default:
\---

[\--post_date=&lt;yyyy-mm-dd&gt;]
: The date of the generated posts. Default: current date

[\--post_content]
: If set, the command reads the post_content from STDIN.

[\--max_depth=&lt;number&gt;]
: For hierarchical post types, generate child posts down to a certain depth.
\---
default: 1
\---

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Generate posts.
    $ wp post generate --count=10 --post_type=page --post_date=1999-01-04
    Generating posts  100% [================================================] 0:01 / 0:04

    # Generate posts with fetched content.
    $ curl http://loripsum.net/api/5 | wp post generate --post_content --count=10
      % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                     Dload  Upload   Total   Spent    Left  Speed
    100  2509  100  2509    0     0    616      0  0:00:04  0:00:04 --:--:--   616
    Generating posts  100% [================================================] 0:01 / 0:04

    # Add meta to every generated posts.
    $ wp post generate --format=ids | xargs -d ' ' -I % wp post meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.



