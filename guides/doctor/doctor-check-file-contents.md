# Write a check for verifying contents of WordPress files

One of the check types included in `wp doctor` is `File_Contents`, or the ability to check all or a selection of WordPress files for a given regex pattern. The check type is in use by a couple of the [default diagnostic checks](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-default-checks/), and you can use the `File_Contents` check type in your [custom `doctor.yml` configuration file](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-customize-config/).

The `File_Contents` check type is the most efficient way to check WordPress files because it only iterates the filesystem once, regardless of how many file checks you've registered.

As an example, here are two checks using `File_Contents`, one which ensures sessions aren't used by plugins and the other which ensures `$_SERVER['SERVER_NAME']` isn't used in `wp-config.php`:

    file-sessions:
      check: File_Contents
      options:
        regex: .*(session_start|\$_SESSION).*
        only_wp_content: true
    file-server-name-wp-config:
      check: File_Contents
      options:
        regex: define\(.+WP_(HOME|SITEURL).+\$_SERVER.+SERVER_NAME
        path: wp-config.php


Run together, you might see:

    $ wp doctor check --config=file-contents.yml --all
    +----------------------------+---------+-----------------------------------------------------------------------------------------+
    | name                       | status  | message                                                                                 |
    +----------------------------+---------+-----------------------------------------------------------------------------------------+
    | file-sessions              | success | All 'php' files passed check for '.*(session_start|\$_SESSION).*'.                      |
    | file-server-name-wp-config | success | All 'php' files passed check for 'define\(.+WP_(HOME|SITEURL).+\$_SERVER.+SERVER_NAME'. |
    +----------------------------+---------+-----------------------------------------------------------------------------------------+


The `File_Contents` check type accepts the following options:

* 'regex': Regex pattern to check against each file's contents.
* 'extension'. File extension to check. Defaults to 'php'. Separate multiple file extensions with a '|'.
* 'path'. Check a specific file path. Value should be relative to `ABSPATH` (e.g. 'wp-content' or 'wp-config.php').
* 'only\_wp\_content': Only check the wp-content directory.
