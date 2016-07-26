---
layout: default
title: 'wp menu'
display_global_parameters: true
---

`wp menu` - List, create, assign, and delete menus.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Create a new menu
    $ wp menu create "My Menu"
    Success: Created menu 200.

    # List existing menus
    $ wp menu list
    +---------+----------+----------+-----------+-------+
    | term_id | name     | slug     | locations | count |
    +---------+----------+----------+-----------+-------+
    | 200     | My Menu  | my-menu  |           | 0     |
    | 177     | Top Menu | top-menu | primary   | 7     |
    +---------+----------+----------+-----------+-------+

    # Create a new menu link item
    $ wp menu item add-custom my-menu Apple http://apple.com --porcelain
    1922

    # Assign the 'my-menu' menu to the 'primary' location
    $ wp menu location assign my-menu primary
    Success: Assigned location to menu.



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
			<td>Create a new menu.</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/delete/">delete</a></td>
			<td>Delete one or more menus.</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/item/">item</a></td>
			<td>List, add, and delete items associated with a menu.</td>
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
