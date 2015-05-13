---
layout: default
title: 'wp scaffold plugin-tests'
---

`wp scaffold plugin-tests` - Generate files needed for running PHPUnit tests.

### DESCRIPTION

These are the files that are generated:

* `phpunit.xml` is the configuration file for PHPUnit
* `.travis.yml` is the configuration file for Travis CI
* `tests/bootstrap.php` is the file that makes the current plugin active when running the test suite
* `tests/test-sample.php` is a sample file containing the actual tests

### ENVIRONMENT

The `tests/bootstrap.php` file looks for the WP_TESTS_DIR environment
variable.

### OPTIONS

[&lt;plugin&gt;]
: The name of the plugin to generate test files for.

[\--dir=&lt;dirname&gt;]
: Generate test files for a non-standard plugin path. If no plugin slug is specified, the directory name is used.

### EXAMPLE

    wp scaffold plugin-tests hello

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



