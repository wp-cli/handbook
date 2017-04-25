# wp cron event schedule

<small>[Commands](/commands/) &raquo; [cron](/commands/cron/) &raquo; [event](/commands/cron/event/) &raquo; schedule</small>

`wp cron event schedule` - Schedule a new cron event.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-event-schedule+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;hook&gt;
: The hook name.

[&lt;next-run&gt;]
: A Unix timestamp or an English textual datetime description compatible with `strtotime()`. Defaults to now.

[&lt;recurrence&gt;]
: How often the event should recur. See `wp cron schedule list` for available schedule names. Defaults to no recurrence.

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the event.

### EXAMPLES

    # Schedule a new cron event
    $ wp cron event schedule cron_test
    Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:19:16 GMT.

    # Schedule new cron event with hourly recurrence
    $ wp cron event schedule cron_test now hourly
    Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:20:32 GMT.

    # Schedule new cron event and pass associative arguments
    $ wp cron event schedule cron_test '+1 hour' --foo=1 --bar=2
    Success: Scheduled event with hook 'cron_test' for 2016-05-31 11:21:35 GMT.



