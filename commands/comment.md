# wp comment

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment+sort%3Aupdated-desc">Github issues</a></small>

Manage comments.

### EXAMPLES

    # Create a new comment.
    $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
    Success: Created comment 932.

    # Update an existing comment.
    $ wp comment update 123 --comment_author='That Guy'
    Success: Updated comment 123.

    # Delete an existing comment.
    $ wp comment delete 1337 --force
    Success: Deleted comment 1337.

    # Delete all spam comments.
    $ wp comment delete $(wp comment list --status=spam --format=ids)
    Success: Deleted comment 264.
    Success: Deleted comment 262.



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
			<td><a href="https://developer.wordpress.org/cli/commands/comment/approve/">approve</a></td>
			<td>Approve a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/count/">count</a></td>
			<td>Count comments, on whole blog or on a given post.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/create/">create</a></td>
			<td>Create a new comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/delete/">delete</a></td>
			<td>Delete a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/exists/">exists</a></td>
			<td>Verify whether a comment exists.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/generate/">generate</a></td>
			<td>Generate some number of new dummy comments.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/get/">get</a></td>
			<td>Get data of a single comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/list/">list</a></td>
			<td>Get a list of comments.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/meta/">meta</a></td>
			<td>Manage comment custom fields.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/recount/">recount</a></td>
			<td>Recalculate the comment_count value for one or more posts.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/spam/">spam</a></td>
			<td>Mark a comment as spam.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/status/">status</a></td>
			<td>Get status of a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/trash/">trash</a></td>
			<td>Trash a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/unapprove/">unapprove</a></td>
			<td>Unapprove a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/unspam/">unspam</a></td>
			<td>Unmark a comment as spam.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/untrash/">untrash</a></td>
			<td>Untrash a comment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/comment/update/">update</a></td>
			<td>Update one or more comments.</td>
		</tr>
	</tbody>
</table>
