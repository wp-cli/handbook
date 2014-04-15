---
layout: default
title: 'wp widget'
---

`wp widget` - Manage sidebar widgets.

### EXAMPLES

    # List widgets on a given sidebar
    wp widget list sidebar-1

    # Add a calendar widget to the second position on the sidebar
    wp widget add calendar sidebar-1 2

    # Update option(s) associated with a given widget
    wp widget update calendar-1 --title=&quot;Calendar&quot;

    # Delete one or more widgets entirely
    wp widget delete calendar-2 archive-1

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
			<td><a href="/commands/widget/add/">add</a></td>
			<td>Add a widget to a sidebar.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/deactivate/">deactivate</a></td>
			<td>Deactivate one or more widgets from an active sidebar.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/delete/">delete</a></td>
			<td>Delete one or more widgets from a sidebar.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/list/">list</a></td>
			<td>List widgets associated with a sidebar.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/move/">move</a></td>
			<td>Move a widget from one position on a sidebar to another.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/update/">update</a></td>
			<td>Update a given widget's options.</td>
		</tr>
	</tbody>
</table>
