---
layout: default
title: 'wp media regenerate'
---

`wp media regenerate` - Regenerate thumbnail(s).

### OPTIONS

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to regenerate.

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    # re-generate all thumbnails, without confirmation
    wp media regenerate --yes

    # re-generate all thumbnails that have IDs between 1000 and 2000
    seq 1000 2000 | xargs wp media regenerate

