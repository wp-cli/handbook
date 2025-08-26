# wp language core

Installs, activates, and manages core language packs.

### EXAMPLES

    # Install the Dutch core language pack.
    $ wp language core install nl_NL
    Downloading translation from https://downloads.wordpress.org/translation/core/6.4.3/nl_NL.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'nl_NL' installed.
    Success: Installed 1 of 1 languages.

    # Activate the Dutch core language pack.
    $ wp site switch-language nl_NL
    Success: Language activated.

    # Uninstall the Dutch core language pack.
    $ wp language core uninstall nl_NL
    Success: Language uninstalled.

    # List installed core language packs.
    $ wp language core list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2024-01-31 10:24:06 |
    +----------+--------------+-------------+-----------+-----------+---------------------+


