# wp language plugin

Installs, activates, and manages plugin language packs.

### EXAMPLES

    # Install the Dutch theme language pack.
    $ wp language plugin install hello-dolly nl_NL
    Success: Language installed.

    # Uninstall the Dutch theme language pack.
    $ wp language plugin uninstall hello-dolly nl_NL
    Success: Language uninstalled.

    # List installed theme language packages.
    $ wp language plugin list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+


