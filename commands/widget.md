# wp widget

<small>[Commands](/commands/) &raquo; widget</small>

`wp widget` - Manage sidebar widgets.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Awidget+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List widgets on a given sidebar
    $ wp widget list sidebar-1
    +----------+------------+----------+----------------------+
    | name     | id         | position | options              |
    +----------+------------+----------+----------------------+
    | meta     | meta-6     | 1        | {"title":"Meta"}     |
    | calendar | calendar-2 | 2        | {"title":"Calendar"} |
    +----------+------------+----------+----------------------+

    # Add a calendar widget to the second position on the sidebar
    $ wp widget add calendar sidebar-1 2
    Success: Added widget to sidebar.

    # Update option(s) associated with a given widget
    $ wp widget update calendar-1 --title="Calendar"
    Success: Widget updated.

    # Delete one or more widgets entirely
    $ wp widget delete calendar-2 archive-1
    Success: 2 widgets removed from sidebar.



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
			<td>Move the position of a widget.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/reset/">reset</a></td>
			<td>Reset sidebar.</td>
		</tr>
		<tr>
			<td><a href="/commands/widget/update/">update</a></td>
			<td>Update options for an existing widget.</td>
		</tr>
	</tbody>
</table>
