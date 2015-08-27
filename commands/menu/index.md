---
layout: default
title: 'wp menu'
---

`wp menu` - List, create, assign, and delete menus

<hr />

### EXAMPLES

    # Create a new menu
    wp menu create "My Menu"

    # List existing menus
    wp menu list

    # Create a new menu link item
    wp menu item add-custom sidebar-menu Apple http://apple.com --porcelain

    # Assign the 'primary-menu' menu to the 'primary' location
    wp menu location assign primary-menu primary

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



### SUBCOMMANDS

<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="/commands/menu/create/">create</a></td>
			<td>Create a new menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/delete/">delete</a></td>
			<td>Delete one or more menus</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/">item</a></td>
			<td>List, add, and delete items associated with a menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/list/">list</a></td>
			<td>Get a list of menus.</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/location/">location</a></td>
			<td>Manage a menu's assignment to locations.</td>
		</tr>
	</tbody>
</table>
