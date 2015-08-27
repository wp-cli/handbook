---
layout: default
title: 'wp scaffold package-tests'
---

`wp scaffold package-tests` - Generate files needed for writing Behat tests for your command.

<hr />

### DESCRIPTION

These are the files that are generated:

* `.travis.yml` is the configuration file for Travis CI
* `bin/install-package-tests.sh` will configure environment to run tests. Script expects WP_CLI_BIN_DIR and WP_CLI_CONFIG_PATH environment variables.
* `features/load-wp-cli.feature` is a basic test to confirm WP-CLI can load.
* `features/bootstrap`, `features/steps`, `features/extra` are Behat configuration files.
* `utils/generate-package-require-from-composer.php` generates a test config.yml file from your package's composer.json

### ENVIRONMENT

The `features/bootstrap/FeatureContext.php` file expects the WP_CLI_BIN_DIR and WP_CLI_CONFIG_PATH environment variables.

WP-CLI Behat framework uses Behat ~2.5.

### OPTIONS

&lt;dir&gt;
: The package directory to generate tests for.

[\--force]
: Overwrite files that already exist.

### EXAMPLE

    wp scaffold package-tests /path/to/command/dir/

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



