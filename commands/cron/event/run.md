# wp cron event run

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


