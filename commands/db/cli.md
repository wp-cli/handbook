# wp db cli

Open a MySQL console using credentials from wp-config.php

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


