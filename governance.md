# Governance

This document describes the governance structure of the WP-CLI project.

## Who's in charge?

WP-CLI has two project maintainers: [danielbachhuber](https://github.com/danielbachhuber) and [schlessera](http://github.com/schlessera). On a day to day basis, final decision-making authority resides with them.

The project roadmap is an organic, evolving vision developed between the project's maintainers, committers, and contributors. Generally, we try to make decisions in [alignment with the project's philosophy](https://make.wordpress.org/cli/handbook/philosophy/) and [committers credo](https://make.wordpress.org/cli/handbook/committers-credo/).

## Why are some people members of the WP-CLI organization?

On occasion, we [grant write access to contributors](https://github.com/orgs/wp-cli/teams/committers) who have demonstrated, over a period of time, that they are capable and invested in moving the project forward. These committers are expected to:

* Hold product and code quality in the highest regard.
* Exhibit stellar judgement and communication.
* Participate with the project on a consistent basis.

Becoming a committer can seem glamorous, but it also comes with expectations of responsibility, commitment, and humility.

[andreascreten](https://github.com/andreascreten) is the original author of WP-CLI, and [scribu](https://github.com/scribu) was a long time maintainer.

## What's the connection between WP-CLI and WordPress?

As of December 2017, WP-CLI is a [formal WordPress project](https://make.wordpress.org/core/2016/12/28/supporting-the-future-of-wp-cli/).

Practically-speaking, this means we get to take advantage of the WordPress project's people and software infrastructure:

* Much of the WP-CLI documentation is hosted on the wordpress.org domain.
* We get to use the `#cli` channel in the [WordPress Slack organization](https://make.wordpress.org/chat/).
* If we need help with something, we can ask.
* A couple core committers ([dd32](https://github.com/dd32) and [pento](https://github.com/pento)) have ownership permissions to the WP-CLI GitHub organization, in the unlikely event everyone else gets hit by a bus.

Other than this, WP-CLI operates independently.

## How does all of this work?

The [WP-CLI GitHub organization](https://github.com/wp-cli) contains all project code repositories. [wp-cli/wp-cli](https://github.com/wp-cli/wp-cli) is the main project repository, which pulls in command packages and other dependencies through Composer.

Some commands are bundled with WP-CLI, while others are independently installable. Commands are bundled with WP-CLI when they're stable, closely aligned with the project philosophy, and useful to a majority of users.

Nightly Phar builds are created by a Travis job that pushes to the [builds repository](http://github.com/wp-cli/builds). Releases are prepared manually [in accordance to the release checklist](https://make.wordpress.org/cli/handbook/release-checklist/).

The `wp-cli.org` domain currently owned by [andreascreten](https://github.com/andreascreten). DNS is managed through a [Cloudflare](https://www.cloudflare.com/) account that [danielbachhuber](https://github.com/danielbachhuber) holds credentials to.

Much of the WP-CLI documentation (command pages, etc.) are editable through [wp-cli/handbook](https://github.com/wp-cli/handbook/), and then synced to WordPress.org. The WP-CLI.org homepage is [hosted on GitHub Pages](http://github.com/wp-cli/wp-cli.github.com).

The [wpcli](https://twitter.com/wpcli) Twitter account is managed by [danielbachhuber](https://github.com/danielbachhuber).

If you [subscribe for email updates](https://make.wordpress.org/cli/subscribe/), your email address is registered with WordPress.com through Automattic's Jetpack plugin.
