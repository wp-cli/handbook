---
layout: default
title: 'wp import'
display_global_parameters: true
---

`wp import` - Import content from a WXR file.

<hr />

### OPTIONS

&lt;file&gt;...
: Path to one or more valid WXR files for importing. Directories are also accepted.

\--authors=&lt;authors&gt;
: How the author mapping should be handled. Options are 'create', 'mapping.csv', or 'skip'. The first will create any non-existent users from the WXR file. The second will read author mapping associations from a CSV, or create a CSV for editing if the file path doesn't exist. The CSV requires two columns, and a header row like "old_user_login,new_user_login". The last option will skip any author mapping.

[\--skip=&lt;data-type&gt;]
: Skip importing specific data. Supported options are: 'attachment' and 'image_resize' (skip time-consuming thumbnail generation).



