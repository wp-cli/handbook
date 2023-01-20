# Check status of a given plugin

One of the check types included in `wp doctor` is `Plugin_Status`, or the ability to assert that a given plugin should be active, installed, or uninstalled. Although the check type isn't use by any of the [default diagnostic checks](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-default-checks/), you can use the `Plugin_Status` check type in your [custom `doctor.yml` configuration file](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-customize-config/).

As an example, here are two checks using `Plugin_Status`, one which ensures Akismet is active on the system and other which ensures Hello Dolly is uninstalled:

    plugin-akismet-active:
      check: Plugin_Status
      options:
        name: akismet
        status: active
    plugin-hello-uninstalled:
      check: Plugin_Status
      options:
        name: hello
        status: uninstalled


Run together, you might see:

    $ wp doctor check --config=plugin-status.yml --all
    +--------------------------+---------+----------------------------------------------------------------+
    | name                     | status  | message                                                        |
    +--------------------------+---------+----------------------------------------------------------------+
    | plugin-akismet-active    | success | Plugin 'akismet' is 'active' as expected.                      |
    | plugin-hello-uninstalled | error   | Plugin 'hello' is 'inactive' but expected to be 'uninstalled'. |
    +--------------------------+---------+----------------------------------------------------------------+


The `Plugin_Status` check type accepts the following options:

* 'name': Name of the plugin as it appears in `wp plugin list`.
* 'status': Expected plugin status as one of 'active', 'installed', or 'uninstalled'.
