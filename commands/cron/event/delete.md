# wp cron event delete

<small>[Commands](/commands/) &raquo; [cron](/commands/cron/) &raquo; [event](/commands/cron/event/) &raquo; delete</small>

`wp cron event delete` - Delete the next scheduled cron event for the given hook.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-event-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;hook&gt;
: The hook name.

### EXAMPLES

    # Delete the next scheduled cron event
    $ wp cron event delete cron_test
    Success: Deleted 2 instances of the cron event 'cron_test'.



