wp-cli/handbook
===============

These files comprise the WP-CLI handbook ([make.wordpress.org/cli/handbook](https://make.wordpress.org/cli/handbook/)) and WP-CLI commands directory ([developer.wordpress.org/cli/commands](https://developer.wordpress.org/cli/commands/)).

The documentation is located in GitHub to enable a pull request-based editing workflow.

Long-form documentation (e.g. "Commands cookbook") can be edited directly.

Internal API docs and command pages are generated dynamically from the WP-CLI codebase using the `wp handbook` series of commands.

Before running these commands the bash script `bin/install-packages.sh` should be run to install the latest versions of the non-bundled commands in `bin/packages`. Note `wp` must point to the target WP-CLI instance, i.e. the phar/git that contains the docblocks to be generated against, and should be run with `WP_CLI_PACKAGES_DIR=bin/packages` and `WP_CLI_CONFIG_PATH=/dev/null`.

So for instance to generate all dynamically created documentation against the nightly phar run:

```
wp cli update --nightly
bin/install_packages.sh
WP_CLI_PACKAGES_DIR=bin/packages WP_CLI_CONFIG_PATH=/dev/null wp handbook gen-all
```

## Automated Handbook Generation

The handbook can be regenerated automatically using the "Regenerate Handbook" GitHub Actions workflow. This workflow can be triggered in two ways:

1. **Manual trigger**: Navigate to the Actions tab in the GitHub repository and run the "Regenerate Handbook" workflow manually.
2. **Automated trigger from wp-cli/wp-cli**: When a new version of WP-CLI is released, the main framework repository can trigger this workflow using a `repository_dispatch` event with type `regenerate-handbook`.

The workflow will:
- Install WP-CLI nightly build
- Install non-bundled packages
- Run `wp handbook gen-all`
- Commit and push any changes to the repository

## Documentation Import

All documentation is imported automatically into WordPress.org in a two step process:

1. WordPress reads `commands-manifest.json` or `handbook-manifest.json` to understand all pages that need to be created.
2. Each WordPress page has a `markdown_source` attribute specifying a Markdown file to be fetched, converted to HTML, and saved in the database.

For make.wordpress.org/cli, the import process is a [WordPress plugin](https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/plugins/wporg-cli/inc/class-markdown-import.php) running a WP Cron job every 15 minutes. For developer.wordpress.org/cli, this is a [class in the devhub theme](https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/themes/pub/wporg-developer/inc/cli.php) running a WP Cron job every 12 hours.
