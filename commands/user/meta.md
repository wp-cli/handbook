# wp user meta

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; meta</small>

`wp user meta` - Manage user custom fields.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-meta+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Add user meta
    $ wp user meta add 123 bio "Mary is an WordPress developer."
    Success: Added custom field.

    # List user meta
    $ wp user meta list 123 --keys=nickname,description,wp_capabilities
    +---------+-----------------+--------------------------------+
    | user_id | meta_key        | meta_value                     |
    +---------+-----------------+--------------------------------+
    | 123     | nickname        | supervisor                     |
    | 123     | description     | Mary is a WordPress developer. |
    | 123     | wp_capabilities | {"administrator":true}         |
    +---------+-----------------+--------------------------------+

    # Update user meta
    $ wp user meta update 123 bio "Mary is an awesome WordPress developer."
    Success: Updated custom field 'bio'.

    # Delete user meta
    $ wp user meta delete 123 bio
    Success: Deleted custom field.





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
			<td><a href="/commands/user/meta/add/">add</a></td>
			<td>Add a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/delete/">delete</a></td>
			<td>Delete a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/get/">get</a></td>
			<td>Get meta field value.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/list/">list</a></td>
			<td>List all metadata associated with a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/update/">update</a></td>
			<td>Update a meta field.</td>
		</tr>
	</tbody>
</table>
