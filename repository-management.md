# Repository Management

## Package Names

Package names for the official `wp-cli` GitHub repository need to be discussed upfront with the [maintainers](https://github.com/orgs/wp-cli/teams/maintainers).

Package names for WP-CLI commands must end with the `-command` suffix.

_Example: `wp-cli/scaffold-package-command`._

## Package Versions

Package version follow the [Semantic Versioning Specification (SemVer)](http://semver.org/).

## Milestones

Open milestones usually point to the next version to be released.

As the release notes are built using the milestones, pull requests that are to be merged need to be set to the upcoming milestone, so that these pull requests will be part of the release notes.

## Labels

Labels are an important organizational tool to communicate the state and progress of the work being done. [Committers](https://github.com/orgs/wp-cli/teams/committers) are required to keep these up-to-date.

### Groups Of Labels

Labels can be part of a label group, a concept that is applicable to all packages. The actual labels that are available can depend on the actual package, but the groups always have the same semantic role.

#### Command

The labels that define what exact command a given issue/pull request applies to are prefixed with `command:`

_Example: `command:cli-update`_

#### Scope

The labels that define what scope the current issue/pull request applies to are prefixed with `scope:`.

Used scopes:

* `bootstrap` - Part of the bootstrap process, which loads both WP-CLI as well as WordPress Core.
* `command` - Part of an individual command.
* `distribution` - Part of the distribution process, where the Phar is being built and releases are produced.
* `documentation` - Part of the handbook, command reference or inline help.
* `framework` - Part of the WP-CLI framework itself, which provides the architecture, API and helper functions to make commands possible.
* `testing` - Part of the unit or functional tests.
* `website` - Part of the website infrastructure on `wp-cli.org` or `make.wordpress.org`.

_Example: `scope:documentation`_

#### State

The labels that defined what state a given issue/pull request is in are prefixed with `state:`.

Used states:

* `unconfirmed` - The bug/problem in the issue could not be replicated yet or might be related to the reporter's environment.
* `unsupported` - The issue is outside of the scope of a bug report and cannot be supported on GitHub. The reporter should be pointed towards one of the [support channels](http://wp-cli.org/#support). 

_Example: `state:unconfirmed`_

### Required Labels

Some labels have a special meaning and/or might be used for automated workflows down the road. These are required across all official packages.

#### Bug

The `bug` label denotes an issue that is a confirmed bug where the code does not produce the expected result.

#### Good First Issue

The `good-first-issue` label denotes an issue that is a good entry point for new contributors wanting to get their feet wet.

Good first issues are small in scope and don't require extensive technical expertise or historical project knowledge to get started.

## Pull Requests

## Releases
