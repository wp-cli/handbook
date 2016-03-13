---
layout: doc
title: Implementation details
description: Catalog of historical design decisions.
category: Contributing
---

This page contains some history on various implementation details of WP-CLI.

### Command Help Text

The `wp help <command>` has been through several incarnations.

Since WP-CLI 0.3, it invoked a static `help()` method in the command class, if it existed. ([48a8887d](https://github.com/wp-cli/wp-cli/commit/48a8887d46be25e0c0ad326975729ec816c17331))

Since WP-CLI 0.6, it looked for a `<command>.1` ROFF file and displayed it using `man`. The ROFF file was compiled from a corresponding `<command>.txt` markdown file and from PHPDoc metadata. ([#24](https://github.com/wp-cli/wp-cli/issues/24)).

Since WP-CLI 0.11, it generates the help text on the fly. ([#548](https://github.com/wp-cli/wp-cli/pull/548))

### WP_ADMIN

Most WP-CLI commands perform administrative actions and they need access to code defined in `wp-admin/includes`. This code can be loaded on-demand or preemptively.

The question is: should the `WP_ADMIN` constant be set to `true` or `false`?

Initially, WP-CLI just loaded the wp-admin code and didn't mess with the WP_ADMIN constant at all.

Then, it sort of pretended it was doing a front-end page load, for doing integration testing ([#69](https://github.com/wp-cli/wp-cli/issues/69)). <sup><a href="#note-1">[1]</a></sup>

Then it pretended it was loading wp-admin, to side-step caching plugins ([#164](https://github.com/wp-cli/wp-cli/issues/164)).

Then it stopped pretending it was loading wp-admin ([#352](https://github.com/wp-cli/wp-cli/issues/352)), because we found a better way to side-step caching plugins. <sup><a href="#note-2">[2]</a></sup>

----

* <sup><a name="note-1">[1]</a></sup>: It turned out that the official WordPress testing suite had a better solution: the `go_to()` method.
* <sup><a name="note-2">[2]</a></sup>: The solution was rolling our own `wp-settings.php` file.

