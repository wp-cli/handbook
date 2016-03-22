---
layout: default
title: 'wp media regenerate'
display_global_parameters: true
---

`wp media regenerate` - Regenerate thumbnail(s).

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aregenerate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to regenerate.

[\--skip-delete]
: Skip deletion of the original thumbnails. If your thumbnails are linked from sources outside your control, it's likely best to leave them around. Defaults to false.

[\--only-missing]
: Only generate thumbnails for images missing image sizes.

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    # re-generate all thumbnails, without confirmation
    wp media regenerate --yes

    # re-generate all thumbnails that have IDs between 1000 and 2000
    seq 1000 2000 | xargs wp media regenerate



