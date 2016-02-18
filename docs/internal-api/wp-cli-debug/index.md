---
layout: default
title: WP_CLI::debug()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::debug()

    WP_CLI::debug( $message )

Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.

<div>
<strong>$message</strong> (string) <br />
</div>

Helpful for optionally showing greater detail when needed. Debug message
is written to STDERR, and includes script execution time.

