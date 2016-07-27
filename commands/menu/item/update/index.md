---
layout: default
title: 'wp menu item update'
display_global_parameters: true
---

`wp menu item update` - Update a menu item.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu-item-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;db-id&gt;
: Database ID for the menu item.

[\--title=&lt;title&gt;]
: Set a custom title for the menu item.

[\--link=&lt;link&gt;]
: Set a custom url for the menu item.

[\--description=&lt;description&gt;]
: Set a custom description for the menu item.

[\--attr-title=&lt;attr-title&gt;]
: Set a custom title attribute for the menu item.

[\--target=&lt;target&gt;]
: Set a custom link target for the menu item.

[\--classes=&lt;classes&gt;]
: Set a custom link classes for the menu item.

[\--position=&lt;position&gt;]
: Specify the position of this menu item.

[\--parent-id=&lt;parent-id&gt;]
: Make this menu item a child of another menu item.

### EXAMPLES

    $ wp menu item update 45 --title=WordPress --link='http://wordpress.org' --target=_blank --position=2
    Success: Menu item updated.



