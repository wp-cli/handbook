# Then the HTTP status code should be :code

Expect the HTTP status code for visiting `http://localhost:8080`.


***

## Usage

```
Scenario: My example scenario
  Given a WP installation with Composer
  And a PHP built-in web server to serve 'WordPress'
  Then the HTTP status code should be 200
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-return-code-should-not-be/">Then /^the return code should( not)? be (\d+)$/</a></strong> - Expect a specific exit code of the previous command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-strictly-be-contain-not-contain/">Then /^(STDOUT|STDERR) should( strictly)? (be|contain|not contain):$/</a></strong> - Check the contents of STDOUT or STDERR.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-be-a-number/">Then /^(STDOUT|STDERR) should be a number$/</a></strong> - Expect STDOUT or STDERR to be a numeric value.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-not-be-a-number/">Then /^(STDOUT|STDERR) should not be a number$/</a></strong> - Expect STDOUT or STDERR to not be a numeric value.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-a-table-containing-rows/">Then /^STDOUT should be a table containing rows:$/</a></strong> - Expect STDOUT to be a table containing the given rows.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-end-with-a-table-containing-rows/">Then /^STDOUT should end with a table containing rows:$/</a></strong> - Expect STDOUT to end with a table containing the given rows.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-json-containing/">Then /^STDOUT should be JSON containing:$/</a></strong> - Expect valid JSON output in STDOUT.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-a-json-array-containing/">Then /^STDOUT should be a JSON array containing:$/</a></strong> - Expect valid JSON array output in STDOUT.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-csv-containing/">Then /^STDOUT should be CSV containing:$/</a></strong> - Expect STDOUT to be CSV containing certain values.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-yaml-containing/">Then /^STDOUT should be YAML containing:$/</a></strong> - Expect STDOUT to be YAML containig certain content.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-be-empty/">Then /^(STDOUT|STDERR) should be empty$/</a></strong> - Expect STDOUT or STDERR to be empty.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-not-be-empty/">Then /^(STDOUT|STDERR) should not be empty$/</a></strong> - Expect STDOUT or STDERR not to be empty.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-be-a-version-string-w/">Then /^(STDOUT|STDERR) should be a version string (&lt;|&lt;=|&gt;|&gt;=|==|=|!=|&lt;&gt;) ([+\w.{}-]+)$/</a></strong> - Expect STDOUT or STDERR to be a version string comparing to the given version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-file-directory-should-strictly-exist-not-exist-be-contain-not-contain/">Then /^the (.+) (file|directory) should( strictly)? (exist|not exist|be:|contain:|not contain:)$/</a></strong> - Expect a certain file or directory to (not) exist or (not) contain certain contents.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-contents-of-the-file-should-not-match/">Then /^the contents of the (.+) file should( not)? match (((\/.+\/)|(#.+#))([a-z]+)?)$/</a></strong> - Match file contents against a regex.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-not-match/">Then /^(STDOUT|STDERR) should( not)? match (((\/.+\/)|(#.+#))([a-z]+)?)$/</a></strong> - Match STDOUT or STDERR against a regex.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-an-email-should-be-sent-not-be-sent/">Then /^an email should (be sent|not be sent)$/</a></strong> - Expect an email to be sent (or not).</li>



</ul>


