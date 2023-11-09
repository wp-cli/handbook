# WP-CLI Hack Day

Welcome to [WP-CLI Hack Day](https://make.wordpress.org/cli/handbook/contributions/contributor-day/)! We appreciate you taking time to contribute to the project.

We'd love to help you submit at least one pull request today. Given this goal, you'll likely want to _start with something small and attainable_. After you've submitted your first pull request for the day, you're welcome to work on something more ambitious.

When do you submit a pull request during Hack Day, please add <code>Related https://github.com/wp-cli/wp-cli/issues/5859</code> so we can easily keep track of them. We'll include them in a recap post at the end of the day.

We put together this guide to make contributing as straightforward as possible. Please also join the [#cli channel in WordPress.org Slack](https://wordpress.slack.com/messages/C02RP4T41) ([sign up instructions](https://make.wordpress.org/chat/)) to chat with other contributors, for questions, etc.

Your leads for the day are: [schlessera](https://github.com/schlessera), [danielbachhuber](https://github.com/danielbachhuber), [swissspidy](https://github.com/swissspidy)

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

- [Admin context crashes because of admin.php file formatting](https://github.com/wp-cli/wp-cli/issues/5844)
- [Add url-to-id commands for each entity](https://github.com/wp-cli/entity-command/issues/429)
- [Support multiple roles in user add-role and user remove-role](https://github.com/wp-cli/entity-command/issues/423)
- [Support for forcing an update check](https://github.com/wp-cli/core-command/issues/154)
- [Include `update_version` in default plugin list and theme list fields](https://github.com/wp-cli/extension-command/issues/198)
- [Output only matching IDs in db search](https://github.com/wp-cli/db-command/issues/158)
- [Provide hardcoded edge case for hello plugin installed by Core](https://github.com/wp-cli/checksum-command/issues/33)

See [issues labeled 'good-first-issue'](https://github.com/issues?q=is%3Aopen+org%3Awp-cli+is%3Aissue+sort%3Aupdated-desc+label%3Agood-first-issue+) for a broader list.

**Seasoned contributors**

- [Set WP_CLI_PACKAGES_DIR in config file](https://github.com/wp-cli/wp-cli/issues/5645)
- [Improve speed of import when uploads are available locally](https://github.com/wp-cli/import-command/issues/83)
- [Introduce a dedicated search-replace url command](https://github.com/wp-cli/search-replace-command/issues/186)
- [Path errors when running wp dist-archive on Windows](https://github.com/wp-cli/dist-archive-command/issues/76)
- [Prompt if archive file already exists, instead of overwriting automatically](https://github.com/wp-cli/dist-archive-command/issues/70)

You're obviously welcome to work on [any other issue](https://github.com/issues?q=is%3Aopen+org%3Awp-cli+is%3Aissue+sort%3Aupdated-desc) you'd like too! Bug fixes are very welcome. This day can be a good opportunity to discuss trickier issues and brainstorm approaches.

## Thank You for Contributing

We appreciate your taking the time to participate in the Hack Day and contribute to `wp-cli`. Have fun, and we look forward to seeing you on [Slack](https://wordpress.slack.com/messages/C02RP4T41)!
