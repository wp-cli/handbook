# Philosophy

WP-CLI is the command-line interface for WordPress. It provides commands for actions that can be performed in the WordPress admin (e.g. `wp theme activate` and `wp user create`), as well as commands for actions that don't have equivalent web UI (e.g. `wp cron event run`, `wp search-replace`, and `wp scaffold child-theme`).

WP-CLI's guiding principle is to be the fastest and canonical way to manage WordPress:

* Speed is inherently present in the simplicitly of the command-line interface, and the ability to chain multiple commands together into a more complex operation.
* When functionality ends up in WP-CLI, it should be good enough to become the defacto solution to the problem.
* "Managing WordPress" is the ever-evolving problem space in which we operate. WP-CLI should always focus on making *existing management patterns* more efficient.

This page contains a list of guidelines that should inform decisions related to scope, command organization and behaviour:

## Composability is always a good idea.

One of the most useful ideas in UNIX was that of [pipelines](http://en.wikipedia.org/wiki/Pipeline_%28Unix%29).

WP-CLI commands should be composable, i.e. the output from one command should be easily pipe-able to another command.

A corollary of this is that commands should be _orthogonal_, which means that there should be no overlapping functionality between commands. (`wp plugin install --activate` is an exception).

## Readability trumps number of keystrokes.

Most of the commands in WP-CLI will be used non-interactively, so make the parameter names self-documenting.

## Don't assume anything.

Bundled commands MUST work on any given WordPress install (provided that it's a new enough version), no matter how it's configured and no matter how much data it has.

As a corollary, bundled commands should not assume the presence of any plugin or theme.

## Stay focused.

Bundled commands should expose or make use of WordPress-specific functionality.

If a command provides useful functionality, but it doesn't have anything to do with WordPress, it doesn't belong in WP-CLI.
