# wp language

Installs, activates, and manages language packs.

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

    # Install the Dutch theme language pack for Twenty Ten.
    $ wp language theme install twentyten nl_NL
    Downloading translation from https://downloads.wordpress.org/translation/theme/twentyten/4.0/nl_NL.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'nl_NL' installed.
    Success: Installed 1 of 1 languages.

    # Install the Dutch plugin language pack for Hello Dolly.
    $ wp language plugin install hello-dolly nl_NL
    Downloading translation from https://downloads.wordpress.org/translation/plugin/hello-dolly/1.7.2/nl_NL.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the translation...
    Translation updated successfully.
    Language 'nl_NL' installed.
    Success: Installed 1 of 1 languages.


