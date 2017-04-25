# wp cron event run

<small>[Commands](/commands/) &raquo; [cron](/commands/cron/) &raquo; [event](/commands/cron/event/) &raquo; run</small>

`wp cron event run` - Run the next scheduled cron event for the given hook.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-event-run+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;hook&gt;...]
: One or more hooks to run.

[\--due-now]
: Run all hooks due right now.

[\--all]
: Run all hooks.

### EXAMPLES

    # Run all cron events due right now
    $ wp cron event run --due-now
    Success: Executed a total of 2 cron events.



