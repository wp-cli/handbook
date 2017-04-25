# wp menu item

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Amenu-item+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List, add, and delete items associated with a menu.

### EXAMPLES

    # Add an existing post to an existing menu
    $ wp menu item add-post sidebar-menu 33 --title="Custom Test Post"
    Success: Menu item added.

    # Create a new menu link item
    $ wp menu item add-custom sidebar-menu Apple http://apple.com
    Success: Menu item added.

    # Delete menu item
    $ wp menu item delete 45
    Success: 1 menu item deleted.





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
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/add-custom/">add-custom</a></td>
			<td>Add a custom menu item.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/add-post/">add-post</a></td>
			<td>Add a post as a menu item.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/add-term/">add-term</a></td>
			<td>Add a taxonomy term as a menu item.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/delete/">delete</a></td>
			<td>Delete one or more items from a menu.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/list/">list</a></td>
			<td>Get a list of items associated with a menu.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/menu/item/update/">update</a></td>
			<td>Update a menu item.</td>
		</tr>
	</tbody>
</table>
