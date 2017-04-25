# wp cron event run

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acron-event-run+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Run the next scheduled cron event for the given hook.

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



