# Behat Steps

WP-CLI makes use of a Behat-based testing framework and provides a set of custom step definitions to write feature tests.

*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*

***
## Given

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-an-empty-directory/">Given an empty directory</a></strong> - Creates an empty directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-an-empty-non-existent-directory/">Given /^an? (empty|non-existent) ([^\s]+) directory$/</a></strong> - Creates or deletes a specific directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-an-empty-cache/">Given an empty cache</a></strong> - Clears the WP-CLI cache directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-an-file-cache-file/">Given /^an? ([^\s]+) (file|cache file):$/</a></strong> - Creates a file with the given contents.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-replaced-with-in-the-file/">Given /^&quot;([^&quot;]+)&quot; replaced with &quot;([^&quot;]+)&quot; in the ([^\s]+) file$/</a></strong> - Search and replace a string in a file using regex.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-that-http-requests-to-will-respond-with/">Given /^that HTTP requests to (.*?) will respond with:$/</a></strong> - Mock HTTP requests to a given URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-wp-files/">Given WP files</a></strong> - Download WordPress files without installing.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-wp-config-php/">Given wp-config.php</a></strong> - Create a wp-config.php file using `wp config create`.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-database/">Given a database</a></strong> - Creates an empty database.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-installation/">Given /^a WP( \d[^\s]+)? install(?:ation)?$/</a></strong> - Installs WordPress.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-installation-in/">Given /^a WP( [^\s]+)? install(?:ation)? in ['&quot;]?([^'&quot;]+)['&quot;]?$/</a></strong> - Installs WordPress in a given directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-installation-with-composer/">Given a WP install(ation) with Composer</a></strong> - Installs WordPress with Composer.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-installation-with-composer-and-a-custom-vendor-directory-vendor-directory/">Given a WP install(ation) with Composer and a custom vendor directory :vendor_directory</a></strong> - Installs WordPress with Composer and a custom vendor directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-multisite-subdirectory-subdomaininstall-installation/">Given /^a WP multisite (subdirectory|subdomain)?\s?(install|installation)$/</a></strong> - Installs WordPress Multisite.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-these-installed-and-active-plugins/">Given these installed and active plugins:</a></strong> - Installs and activates one or more plugins.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-custom-wp-content-directory/">Given a custom wp-content directory</a></strong> - Configure a custom `wp-content` directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-download/">Given download:</a></strong> - Download multiple files into the given destinations.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-save-stdout-stderr-as/">Given /^save (STDOUT|STDERR) ([\'].+[^\'])?\s?as \{(\w+)\}$/</a></strong> - Store STDOUT or STDERR contents in a variable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-new-phar-with-the-same-version-version/">Given /^a new Phar with (?:the same version|version &quot;([^&quot;]+)&quot;)$/</a></strong> - Build a new WP-CLI Phar file with a given version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-downloaded-phar-with-the-same-version-version/">Given /^a downloaded Phar with (?:the same version|version &quot;([^&quot;]+)&quot;)$/</a></strong> - Download a specific WP-CLI Phar version from GitHub.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-save-the-file-as/">Given /^save the (.+) file ([\'].+[^\'])?as \{(\w+)\}$/</a></strong> - Stores the contents of the given file in a variable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-misconfigured-wp-content-dir-constant-directory/">Given a misconfigured WP_CONTENT_DIR constant directory</a></strong> - Modify wp-config.php to set `WP_CONTENT_DIR` to an empty string.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-dependency-on-current-wp-cli/">Given a dependency on current wp-cli</a></strong> - Add `wp-cli/wp-cli` as a Composer dependency.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-php-built-in-web-server/">Given a PHP built-in web server</a></strong> - Start a PHP built-in web server in the current directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-php-built-in-web-server-to-serve-subdir/">Given a PHP built-in web server to serve :subdir</a></strong> - Start a PHP built-in web server in the given subdirectory.</li>


</ul>


## When

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-launch-in-the-background/">When /^I launch in the background `([^`]+)`$/</a></strong> - Launch a given command in the background.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try/">When /^I (run|try) `([^`]+)`$/</a></strong> - Run or try a given command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-from/">When /^I (run|try) `([^`]+)` from '([^\s]+)'$/</a></strong> - Run or try a given command in a subdirectory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/when-i-run-try-the-previous-command-again/">When /^I (run|try) the previous command again$/</a></strong> - Run or try the previous command again.</li>


</ul>


## Then

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


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-should-be-yaml-containing/">Then /^STDOUT should be YAML containing:$/</a></strong> - Expect STDOUT to be YAML containing certain content.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-be-empty/">Then /^(STDOUT|STDERR) should be empty$/</a></strong> - Expect STDOUT or STDERR to be empty.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-not-be-empty/">Then /^(STDOUT|STDERR) should not be empty$/</a></strong> - Expect STDOUT or STDERR not to be empty.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-be-a-version-string-w/">Then /^(STDOUT|STDERR) should be a version string (&lt;|&lt;=|&gt;|&gt;=|==|=|!=|&lt;&gt;) ([+\w.{}-]+)$/</a></strong> - Expect STDOUT or STDERR to be a version string comparing to the given version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-file-directory-should-strictly-exist-not-exist-be-contain-not-contain/">Then /^the (.+) (file|directory) should( strictly)? (exist|not exist|be:|contain:|not contain:)$/</a></strong> - Expect a certain file or directory to (not) exist or (not) contain certain contents.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-contents-of-the-file-should-not-match/">Then /^the contents of the (.+) file should( not)? match (((\/.+\/)|(#.+#))([a-z]+)?)$/</a></strong> - Match file contents against a regex.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-stdout-stderr-should-not-match/">Then /^(STDOUT|STDERR) should( not)? match (((\/.+\/)|(#.+#))([a-z]+)?)$/</a></strong> - Match STDOUT or STDERR against a regex.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-an-email-should-be-sent-not-be-sent/">Then /^an email should (be sent|not be sent)$/</a></strong> - Expect an email to be sent (or not).</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/then-the-http-status-code-should-be-code/">Then the HTTP status code should be :code</a></strong> - Expect the HTTP status code for visiting `http://localhost:8080`.</li>


</ul>


