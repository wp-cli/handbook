# wp cron schedule list

List available cron schedules.

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


