# When /^I launch in the background `([^`]+)`$/

Launch a given command in the background.


***

## Usage

```
Scenario: My example scenario
  Given a WP install
  And I launch in the background `wp server --host=localhost --port=8181`
  ...
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try/">When /^I (run|try) `([^`]+)`$/</a></strong> - Run or try a given command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-from/">When /^I (run|try) `([^`]+)` from '([^\s]+)'$/</a></strong> - Run or try a given command in a subdirectory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-the-previous-command-again/">When /^I (run|try) the previous command again$/</a></strong> - Run or try the previous command again.</li>



</ul>


