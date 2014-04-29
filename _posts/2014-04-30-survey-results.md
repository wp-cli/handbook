---
layout: post
author: danielbachhuber
title: "What the survey said"
---

Many thanks to the 56 people who took our first user survey. We appreciate your time in helping us understand how WP-CLI is being adopted by the community.

### By the numbers

**Almost 3/4 of respondents use WP-CLI actively**

53% use WP-CLI multiple times per day, 20% use it a couple or few times per week, and 26% use it infrequently or rarely. 46% of respondents use WP-CLI interactively at the command line, 34% have incorporated it into bash scripts, and 18% are using WP-CLI with Puppet, Chef, or another provisioning system.

**WP-CLI is largely used to install and update**

Even with its variety of commands, WP-CLI is largely used to install and update. 37.5% of respondents reported using WP-CLI to install WordPress (with 30.36% using it to update WordPress), and 32.14% reported using it to update plugins and themes.

After code management, WP-CLI is popularly used (23.21%) to perform migrations. Respondents reported using `wp db export` and `wp db import` in conjunction with `wp search-replace`, or `wp export` and `wp import`.

A subset of respondents reported using WP-CLI to perform specialized tasks, including:

* Creating users with [`wp user create`](http://wp-cli.org/commands/user/create/) and [`wp user import-csv`](http://wp-cli.org/commands/user/import-csv/).
* [Deleting options](http://wp-cli.org/commands/option/delete/).
* [Resizing images](http://wp-cli.org/commands/media/regenerate/).
* [Creating posts / pages](http://wp-cli.org/commands/post/create/).
* Quick code execution via [`wp eval`](http://wp-cli.org/commands/eval/), [`wp eval-file`](http://wp-cli.org/commands/eval-file/), and [`wp shell`](http://wp-cli.org/commands/shell/).
* [Writing custom commands](https://github.com/wp-cli/wp-cli/wiki/Commands-Cookbook).

**Only 38% have used community packages**

WP-CLI now has 24 community packages listed in its [Package Index](http://wp-cli.org/package-index/). A good 62% percent of respondents will have the good fortune in the future to discover a helpful community package.

### Feature requests

**For some reason, respondents would like WP-CLI to prepare their meals**

A good 7% of you think WP-CLI is capable of making your meals, asking for it to "make breakfast", "make coffee ;-)", or "dishes?". While we can't make any promises, we'll continue to think about WP-CLI over breakfast and see if we get inspired.
