---
layout: default
title: 'wp import'
---

`wp import` - Import content from a WXR file.

### OPTIONS

&lt;file&gt;
: Path to a valid WXR file for importing.

\--authors=&lt;authors&gt;
: How the author mapping should be handled. Options are 'create', 'mapping.csv', or 'skip'. The first will create any non-existent users from the WXR file. The second will read author mapping associations from a CSV, or create a CSV for editing if the file path doesn't exist. The last option will skip any author mapping.

[\--skip=&lt;data-type&gt;]
: Skip importing specific data. Supported options are: 'attachment' and 'image_resize' (skip time-consuming thumbnail generation).

