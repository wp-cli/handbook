# wp language core

Installs, activates, and manages core language packs.

### EXAMPLES

    # Install the Dutch core language pack.
    $ wp language core install nl_NL
    Success: Language installed.

    # Activate the Dutch core language pack.
    $ wp language core activate nl_NL
    Success: Language activated.

    # Uninstall the Dutch core language pack.
    $ wp language core uninstall nl_NL
    Success: Language uninstalled.

    # List installed core language packages.
    $ wp language core list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+


