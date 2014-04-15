---
layout: default
title: 'wp widget move'
---

`wp widget move` - Move a widget from one position on a sidebar to another.

&lt;widget-id&gt;
: Unique ID for the widget

[\--position=&lt;position&gt;]
: Assign the widget to a new position.

[\--sidebar-id=&lt;sidebar-id&gt;]
: Assign the widget to a new sidebar

### EXAMPLES

    wp widget move recent-comments-2 --position=2

    wp widget move recent-comments-2 --sidebar-id=wp_inactive_widgets

