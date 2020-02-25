# Plugin Unit Tests

This guide demonstrates how to run unit tests on both Travis CI and locally.

## Running tests on Travis CI

If you host your plugin on GitHub and enable [Travis CI](http://about.travis-ci.org), the tests will be run automatically after every commit you make to the plugin.

All you need to do to enable this is copy and then edit the following files from the [WP-CLI sample plugin](https://github.com/wp-cli/sample-plugin):

* `.travis.yml`, `phpunit.xml.dist` and `phpcs.ruleset.xml` files
* `tests` folder

See the docs for an [explanation of what each file does](https://developer.wordpress.org/cli/commands/scaffold/plugin-tests/). You will then need to specify your unit tests in the `tests/` folder.

## Running tests locally

Running tests locally can be beneficial during development as it is quicker than committing changes and waiting for Travis CI to run the tests.

We're going to assume that:

* You already have a plugin called `my-plugin`
* You have installed `git`, `svn`, `php`, `apache` ([How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 16.04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04))

So, let's get started:

1. [Install PHPUnit](https://github.com/sebastianbergmann/phpunit#installation) (5.x is only supported when running php7, phpunit 4.8 is required when running php5).

1. Generate the plugin test files: 

  ```bash
  wp scaffold plugin-tests my-plugin
  ```

This command will generate all the files needed for running tests, including a `.travis.yml` file. 

1. Initialize the testing environment locally: `cd` into the plugin directory and run the install script (you will need to have `wget` installed).

  ```bash
  bash bin/install-wp-tests.sh wordpress_test root '' localhost latest
  ```

The install script first installs a copy of WordPress in the `/tmp` directory (by default) as well as the WordPress unit testing tools. Then it creates a database to be used while running tests. The parameters that are passed to `install-wp-tests.sh` setup the test database.

* `wordpress_test` is the name of the test database (**all data will be deleted!**)
* `root` is the MySQL user name
* `''` is the MySQL user password
* `localhost` is the MySQL server host
* `latest` is the WordPress version; could also be `3.7`, `3.6.2` etc.

NOTE: This script can be run multiple times without errors, but it will *not* overwrite previously existing files. So if your DB credentials change, or you want to switch to a different instance of mysql, simply re-running the script won't be enough. You'll need to manually edit the `wp-config.php` that's installed in `/tmp`.

4) Run the plugin tests: 

```bash
phpunit
```

If you have trouble running the install script or phpunit, check [Support section](http://wp-cli.org/#support) for help and answers to common issues.

## Integrating WP Unit Testing in Windows

Tried and gotten stuck setting up unit tests for your project in Windows?

First, know that some WP-CLI commands don't work in Windows, so you'll want to use Cygwin. Cygwin is also [preferred by the WordPress core project](https://make.wordpress.org/core/handbook/tutorials/working-with-patches/).

Second, the `bin/install-wp-tests.sh` script doesn't work directly in Windows. Windows 10 [introduced a Windows Subsystem for Linux](http://www.pcworld.com/article/3106463/windows/how-to-get-bash-on-windows-10-with-the-anniversary-update.html) but older versions require extra effort. Cygwin is preferred because it runs bash scripts by default.

Third, the bash installation script uses `which`, a Linux command not available by default in Windows. `cURL`, `svn` and `wget` all can be installed in Windows as separate packages.

Lastly, sometimes the bash script fails to build WordPress because of how it uses tmp folders. If it fails, then you can manually install WordPress to a writeable directory, and then manually create `wp-tests-config.php`.
