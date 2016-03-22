---
layout: default
title: 'wp widget add'
display_global_parameters: true
---

`wp widget add` - Add a widget to a sidebar.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Awidget-add+sort%3Aupdated-desc">Github issues</a></small>

<hr />

&lt;name&gt;
: Widget name.

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[&lt;position&gt;]
: Widget's current position within the sidebar. Defaults to last

[\--&lt;field&gt;=&lt;value&gt;]
: Widget option to add, with its new value

### EXAMPLES

    wp widget add calendar sidebar-1 2 --title="Calendar"



