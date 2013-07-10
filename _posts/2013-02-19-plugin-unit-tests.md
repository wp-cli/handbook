---
layout: post
title: Easily Set Up Unit Tests For Your Plugin
author: scribu
---
One of the reasons so few people take the time to write [unit tests for plugins][3] they author is that it's a chore to set everything up. You need to install [PHPUnit][4], the [WordPress testing library][5], as well as the actual plugin tests configuration files.

If you're running WP-CLI 0.9.0-alpha2 or later, there are a few commands that make this significantly easier:

	wp core init-tests

Given some database credentials, the above command will download and configure the WordPress testing library, using the current WordPress install as the base.

	wp scaffold plugin-tests <your-plugin>

This command will generate all the necessary files for running the plugin tests locally.

Additionally, if you choose to host your plugin on Github, you can make the tests run automatically after every commit, via [Travis CI][1].

So, here's a complete example:

	# Initialize the testing library
	wp core init-tests ~/svn/wp-tests --dbname=wp_test --dbuser=root --dbpass=asd
	mysql -u'root' -p'asd' -e 'CREATE DATABASE IF NOT EXISTS wp_test'

	# Generate the plugin files
	wp scaffold plugin sample-plugin

	# Run the tests
	cd wp-content/plugins/sample-plugin
	WP_TESTS_DIR=~/svn/wp-tests phpunit

You can check out the [sample-plugin][2] repo to see what the generated plugin looks like.

Run `wp help scaffold plugin-tests` for more info.

A shout-out to the people that contributed to [benbalter/wordpress-plugin-tests][6] is in order.

[1]: http://about.travis-ci.org
[2]: https://github.com/wp-cli/sample-plugin
[3]: http://wordpress.tv/2011/08/20/nikolay-bachiyski-unit-testing-will-change-your-life/
[4]: http://www.phpunit.de/manual/current/en/automating-tests.html
[5]: http://make.wordpress.org/core/handbook/automated-testing/
[6]: https://github.com/benbalter/wordpress-plugin-tests/contributors
