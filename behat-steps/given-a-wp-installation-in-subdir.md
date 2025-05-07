# Given a WP install(ation) in :subdir

Installs WordPress in a given directory.


***

## Usage

```
Scenario: My example scenario
  Given a WP installation in 'foo'
  ...

Scenario: My other scenario
  Given a WP install in 'bar'
  ...
```


*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

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


<li><strong><a href="https://make.wordpress.org/cli/handbook/behat-steps/given-a-wp-installation/">Given a WP install(ation)</a></strong> - Installs WordPress.</li>


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


