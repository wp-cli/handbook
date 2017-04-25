# wp core is-installed

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; is-installed</small>

`wp core is-installed` - Check if WordPress is installed.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-is-installed+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Determines whether WordPress is installed by checking if the standard
database tables are installed. Doesn't produce output; uses exit codes
to communicate whether WordPress is installed.

[\--network]
: Check if this is a multisite install.

### EXAMPLES

    # Check whether WordPress is installed; exit status 0 if installed, otherwise 1
    $ wp core is-installed
    $ echo $?
    1

    # Bash script for checking whether WordPress is installed or not
    if ! $(wp core is-installed); then
        wp core install
    fi



