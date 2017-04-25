# wp cron event list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acron-event-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List scheduled cron events.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each event.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each cron event:
* hook
* next_run_gmt
* next_run_relative
* recurrence

These fields are optionally available:
* time
* sig
* args
* schedule
* interval
* next_run

### EXAMPLES

    # List scheduled cron events
    $ wp cron event list
    +-------------------+---------------------+---------------------+------------+
    | hook              | next_run_gmt        | next_run_relative   | recurrence |
    +-------------------+---------------------+---------------------+------------+
    | wp_version_check  | 2016-05-31 22:15:13 | 11 hours 57 minutes | 12 hours   |
    | wp_update_plugins | 2016-05-31 22:15:13 | 11 hours 57 minutes | 12 hours   |
    | wp_update_themes  | 2016-05-31 22:15:14 | 11 hours 57 minutes | 12 hours   |
    +-------------------+---------------------+---------------------+------------+

    # List scheduled cron events in JSON
    $ wp cron event list --fields=hook,next_run --format=json
    [{"hook":"wp_version_check","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_plugins","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_themes","next_run":"2016-05-31 10:15:14"}]



