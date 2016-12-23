---
layout: doc
title: Website and Package Index wish list
description: A list of ideas and potential improvements for wp-cli.org
category: Misc
---

An ongoing list of ideas and potential improvements for wp-cli.org.

### WP-CLI

* Split components into logical subpackages (e.g. `wp-cli/search-replace-command`), and require them via Composer. ([from #3652](https://github.com/wp-cli/wp-cli/issues/3652)).

### Website

* Redesign! And potentially move to WordPress from Github pages.
* Produce command pages for the packages listed in the package index.
* Publish a set of suggested best practices for package maintainers to follow.
* Proxy Github API requests for new WP-CLI versions ([from #3426](https://github.com/wp-cli/wp-cli/issues/3426)).

### Package Index

* Display download / installation counts for each package.
* Display number of Github stars for each package.
* Highlight packages in the index that are regularly updated, have multiple maintainers, or reflect some other quality we hold to be important.
* Written guidelines for package best practices.
* Create distribution releases for packages in the package index to speed up installation ([from #2566](https://github.com/wp-cli/wp-cli/issues/2566)).
* Run test suite for each package on a weekly basis ([from #3197](https://github.com/wp-cli/wp-cli/issues/3197#issuecomment-238946219)).
* Validate packages submitted to the package index ([previously #3177](https://github.com/wp-cli/wp-cli/issues/3177))

### General Infrastructure

* Run test suite over SSH connection ([previously #2772](https://github.com/wp-cli/wp-cli/issues/2772))
