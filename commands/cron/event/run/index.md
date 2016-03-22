---
layout: default
title: 'wp cron event run'
display_global_parameters: true
---

`wp cron event run` - Run the next scheduled cron event for the given hook.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arun+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;hook&gt;...]
: One or more hooks to run.

[\--all]
: Run all hooks.

### EXAMPLES

    # Run all cron events due right now
    wp cron event run $( wp cron event list --fields=hook,next_run_relative --format=csv | awk -F, '$2=="now" {print $1}' )



