---
layout: post
author: danielbachhuber
title: What the survey said, 2015 edition
---

Many thanks to the 206 (!!!) people who took our second user survey. We appreciate your time in helping us to understand how WP-CLI is being adopted by the community.

Curious as to how the numbers have changed? Take a look at the [summary of the first user survey in April 2014](http://wp-cli.org/blog/survey-results.html).

### By the numbers

**85% of respondents use WP-CLI actively**

Of the 85%, 48% use WP-CLI multiple times per day and 37% use it a couple or few times per week. Only 15% of respondents use WP-CLI infrequently or rarely.

94% of respondents use WP-CLI interactively at the command line, 66% have incorporated it into bash scripts, and 23% are using WP-CLI with Puppet, Chef, or another provisioning system. Other tools used with WP-CLI include: [Capistrano](http://capistranorb.com/), [Codeception](http://codeception.com/), [EasyEngine](https://easyengine.io/), [Fabric](http://www.fabfile.org/), [Grunt](http://gruntjs.com/), and [SaltStack](http://saltstack.com/).

**Most keep WP-CLI up to date**

Over 70% of respondents keep WP-CLI up to date. Here's how the numbers break down:

* 13% run the latest alpha. You can too with `wp cli update --nightly`.
* 58% use the latest stable release (v0.20.x at time of survey).
* 24% are using one or two versions below the latest stable, and only 5% use a version beyond that.

Good news — If you're writing custom commands, you can reasonably assume it's safe to use the latest features in WP-CLI.

**WP-CLI is used for an increasing variety of tasks**

The survey included "What do you use WP-CLI for?" as a free-form field. To produce a statistical summary, I tagged each response with keywords. Of 170 interpreted values:

* 38% (65) use WP-CLI for updating WordPress core, themes, or plugins.
* 22% (38) transform their database in some way using `wp search-replace`.
* 17% (29) rely upon WP-CLI when performing migrations.
* 15% (26) make use of WP-CLI's database management features: export, import and optimization.
* 11% (18) depend upon WP-CLI in provisioning scripts.
* 10% (17) scaffold new themes and plugins with `wp scaffold`.
* 9% (16) write custom commands for their own needs.
* 6% (10) generate posts, users and comments for mock data.
* 3% (5) hearty souls use `wp shell`, `wp eval`, and `wp eval-file` for debugging and quick scripts.

In no particular order, some third-party commands and workflows mentioned include: [Jetpack CLI](https://jetpack.me/support/jetpack-cli/), [WP Parser](https://github.com/WordPress/phpdoc-parser), [ElasticPress](https://github.com/10up/ElasticPress), [WP Migrate DB Pro](https://deliciousbrains.com/wp-migrate-db-pro/doc/cli-addon/), [WP CFM](http://forumone.github.io/wp-cfm/), [BackWPUp](https://github.com/inpsyde/backwpup), [wp-cli-ssh](https://github.com/xwp/wp-cli-ssh), [wp-instant-setup](https://github.com/miya0001/wp-instant-setup), [project-template-wordpress](https://github.com/QoboLtd/project-template-wordpress), and [provisioning a new WordPress.org Theme Review environment](http://th-daily.shinichi.me/2014/10/27/memo-wp-cli-commands-for-the-theme-reviewers/).

One person mentioned they use WP-CLI to make coffee. On behalf of everyone, I look forward to one day seeing this command in the [package directory](https://github.com/wp-cli/wp-cli/issues/1564).

### Feature requests

Feel like contributing to WP-CLI over the holidays? Here's a grab bag of enhancements you could work on:

* Better documentation (internals, extending, common workflows).
* One single uber-command to install WordPress, including downloading files, creating the MySQL database, setting up wp-config.php, and populating database tables.
* Suggest correct syntax when a command is incorrectly entered (e.g. `git staus`).
* Improved support for managing multiple networks: `wp network list`, `wp network create`.
* Install plugins favorited by a given WordPress.org user.
* Verify theme and plugin checksums.
* Report when extra files are present in wp-admin or wp-includes (e.g. checksums of directories)
* Save a template of WordPress setup (similar to `grunt {my-task}`).
* Disable all plugins except for a specific one. Or, load WP-CLI with only a given plugin active.
* Install WordPress nightly builds without needing the beta plugin.
* Provide a command to execute WP-Cron without requiring a HTTP request.
* Define custom scaffolds for themes and plugins.
* Generate posts, pages from a sitemap CSV.
* Magically migrate data between environments (production -> staging).
* Add option to exclude specific tables in `wp search-replace`.
* Provide a way to log in with a one-time link.

Thanks again to everyone who took the time to complete our user survey. Hope you've found these results a source of tips and inspiration.
