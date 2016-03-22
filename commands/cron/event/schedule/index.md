---
layout: default
title: 'wp cron event schedule'
display_global_parameters: true
---

`wp cron event schedule` - Schedule a new cron event.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-event-schedule+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;hook&gt;
: The hook name

[&lt;next-run&gt;]
: A Unix timestamp or an English textual datetime description compatible with `strtotime()`. Defaults to now.

[&lt;recurrence&gt;]
: How often the event should recur. See `wp cron schedule list` for available schedule names. Defaults to no recurrence.

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the event.

### EXAMPLES

    wp cron event schedule cron_test

    wp cron event schedule cron_test now hourly

    wp cron event schedule cron_test '+1 hour' --foo=1 --bar=2



