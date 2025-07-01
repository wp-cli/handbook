# When /^I (run|try) `([^`]+)`$/

Run or try a given command.


***

## Usage

`run` expects an exit code 0, whereas `try` allows for non-zero exit codes.

So if using `run` and the command errors, the step will fail.

```
Scenario: My example scenario
  When I run `wp core version`
  Then STDOUT should contain:
    """
    6.8
    """

Scenario: My other scenario
  When I try `wp i18n make-pot foo bar/baz.pot`
  Then STDERR should contain:
    """
    Error: Not a valid source directory.
    """
  And the return code should be 1
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-launch-in-the-background/">When /^I launch in the background `([^`]+)`$/</a></strong> - Launch a given command in the background.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-from/">When /^I (run|try) `([^`]+)` from '([^\s]+)'$/</a></strong> - Run or try a given command in a subdirectory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-the-previous-command-again/">When /^I (run|try) the previous command again$/</a></strong> - Run or try the previous command again.</li>



</ul>


