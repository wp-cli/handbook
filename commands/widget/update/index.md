---
layout: default
title: 'wp widget update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [widget](/commands/widget/) &raquo; update</small>

`wp widget update` - Update options for an existing widget.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Awidget-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;widget-id&gt;
: Unique ID for the widget

[\--&lt;field&gt;=&lt;value&gt;]
: Field to update, with its new value

### EXAMPLES

    # Change calendar-1 widget title to "Our Calendar"
    $ wp widget update calendar-1 --title="Our Calendar"
    Success: Widget updated.



