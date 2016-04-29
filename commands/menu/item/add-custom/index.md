---
layout: default
title: 'wp menu item add-custom'
display_global_parameters: true
---

`wp menu item add-custom` - Add a custom menu item

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu-item-add-custom+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu

&lt;title&gt;
: Title for the link

&lt;link&gt;
: Target URL for the link

[\--description=&lt;description&gt;]
: Set a custom description for the menu item

[\--attr-title=&lt;attr-title&gt;]
: Set a custom title attribute for the menu item

[\--target=&lt;target&gt;]
: Set a custom link target for the menu item

[\--classes=&lt;classes&gt;]
: Set a custom link classes for the menu item

[\--position=&lt;position&gt;]
: Specify the position of this menu item.

[\--parent-id=&lt;parent-id&gt;]
: Make this menu item a child of another menu item

[\--porcelain]
: Output just the new menu item id.

### EXAMPLES

    wp menu item add-custom sidebar-menu Apple http://apple.com --porcelain



