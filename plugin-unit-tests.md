# Plugin Unit Tests

This guide will demonstrate how to:

* Set up unit tests for an existing plugin, using WP-CLI
* Run the tests locally

We're going to assume that you already have a plugin called `my-plugin`.

So, let's get started:

1) [Install PHPUnit](https://github.com/sebastianbergmann/phpunit#installation) (5.x is only supported when running php7, phpunit 4.8 is required when running php5).

2) Generate the plugin test files: 

```bash
wp scaffold plugin-tests my-plugin
```

This command will generate all the files needed for running tests, including a `.travis.yml` file. If you host your plugin on Github and enable [Travis CI](http://about.travis-ci.org), the tests will be run automatically after every commit you make to the plugin.

3) Initialize the testing environment locally: `cd` into the plugin directory and run the install script. (You'll need to already have `svn` and `wget` installed.)

```bash
bash bin/install-wp-tests.sh wordpress_test root '' localhost latest
```

The install script first it installs a copy of WordPress in the `/tmp` directory (by default) as well as the WordPress unit testing tools. Then it creates a database to be used while running tests. The parameters that are passed to `install-wp-tests.sh` setup the test database.

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
