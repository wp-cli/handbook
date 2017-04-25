# wp sidebar

<small>[Commands](/commands/) &raquo; sidebar</small>

`wp sidebar` - Manage sidebars.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asidebar+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List sidebars
    $ wp sidebar list --fields=name,id --format=csv
    name,id
    "Widget Area",sidebar-1
    "Inactive Widgets",wp_inactive_widgets



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
			<td><a href="/commands/sidebar/list/">list</a></td>
			<td>List registered sidebars.</td>
		</tr>
	</tbody>
</table>
