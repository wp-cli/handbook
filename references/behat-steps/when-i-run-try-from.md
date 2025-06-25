# When /^I (run|try) `([^`]+)` from '([^\s]+)'$/

Run or try a given command in a subdirectory.


***

## Usage

`run` expects an exit code 0, whereas `try` allows for non-zero exit codes.

```
Scenario: My example scenario
  When I run `wp core is-installed`
  Then STDOUT should be empty

  When I run `wp core is-installed` from 'foo/wp-content'
  Then STDOUT should be empty
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-launch-in-the-background/">When /^I launch in the background `([^`]+)`$/</a></strong> - Launch a given command in the background.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try/">When /^I (run|try) `([^`]+)`$/</a></strong> - Run or try a given command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-the-previous-command-again/">When /^I (run|try) the previous command again$/</a></strong> - Run or try the previous command again.</li>



</ul>


