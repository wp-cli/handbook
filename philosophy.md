This page contains a list of guidelines that should inform decisions related to scope, command organization and behaviour:

## Don't assume anything.

Bundled commands MUST work on any given WordPress install (provided that it's a new enough version), no matter how it's configured and no matter how much data it has.

As a corollary, bundled commands should not assume the presence of any plugin or theme.

## Composability is always a good idea.

One of the most useful ideas in UNIX was that of [pipelines](http://en.wikipedia.org/wiki/Pipeline_%28Unix%29).

WP-CLI commands should be composable, i.e. the output from one command should be easily pipe-able to another command.

A corollary of this is that commands should be _orthogonal_, which means that there should be no overlapping functionality between commands. (`wp plugin install --activate` is an exception).

## Readability trumps number of keystrokes.

Most of the commands in WP-CLI will be used non-interactively, so make the parameter names self-documenting.

## Stay focused.

Bundled commands should expose or make use of WordPress-specific functionality.

If a command provides useful functionality, but it doesn't have anything to do with WordPress, it doesn't belong in WP-CLI.
