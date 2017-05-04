# wp widget move

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Awidget-move+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Move the position of a widget.

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


