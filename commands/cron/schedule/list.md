# wp cron schedule list

<small>[Commands](/commands/) &raquo; [cron](/commands/cron/) &raquo; [schedule](/commands/cron/schedule/) &raquo; list</small>

`wp cron schedule list` - List available cron schedules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-schedule-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each schedule.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each cron schedule:

* name
* display
* interval

There are no additional fields.

### EXAMPLES

    # List available cron schedules
    $ wp cron schedule list
    +------------+-------------+----------+
    | name       | display     | interval |
    +------------+-------------+----------+
    | hourly     | Once Hourly | 3600     |
    | twicedaily | Twice Daily | 43200    |
    | daily      | Once Daily  | 86400    |
    +------------+-------------+----------+

    # List id of available cron schedule
    $ wp cron schedule list --fields=name --format=ids
    hourly twicedaily daily



