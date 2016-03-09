---
layout: doc
title: Plugin Unit Tests
description: How to set up and run PHPUnit tests for a WordPress plugin.
category: Guides
---

This guide will demonstrate how to:

* set up unit tests for an existing plugin, using WP-CLI
* run the tests locally

We're going to assume that you already have a plugin called `my-plugin`.

So, let's get started:

1) [Install PHPUnit](https://github.com/sebastianbergmann/phpunit#installation) (4.8.x required, 5.x not supported).

2) Generate the plugin test files:

    wp scaffold plugin-tests my-plugin

This command will generate all the files needed for running tests, including a `.travis.yml` file. If you host your plugin on Github and enable [Travis CI](http://about.travis-ci.org), the tests will be run automatically after every commit you make to the plugin.

3) Initialize the testing environment locally:

(you'll need to already have `svn` and `wget` available)

    cd $(wp plugin path my-plugin --dir)
    bash bin/install-wp-tests.sh wordpress_test root '' localhost latest

where:

* `wordpress_test` is the name of the test database (**all data will be deleted!**)
* `root` is the MySQL user name
* `''` is the MySQL user password
* `localhost` is the MySQL server host
* `latest` is the WordPress version; could also be `3.7`, `3.6.2` etc.

This script does a couple things. First it installs a copy of WordPress in the `temp/` directory (by default) as well as the WordPress unit testing tools. Then it creates a database to be used while running tests. 

NOTE: This script can be run multiple times without errors, but it will *not* overwrite previously existing files. So if your DB credentials change, or you want to switch to a different instance of mysql, simply re-running the script won't be enough. You'll need to manually edit the `wp-config.php` that's installed in the `temp/`.

4) Run the plugin tests:

    phpunit

**Note**: phpunit 4.8.x is required (5.x won't work)
