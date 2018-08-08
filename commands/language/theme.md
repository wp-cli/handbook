# wp language theme

Installs, activates, and manages theme language packs.

### EXAMPLES

    # Install the Dutch theme language pack.
    $ wp language theme install twentyten nl_NL
    Success: Language installed.

    # Uninstall the Dutch theme language pack.
    $ wp language theme uninstall twentyten nl_NL
    Success: Language uninstalled.

    # List installed theme language packages.
    $ wp language theme list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+


