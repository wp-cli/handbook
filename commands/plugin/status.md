# wp plugin status

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin-status+sort%3Aupdated-desc">Github issues</a></small>

See the status of one or all plugins.

### OPTIONS

[&lt;plugin&gt;]
: A particular plugin to show the status for.

### EXAMPLES

    # Displays status of all plugins
    $ wp plugin status
    5 installed plugins:
      I akismet                3.1.11
      I easy-digital-downloads 2.5.16
      A theme-check            20160523.1
      I wen-logo-slider        2.0.3
      M ns-pack                1.0.0
    Legend: I = Inactive, A = Active, M = Must Use

    # Displays status of a plugin
    $ wp plugin status theme-check
    Plugin theme-check details:
        Name: Theme Check
        Status: Active
        Version: 20160523.1
        Author: Otto42, pross
        Description: A simple and easy way to test your theme for all the latest WordPress standards and practices. A great theme development tool!



