---
layout: default
title: 'wp cron test'
display_global_parameters: true
---

`wp cron test` - Test the WP Cron spawning system and report back its status.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-test+sort%3Aupdated-desc">Github issues</a></small>

<hr />

This command tests the spawning system by performing the following steps:
* Checks to see if the `DISABLE_WP_CRON` constant is set; errors if true
because WP-Cron is disabled.
* Checks to see if the `ALTERNATE_WP_CRON` constant is set; warns if true
* Attempts to spawn WP-Cron over HTTP; warns if non 200 response code is
returned.



