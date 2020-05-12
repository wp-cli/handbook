# Governance

This document describes the governance structure of the WP-CLI project.

## Who's in charge?

WP-CLI has one maintainer: [schlessera](http://github.com/schlessera). On a day to day basis, final decision-making authority resides with him.

The project roadmap is an organic, evolving vision developed between the project's maintainers, committers, and contributors. Generally, we try to make decisions in [alignment with the project's philosophy](https://make.wordpress.org/cli/handbook/philosophy/) and [committers credo](https://make.wordpress.org/cli/handbook/committers-credo/).

## Why are some people members of the WP-CLI organization?

On occasion, we [grant write access to contributors](https://github.com/orgs/wp-cli/teams/committers) who have demonstrated, over a period of time, that they are capable and invested in moving the project forward. These committers are expected to:

* Hold product and code quality in the highest regard.
* Exhibit stellar judgement and communication.
* Participate in the project on a consistent basis.

Becoming a committer can seem glamorous, but it also comes with expectations of responsibility, commitment, and humility.

[andreascreten](https://github.com/andreascreten) is the original author of WP-CLI. [scribu](https://github.com/scribu) and [danielbachhuber](https://github.com/danielbachhuber) have been long time maintainers.

## What's the connection between WP-CLI and WordPress?

As of December 2017, WP-CLI is a [formal WordPress project](https://make.wordpress.org/core/2016/12/28/supporting-the-future-of-wp-cli/).

Practically speaking, this means we get to take advantage of the WordPress project's people and software infrastructure:

* Much of the WP-CLI documentation is hosted on the wordpress.org domain.
* We get to use the `#cli` channel in the [WordPress Slack organization](https://make.wordpress.org/chat/).
* If we need help with something, we can ask.
* Two core committers ([dd32](https://github.com/dd32) and [pento](https://github.com/pento)) have ownership permissions to the WP-CLI GitHub organization, in the unlikely event everyone else gets hit by a bus.

Other than this, WP-CLI operates independently.

## How does all of this work?

The [WP-CLI GitHub organization](https://github.com/wp-cli) contains all project code repositories. Some commands are bundled with WP-CLI, while others are independently installable. Commands are bundled with WP-CLI when they're stable, closely aligned with the [project philosophy](https://make.wordpress.org/cli/handbook/philosophy/), and useful to a majority of users.

[wp-cli/wp-cli](https://github.com/wp-cli/wp-cli) is the main project repository, which pulls in command packages and other dependencies through Composer. Composer defines which version of which dependencies is included in the build. Changes to command packages are included in WP-CLI proper when a stable release is tagged for the package.

Nightly Phar builds are created by a Travis job that calls [deploy.sh](https://github.com/wp-cli/wp-cli/blob/master/ci/deploy.sh) and pushes the build artifact to the [builds repository](http://github.com/wp-cli/builds). Releases are prepared manually [in accordance to the release checklist](https://make.wordpress.org/cli/handbook/release-checklist/).

The `wp-cli.org` domain is currently owned by [andreascreten](https://github.com/andreascreten). DNS is managed through a [Cloudflare](https://www.cloudflare.com/) account that [danielbachhuber](https://github.com/danielbachhuber) holds credentials to.

Much of the WP-CLI documentation (command pages, etc.) is editable through [wp-cli/handbook](https://github.com/wp-cli/handbook/), and then synced to WordPress.org. The WP-CLI.org homepage is [hosted on GitHub Pages](http://github.com/wp-cli/wp-cli.github.com).

From time to time, you may see a pull request from the `wp-make-coffee` bot. These originate from a donated WebFaction server running some cron jobs calling bash scripts:

```bash
5 4 * * 1,3,5 source ~/.bash_profile; WP_CLI_DIR=~/wp-cli bash ~/wp-cli/utils/auto-composer-update.sh > ~/auto-composer-update.log 2>&1
5 6 * * 1,3,5 source ~/.bash_profile; WP_CLI_DIR=~/wp-cli-bundle bash ~/wp-cli-bundle/utils/auto-composer-update.sh > ~/auto-composer-update-bundle.log 2>&1
```

The [wpcli](https://twitter.com/wpcli) Twitter account is managed by [schlessera](https://github.com/schlessera).

If you [subscribe for email updates](https://make.wordpress.org/cli/subscribe/), your email address is registered with WordPress.com through Automattic's Jetpack plugin.
