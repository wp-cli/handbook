# When /^I (run|try) the previous command again$/

Run or try the previous command again.


***

## Usage

`run` expects an exit code 0, whereas `try` allows for non-zero exit codes.

```
Scenario: My example scenario
  When I run `wp site option update admin_user_id 1`
  Then STDOUT should contain:
    """
    Success: Updated 'admin_user_id' site option.
    """

  When I run the previous command again
  Then STDOUT should contain:
    """
    Success: Value passed for 'admin_user_id' site option is unchanged.
    """
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-launch-in-the-background/">When /^I launch in the background `([^`]+)`$/</a></strong> - Launch a given command in the background.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try/">When /^I (run|try) `([^`]+)`$/</a></strong> - Run or try a given command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-from/">When /^I (run|try) `([^`]+)` from '([^\s]+)'$/</a></strong> - Run or try a given command in a subdirectory.</li>



</ul>


