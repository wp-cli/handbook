# wp language plugin

Installs, activates, and manages plugin language packs.

### EXAMPLES

    # Install the Dutch plugin language pack for Hello Dolly.
    $ wp language plugin install hello-dolly nl_NL
    Downloading translation from https://downloads.wordpress.org/translation/plugin/hello-dolly/1.7.2/nl_NL.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'nl_NL' installed.
    Success: Installed 1 of 1 languages.

    # Uninstall the Dutch plugin language pack for Hello Dolly.
    $ wp language plugin uninstall hello-dolly nl_NL
    Language 'nl_NL' for 'hello-dolly' uninstalled.
    +-------------+--------+-------------+
    | name        | locale | status      |
    +-------------+--------+-------------+
    | hello-dolly | nl_NL  | uninstalled |
    +-------------+--------+-------------+
    Success: Uninstalled 1 of 1 languages.

    # List installed plugin language packs for Hello Dolly.
    $ wp language plugin list hello-dolly --status=installed
    +-------------+----------+--------------+-------------+-----------+--------+---------------------+
    | plugin      | language | english_name | native_name | status    | update | updated             |
    +-------------+----------+--------------+-------------+-----------+--------+---------------------+
    | hello-dolly | nl_NL    | Dutch        | Nederlands  | installed | none   | 2023-11-13 12:34:15 |
    +-------------+----------+--------------+-------------+-----------+--------+---------------------+


