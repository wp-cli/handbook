# WP-CLI Hack Day

Welcome to WP-CLI Hack Day! We appreciate you taking time to contribute to the project.

We'd love to help you submit at least one pull request today. Given this goal, you'll likely want to _start with something small and attainable_. After you've submitted your first pull request for the day, you're welcome to work on something more ambitious.

When do you submit a pull request during Hack Day, please add `Related https://github.com/wp-cli/wp-cli/issues/5859` so we can easily keep track of them. We'll include them in a recap post at the end of the day.

We put together this guide to make contributing as straightforward as possible. Please also join the [#cli channel in WordPress.org Slack](https://wordpress.slack.com/messages/C02RP4T41) ([sign up instructions](https://make.wordpress.org/chat/)) to chat with other contributors, for questions, etc.

Your leads for the day are: [schlessera](https://github.com/schlessera), [danielbachhuber](https://github.com/danielbachhuber), [swissspidy]

A few seasoned WP-CLI contributors are also helping out: TBD

## Getting Started

If you normally use WP-CLI on your web host or via Brew, you're most likely using the Phar executable (`wp-cli.phar`). This Phar executable file is the "built", singular version of WP-CLI, and is compiled from a couple dozen repositories in the WP-CLI GitHub organization.

In order to make code changes to WP-CLI, you'll need to set up the `wp-cli-dev` development environment on your local machine.

First, clone the GitHub repository:

```bash
git clone https://github.com/wp-cli/wp-cli-dev wp-cli-dev
```

Before you can proceed further, you'll need to make sure you have [Composer](https://getcomposer.org/), PHP, and a functioning MySQL or MariaDB server on your local machine too.

Once those prequisites are met, finish the installation process:

```bash
cd wp-cli-dev
composer install
composer prepare-tests
```

The `wp-cli-dev` installation process clones all of WP-CLI's repositories to your local machine. After the installation process is complete, you can make changes in whichever repository you like. You'll need to fork the repository in order to push your feature branch, however. [GitHub's CLI](https://github.com/cli/cli) is pretty helpful for this:

```bash
cd core-command
gh repo fork
```

All WP-CLI pull requests are expected to have tests. See [running and writing tests](https://make.wordpress.org/cli/handbook/contributions/pull-requests/#running-and-writing-tests) for a complete introduction.

## Suggested Tickets

To help you be successful during Contributor Day, we curated a list of reasonably approachable and actionable issues. Feel free to comment directly on the issue if you plan to work on it. We don't usually assign issues, so no need to worry about that.

**New contributors**

- [Optional field for plugin author](https://github.com/wp-cli/extension-command/issues/368)
- [Add --all flag to uninstall commands](https://github.com/wp-cli/language-command/issues/122)
- [wp plugin update does not respect minimum PHP requirements](https://github.com/wp-cli/extension-command/issues/357)
- [WP-CLI overrides default WP password when no password is set](https://github.com/wp-cli/core-command/issues/183)
- [Add support for site archive and site deactivate by slug](https://github.com/wp-cli/entity-command/issues/257)

**Seasoned contributors**

- [Run the test suite with SQLite](https://github.com/wp-cli/wp-cli/issues/5831)
- [Set WP_CLI_PACKAGES_DIR in config file](https://github.com/wp-cli/wp-cli/issues/5645)
- [Improve speed of import when uploads are available locally](https://github.com/wp-cli/import-command/issues/83)
- [Introduce a dedicated search-replace url command](https://github.com/wp-cli/search-replace-command/issues/186)
- [Path errors when running wp dist-archive on Windows](https://github.com/wp-cli/dist-archive-command/issues/76)
- [Prompt if archive file already exists, instead of overwriting automatically](https://github.com/wp-cli/dist-archive-command/issues/70)

You're obviously welcome to work on any other issue you'd like too! Contributor Day can be a good opportunity to discuss trickier issues and brainstorm approaches.
