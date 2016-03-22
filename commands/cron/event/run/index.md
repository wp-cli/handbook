---
layout: default
title: 'wp cron event run'
display_global_parameters: true
---

`wp cron event run` - Run the next scheduled cron event for the given hook.

<hr />

### OPTIONS

[&lt;hook&gt;...]
: One or more hooks to run.

[\--all]
: Run all hooks.

### EXAMPLES

    # Run all cron events due right now
    wp cron event run $( wp cron event list --fields=hook,next_run_relative --format=csv | awk -F, '$2=="now" {print $1}' )



