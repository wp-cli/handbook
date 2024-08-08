# wp language theme

Installs, activates, and manages theme language packs.

### EXAMPLES

    # Install the Dutch theme language pack for Twenty Ten.
    $ wp language theme install twentyten nl_NL
    Downloading translation from https://downloads.wordpress.org/translation/theme/twentyten/4.0/nl_NL.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'nl_NL' installed.
    Success: Installed 1 of 1 languages.

    # Uninstall the Dutch theme language pack for Twenty Ten.
    $ wp language theme uninstall twentyten nl_NL
    Language 'nl_NL' for 'twentyten' uninstalled.
    +-----------+--------+-------------+
    | name      | locale | status      |
    +-----------+--------+-------------+
    | twentyten | nl_NL  | uninstalled |
    +-----------+--------+-------------+
    Success: Uninstalled 1 of 1 languages.

    # List installed theme language packs for Twenty Ten.
    $ wp language theme list twentyten --status=installed
    +-----------+----------+--------------+-------------+-----------+--------+---------------------+
    | theme     | language | english_name | native_name | status    | update | updated             |
    +-----------+----------+--------------+-------------+-----------+--------+---------------------+
    | twentyten | nl_NL    | Dutch        | Nederlands  | installed | none   | 2023-12-29 21:21:39 |
    +-----------+----------+--------------+-------------+-----------+--------+---------------------+


