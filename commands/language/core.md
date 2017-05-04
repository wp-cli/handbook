# wp language core

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Alanguage-core+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage core language.

### EXAMPLES

    # Install language
    $ wp core language install nl_NL
    Success: Language installed.

    # Activate language
    $ wp core language activate nl_NL
    Success: Language activated.

    # Uninstall language
    $ wp core language uninstall nl_NL
    Success: Language uninstalled.

    # List installed languages
    $ wp core language list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+




