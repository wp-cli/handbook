---
layout: default
title: 'wp widget move'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [widget](/commands/widget/) &raquo; move</small>

`wp widget move` - Move the position of a widget.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Awidget-move+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Changes the order of a widget in its existing sidebar, or moves it to a
new sidebar.

### OPTIONS

&lt;widget-id&gt;
: Unique ID for the widget

[\--position=&lt;position&gt;]
: Assign the widget to a new position.

[\--sidebar-id=&lt;sidebar-id&gt;]
: Assign the widget to a new sidebar

### EXAMPLES

    # Change position of widget
    $ wp widget move recent-comments-2 --position=2
    Success: Widget moved.

    # Move widget to Inactive Widgets
    $ wp widget move recent-comments-2 --sidebar-id=wp_inactive_widgets
    Success: Widget moved.



