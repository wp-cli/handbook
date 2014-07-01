---
layout: default
title: 'wp menu'
---

`wp menu` - List, create, assign, and delete menus

### EXAMPLES

    # Create a new menu
    wp menu create "My Menu"

    # List existing menus
    wp menu list

    # Create a new menu link item
    wp menu item add-custom sidebar-menu Apple http://apple.com --porcelain

    # Assign the 'primary-menu' menu to the 'primary' location
    wp menu location assign primary-menu primary

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
