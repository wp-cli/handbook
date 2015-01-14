---
layout: default
title: 'wp menu item update'
---

`wp menu item update` - Update a menu item

&lt;db-id&gt;
: Database ID for the menu item.

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

### EXAMPLES

    wp menu item update 45 --title=WordPress --link='http://wordpress.org' --target=_blank --position=2

### GLOBAL PARAMETERS

  --path=&lt;path&gt;
      Path to the WordPress files

  --url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  --user=&lt;id|login|email&gt;
      Set the WordPress user

  --skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  --skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  --require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  --[no-]color
      Whether to colorize the output

  --debug
      Show all PHP errors

  --prompt
      Prompt the user to enter values for all command arguments

  --quiet
      Suppress informational messages



