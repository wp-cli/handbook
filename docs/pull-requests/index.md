---
layout: doc
title: Pull Requests
category: Contributing
description: Submit your first bug fix or new feature.
---

WP-CLI follows a pull request workflow for changes to its code (and documentation). Whether you want to fix a bug or implement a new feature, the process is pretty much the same:

0. [Search existing issues](https://github.com/wp-cli/wp-cli/issues); if you can't find anything related to what you want to work on, open a new issue so that you can get some initial feedback.
1. [Fork](https://github.com/wp-cli/wp-cli/fork) the repository.
2. Create a branch for each issue you'd like to address. Commit your changes.
3. Push the code changes from your local clone to your fork.
4. Open a pull request.

It doesn't matter if the code isn't perfect. The idea is to get it reviewed early and iterate on it.

If you're adding a new feature, please add one or more functional tests for it in the `features/` directory. See below.

Lastly, please follow the [WordPress Coding Standards](http://make.wordpress.org/core/handbook/coding-standards/).

## Setting up

If you haven't submitted a pull request before, you'll want to install WP-CLI for local development:

1. Clone this git repository on your local machine.
2. Install [Composer](https://getcomposer.org/) if you don't already have it.
3. Run `composer install` to fetch all the dependencies.
4. Run `./bin/wp --info` to test if everything was installed properly.

## Running and writing tests

There are two types of automated tests:

* functional tests, implemented using [Behat](http://behat.org)
* unit tests, implemented using [PHPUnit](http://phpunit.de/)

### Functional tests

The functional test files for WP-CLI are in the `features/` directory. Each `.feature` file comprises one or more functional tests for a given feature (roughly organized by command).

A functional test can be as simple as:

```
Feature: Evaluating PHP code and files.

  Scenario: Basics
    Given a WP install

    When I run `wp eval 'var_dump(defined("WP_CONTENT_DIR"));'`
    Then STDOUT should contain:
      """
      bool(true)
      """
```

Functional tests typically follow this pattern:

* **Given** some background,
* **When** a user performs a specific action,
* **Then** the end result should be X (and Y and Z).

Before running the functional tests, you'll need a MySQL (or MariaDB) user called `wp_cli_test` with the password `password1` that has full privileges on the MySQL database `wp_cli_test`. Running the following as root in MySQL should do the trick:

    GRANT ALL PRIVILEGES ON wp_cli_test.* TO "wp_cli_test"@"localhost" IDENTIFIED BY "password1";

Then, to run the entire test suite:

    ./vendor/bin/behat --expand

Or to test a single feature:

    ./vendor/bin/behat features/core.feature

More info can be found by using `./vendor/bin/behat --help`.

### Unit tests

The unit test files are in the `tests/` directory.

To run the unit tests, just execute:

    ./vendor/bin/phpunit

## Finally...

Thanks! Hacking on WP-CLI should be fun. If you find any of this hard to figure out, let us know so we can improve our process or documentation!
