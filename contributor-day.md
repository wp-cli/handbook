# WordCamp Contributor Day

Welcome to WCUS Contributor Day! We appreciate you sharing your time with WP-CLI.

We'd love to help you submit at least one pull request, so we put together this guide to make it as straightforward as possible. We're here to support you however we can.

When you submit your pull request, add `Related https://github.com/wp-cli/wp-cli/issues/5832` so we can see all pull requests created during the day. We'll give these some special promotion in the next release notes.

Your table leads for the day are: [schlessera](https://github.com/schlessera), [danielbachhuber](https://github.com/danielbachhuber)

A few seasoned WP-CLI contributors are also helping out: TBD

## Getting Started

If you normally use WP-CLI on your web host or via Brew, you're most likely using the Phar executable. The Phar executable is the "built", single-file version of WP-CLI. It's compiled from a couple dozen repositories in the WP-CLI GitHub organization, so modifying WP-CLI requires working amongst those repositories.

Before you can work on WP-CLI, you'll need to first make sure you have PHP and a functioning MySQL or MariaDB server. Once those prerequisites are met, install the [`wp-cli-dev` development environment](https://github.com/wp-cli/wp-cli-dev) to start contributing:

```
git clone https://github.com/wp-cli/wp-cli-dev
cd wp-cli-dev
composer install
```

The `wp-cli-dev` installation process clones all of WP-CLI's repositories to your local machine. After it's complete, you'll be able to make changes in whichever repository you'd like. However, you'll need to fork the repository and add it as a remote in order to push your feature branch.

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
