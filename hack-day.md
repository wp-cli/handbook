# WP-CLI Hack Day

Welcome to [WP-CLI Hack Day](https://make.wordpress.org/cli/2024/04/02/save-the-date-wp-cli-hack-day-on-friday-april-26th/)! We appreciate you taking time to contribute to the project.

**We'd love to help you submit at least one pull request today**. Given this goal, you'll likely want to **start with something small and attainable**. After you've submitted your first pull request for the day, you're welcome to work on something more ambitious.

When do you submit a pull request during Hack Day, please add <code>Related https://github.com/wp-cli/wp-cli/issues/5935</code> so we can easily keep track of them. We'll include them in a recap post at the end of the day.

We put together this guide to make contributing as straightforward as possible. Please also join the [#cli channel in WordPress.org Slack](https://wordpress.slack.com/messages/C02RP4T41) ([sign up instructions](https://make.wordpress.org/chat/)) to chat with other contributors, for questions, etc.

Your leads for the day are: [schlessera](https://github.com/schlessera), [danielbachhuber](https://github.com/danielbachhuber), [swissspidy](https://github.com/swissspidy)

## Open Video Sessions

During the Hack Day, we’ll have two open video chat sessions:

- [🕓 02:00-03:00 PST / 05:00-06:00 EST / 09:00-10:00 UTC / 11:00-12:00 CEST / 18:00-19:00 JST](https://www.timeanddate.com/worldclock/fixedtime.html?iso=20240426T0900)
- [🕓 08:00-09:00 PST / 11:00-12:00 EST / 15:00-16:00 UTC / 17:00-18:00 CEST / 00:00-01:00 JST](https://www.timeanddate.com/worldclock/fixedtime.html?iso=20240426T1500)

These sessions are a great opportunity to discuss remaining issues live, chat about the progress we’ve made, and to connect with the community. Feel free to join these to talk through any challenges or share your updates!

## Getting Started

If you normally use WP-CLI on your web host or via Brew, you're most likely using the Phar executable (`wp-cli.phar`). This Phar executable file is the "built", singular version of WP-CLI. It is compiled from a couple dozen repositories in the WP-CLI GitHub organization.

In order to make code changes to WP-CLI, you'll need to set up the `wp-cli-dev` development environment on your local machine. Before you can proceed, though, you'll need to make sure you have [Composer](https://getcomposer.org/), PHP, and a functioning MySQL or MariaDB server on your local machine.

Once the prequisites are met, clone the GitHub repository and run the installation process:

```bash
git clone https://github.com/wp-cli/wp-cli-dev wp-cli-dev
cd wp-cli-dev
composer install
composer prepare-tests
```

The `wp-cli-dev` installation process clones all of WP-CLI's repositories to your local machine. After the installation process is complete, you can make changes in whichever repository you like. You'll need to fork the repository in order to push your feature branch, however. [GitHub's CLI](https://github.com/cli/cli) is pretty helpful for this:

```bash
cd core-command
gh repo fork
```

All WP-CLI pull requests are expected to have tests. [Watch a ~10 minute video introduction](https://github.com/wp-cli/wp-cli/issues/5858), or see [running and writing tests](https://make.wordpress.org/cli/handbook/contributions/pull-requests/#running-and-writing-tests) for the written version.

## Suggested Tickets

To help you be successful during the day, we curated a list of reasonably approachable and actionable issues.

Feel free to comment directly on the issue if you plan to work on it. We don't usually assign issues, so no need to worry about that.

**New contributors**

- [Regenerating a single image size (re-)generates auto-scaled big images & auto-rotated images](https://github.com/wp-cli/media-command/issues/196)
- [wp plugin update all doesnt display info which plugin is being updated](https://github.com/wp-cli/extension-command/issues/261)
- [No thumbnail when importing PDF file using `media import`](https://github.com/wp-cli/media-command/issues/195)
- [Allow theme slug renaming](https://github.com/wp-cli/extension-command/issues/74)
- [Subtheme installation fails after installing main theme, if subtheme was tried first, due to left-behind directory](https://github.com/wp-cli/extension-command/issues/410)
- [Include more information with wp plugin list](https://github.com/wp-cli/extension-command/issues/241)
- [Output only matching IDs in db search](https://github.com/wp-cli/db-command/issues/158)
- [DB-Check fails if Database requires SSL](https://github.com/wp-cli/config-command/issues/113)

See [issues labeled 'good-first-issue'](https://github.com/issues?q=is%3Aopen+org%3Awp-cli+is%3Aissue+sort%3Aupdated-desc+label%3Agood-first-issue+) or [issues labeled 'contributor-day'](https://github.com/issues?q=is%3Aopen+org%3Awp-cli+is%3Aissue+sort%3Aupdated-desc+label%3Acontributor-day) for a broader list.

**Seasoned contributors**

- [Plugin Dependencies Support](https://github.com/wp-cli/extension-command/issues/407)
- [Set WP_CLI_PACKAGES_DIR in config file](https://github.com/wp-cli/wp-cli/issues/5645)
- [Cache wp plugin install from GitHub](https://github.com/wp-cli/extension-command/issues/363)
- [Improve speed of import when uploads are available locally](https://github.com/wp-cli/import-command/issues/83)
- [Introduce a dedicated search-replace url command](https://github.com/wp-cli/search-replace-command/issues/186)

You're obviously welcome to work on [any other issue](https://github.com/issues?q=is%3Aopen+org%3Awp-cli+is%3Aissue+sort%3Aupdated-desc) you'd like too! [Bug fixes in particular are very welcome](https://github.com/issues?q=is%3Aopen%20org%3Awp-cli%20is%3Aissue%20sort%3Acreated-desc%20label%3Abug). This day can be a good opportunity to discuss trickier issues and brainstorm approaches.

## Thank You for Contributing

We appreciate your taking the time to participate in the Hack Day and contribute to `wp-cli`. Have fun, and we look forward to seeing you on [Slack](https://wordpress.slack.com/messages/C02RP4T41)!
