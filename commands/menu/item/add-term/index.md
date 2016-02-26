---
layout: default
title: 'wp menu item add-term'
display_global_parameters: true
---

`wp menu item add-term` - Add a taxonomy term as a menu item

<hr />

&lt;menu&gt;
: The name, slug, or term ID for the menu

&lt;taxonomy&gt;
: Taxonomy of the term to be added

&lt;term-id&gt;
: Term ID of the term to be added

[\--title=&lt;title&gt;]
: Set a custom title for the menu item

[\--link=&lt;link&gt;]
: Set a custom url for the menu item

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

    wp menu item add-term sidebar-menu post_tag 24



