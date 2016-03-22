---
layout: default
title: 'wp menu location'
display_global_parameters: true
---

`wp menu location` - Manage a menu's assignment to locations.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu-location+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List available menu locations
    wp menu location list

    # Assign the 'primary-menu' menu to the 'primary' location
    wp menu location assign primary-menu primary

    # Remove the 'primary-menu' menu from the 'primary' location
    wp menu location remove primary-menu primary





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
			<td><a href="/commands/menu/location/assign/">assign</a></td>
			<td>Assign a location to a menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/location/list/">list</a></td>
			<td>List locations for the current theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/location/remove/">remove</a></td>
			<td>Remove a location from a menu</td>
		</tr>
	</tbody>
</table>
