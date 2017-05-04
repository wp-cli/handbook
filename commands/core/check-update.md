# wp core check-update

Check for WordPress updates via Version Check API.

Lists the most recent versions when there are updates available,
or success message when up to date.

### OPTIONS

[\--minor]
: Compare only the first two parts of the version number.

[\--major]
: Compare only the first part of the version number.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each update.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to version,update_type,package_url.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - count
  - json
  - yaml
\---

### EXAMPLES

    $ wp core check-update
    +---------+-------------+-------------------------------------------------------------+
    | version | update_type | package_url                                                 |
    +---------+-------------+-------------------------------------------------------------+
    | 4.5.2   | major       | https://downloads.wordpress.org/release/wordpress-4.5.2.zip |
    +---------+-------------+-------------------------------------------------------------+


