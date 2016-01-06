---
layout: default
title: 'wp menu item'
---

`wp menu item` - List, add, and delete items associated with a menu

<hr />

### EXAMPLES

    # Add an existing post to an existing menu
    wp menu item add-post sidebar-menu 33 --title="Custom Test Post"

    # Create a new menu link item
    wp menu item add-custom sidebar-menu Apple http://apple.com --porcelain

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



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
			<td><a href="/commands/menu/item/add-custom/">add-custom</a></td>
			<td>Add a custom menu item</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/add-post/">add-post</a></td>
			<td>Add a post as a menu item</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/add-term/">add-term</a></td>
			<td>Add a taxonomy term as a menu item</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/delete/">delete</a></td>
			<td>Delete one or more items from a menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/list/">list</a></td>
			<td>Get a list of items associated with a menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/update/">update</a></td>
			<td>Update a menu item</td>
		</tr>
	</tbody>
</table>
