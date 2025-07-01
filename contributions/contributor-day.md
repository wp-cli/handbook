# WordCamp Contributor Day

Welcome to WordCamp Contributor Day! We appreciate you sharing your time with WP-CLI.

We'd love to help you submit at least one pull request, so we put together this guide to make it as straightforward as possible. We're here to support you however we can.

When you submit your pull request, add `Related https://github.com/wp-cli/wp-cli/issues/5985` so we can see all pull requests created during the day. We'll give these some special promotion in the next release notes.

Your table leads for the day are: [schlessera](https://github.com/schlessera), [BrianHenryIE](https://github.com/BrianHenryIE)

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

- ["wp config create" generates wrong DB_PASSWORD in wp-config.php when db password has "](https://github.com/wp-cli/config-command/issues/180)
- [Import into specific directory/location](https://github.com/wp-cli/media-command/issues/146)
- [Add --exclude=<file>,<file> argument to skip files](https://github.com/wp-cli/checksum-command/issues/64)
- [Not possible to install translations for en_US](https://github.com/wp-cli/language-command/issues/84)
- [Support WP-Stash in 'wp cache type'](https://github.com/wp-cli/cache-command/issues/68)
- [Add reason for skipping regeneration](https://github.com/wp-cli/media-command/issues/95)
- [wp export is not exporting term meta data](https://github.com/wp-cli/export-command/issues/42)

**Seasoned contributors**

- [Add commands to export and import SQLite databases](https://github.com/wp-cli/ideas/issues/188)
- [SQLite Compatibility (multiple issues)](https://github.com/wp-cli/.github/issues/94)
- [Regenerating a single image size (re-)generates auto-scaled big images & auto-rotated images](https://github.com/wp-cli/media-command/issues/196)
- [wp cron event run --due-now doesn't respect doing_cron transient](https://github.com/wp-cli/cron-command/issues/27)
- [Update command doesn't escape php_binary path, update fails when path has spaces](https://github.com/wp-cli/wp-cli/issues/5815)
- [Associative argument contains double quotes if the command is called with WP_CLI::runcommand()](https://github.com/wp-cli/wp-cli/issues/5541)

You're obviously welcome to work on any other issue you'd like too! Contributor Day can be a good opportunity to discuss trickier issues and brainstorm approaches.
