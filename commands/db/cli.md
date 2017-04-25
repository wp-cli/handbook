# wp db cli

<small>[Commands](/commands/) &raquo; [db](/commands/db/) &raquo; cli</small>

`wp db cli` - Open a MySQL console using credentials from wp-config.php

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb-cli+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--database=&lt;database&gt;]
: Use a specific database. Defaults to DB_NAME.

[\--default-character-set=&lt;character-set&gt;]
: Use a specific character set. Defaults to DB_CHARSET when defined.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to the MySQL executable.

### EXAMPLES

    # Open MySQL console
    $ wp db cli
    mysql&gt;



