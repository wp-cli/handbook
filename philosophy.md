# Philosophy

WP-CLI is the command-line interface for WordPress. It provides commands for actions that can be performed in the WordPress backend (e.g. `wp theme activate` and `wp user create`), as well as commands for actions that don't have an equivalent web UI (e.g. `wp cron event run`, `wp search-replace`, and `wp scaffold child-theme`).

WP-CLI's guiding principle is to be the fastest and canonical way to manage WordPress:

* Speed is inherently present in the simplicity of the command-line interface, and the ability to chain multiple commands together into a more complex operation.
* When functionality ends up in WP-CLI, it should be good enough to become the defacto solution to the problem.
* "Managing WordPress" is the ever-evolving problem space in which we operate. WP-CLI should always focus on making *existing management patterns* more efficient.

This page contains a list of guidelines that should inform decisions related to scope, command organization and behavior:

## Good commands are simple, interact with WordPress, and solve one unique problem.

When a command implements existing WordPress functionality (e.g. `wp export`), it should mirror and re-use existing WordPress behavior as much as possible. Doing so ensures it meets the user's assumed expectations of behavior.

When a command adds functionality not present in the WordPress admin (e.g. `wp search-replace`), it should solve one unique problem and interact with WordPress in some way. Good commands are born of true user need; for a new proposed WP-CLI command, there probably should be existing prior art in the ecosystem.

If a command provides useful functionality, but it doesn't have anything to do with WordPress, it doesn't belong in WP-CLI. Similarly, an idea for a command is sometimes better implemented as a change to documentation instead.

## Consistency makes for an enjoyable user experience.

Whenever possible, commands should emulate one another with consistent usage behavior, argument names, and documentation.

## Decisions, not options.

WordPress philosophy [states](https://wordpress.org/about/philosophy/):

> [The end user is considered first when making implementation decisions]. A great example of this consideration is software options. Every time you give a user an option, you are asking them to make a decision. When a user doesn’t care or understand the option this ultimately leads to frustration. As developers we sometimes feel that providing options for everything is a good thing, you can never have too many choices, right? Ultimately these choices end up being technical ones, choices that the average end user has no interest in. It’s our duty as developers to make smart design decisions and avoid putting the weight of technical choices on our end users.

The same principle applies to WP-CLI. In every case, we should first try to improve the default behavior. Options should be added sparingly, only when a solution is required and no other solutions are available.

As a rule of thumb, once a command has a half-dozen options or more, it becomes difficult to understand how the command will operate under each condition.

## Composability is always a good idea.

One of the most useful ideas in UNIX was that of [pipelines](http://en.wikipedia.org/wiki/Pipeline_%28Unix%29).

WP-CLI commands should be composable, i.e. the output from one command should be easily pipe-able to another command.

A corollary of this is that commands should be _orthogonal_, which means that there should be no overlapping functionality between commands. (`wp plugin install --activate` is an exception).

## Readability trumps number of keystrokes.

Most of the commands in WP-CLI will be used non-interactively, so make the parameter names self-documenting.

## Don't assume anything.

Bundled commands MUST work on any given WordPress install (provided that it's a new enough version), no matter how it's configured and no matter how much data it has.

As a corollary, bundled commands should not assume the presence of any plugin or theme.

