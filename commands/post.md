# wp post

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost+sort%3Aupdated-desc">Github issues</a></small>

Manage posts.

### EXAMPLES

    # Create a new post.
    $ wp post create --post_type=post --post_title='A sample post'
    Success: Created post 123.

    # Update an existing post.
    $ wp post update 123 --post_status=draft
    Success: Updated post 123.

    # Delete an existing post.
    $ wp post delete 123
    Success: Trashed post 123.



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
			<td><a href="/commands/post/create/">create</a></td>
			<td>Create a new post.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/delete/">delete</a></td>
			<td>Delete an existing post.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/edit/">edit</a></td>
			<td>Launch system editor to edit post content.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/generate/">generate</a></td>
			<td>Generate some posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/get/">get</a></td>
			<td>Get details about a post.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/list/">list</a></td>
			<td>Get a list of posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/">meta</a></td>
			<td>Manage post custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/term/">term</a></td>
			<td>Manage post terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/update/">update</a></td>
			<td>Update one or more existing posts.</td>
		</tr>
	</tbody>
</table>
