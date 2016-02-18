---
layout: default
title: WP_CLI::debug()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::debug()

Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.

### Usage

    WP_CLI::debug( $message )

<div>
<strong>$message</strong> (string) <br />
</div>


### Notes

Helpful for optionally showing greater detail when needed. Debug message
is written to STDERR, and includes script execution time.

