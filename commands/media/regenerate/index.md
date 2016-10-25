---
layout: default
title: 'wp media regenerate'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [media](/commands/media/) &raquo; regenerate</small>

`wp media regenerate` - Regenerate thumbnail(s).

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amedia-regenerate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to regenerate.

[\--skip-delete]
: Skip deletion of the original thumbnails. If your thumbnails are linked from sources outside your control, it's likely best to leave them around. Defaults to false.

[\--only-missing]
: Only generate thumbnails for images missing image sizes.

[\--yes]
: Answer yes to the confirmation message. Confirmation only shows when no IDs passed as arguments.

### EXAMPLES

    # Regenerate thumbnails for given attachment IDs.
    $ wp media regenerate 123 124 125
    Found 3 images to regenerate.
    1/3 Regenerated thumbnails for "Vertical Image" (ID 123).
    2/3 Regenerated thumbnails for "Horizontal Image" (ID 124).
    3/3 Regenerated thumbnails for "Beautiful Picture" (ID 125).
    Success: Finished regenerating all images.

    # Regenerate all thumbnails, without confirmation.
    $ wp media regenerate --yes
    Found 3 images to regenerate.
    1/3 Regenerated thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Regenerated thumbnails for "Boardwalk" (ID 757).
    3/3 Regenerated thumbnails for "Sunburst Over River" (ID 756).
    Success: Finished regenerating all images.

    # Re-generate all thumbnails that have IDs between 1000 and 2000.
    $ seq 1000 2000 | xargs wp media regenerate
    Found 4 images to regenerate.
    1/4 Regenerated thumbnails for "Vertical Featured Image" (ID 1027).
    2/4 Regenerated thumbnails for "Horizontal Featured Image" (ID 1022).
    3/4 Regenerated thumbnails for "Unicorn Wallpaper" (ID 1045).
    4/4 Regenerated thumbnails for "I Am Worth Loving Wallpaper" (ID 1023).
    Success: Finished regenerating all images.



