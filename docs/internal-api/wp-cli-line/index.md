---
layout: default
title: WP_CLI::line()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::line()

Display a message in the CLI and end with a newline.

### Usage

    WP_CLI::line( $message = '' )

<div>
<strong>$message</strong> (string) Message to display to the end user.<br />
<strong>@return</strong> (null) <br /></p>
</div>


### Notes

Ignores `--quiet` flag. To respect, use `WP_CLI::log()`

