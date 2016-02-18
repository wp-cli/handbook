---
layout: default
title: WP_CLI::error()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::error()

    WP_CLI::error( $message, $exit = true )

Displays an error message prefixed with &quot;Error: &quot;.

Error message is written to STDERR. Defaults to halting
script execution with return code 1.

<div>
<strong>$message</strong> (string|WP_Error) Message to write to STDERR.<br />
<strong>$exit</strong> (boolean|integer) True defaults to exit(1).<br />
</div>

