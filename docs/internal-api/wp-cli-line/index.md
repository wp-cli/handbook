---
layout: default
title: WP_CLI::line()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::line()

    WP_CLI::line( $message = '' )

Display a message in the CLI and end with a newline.

<div>
<strong>$message</strong> (string) Message to display to the end user.<br />
<strong>@return</strong> (null) <br /></p>
</div>

Ignores `--quiet` flag. To respect, use `WP_CLI::log()`

