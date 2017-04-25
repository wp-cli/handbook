# wp term

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aterm+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage terms.

### EXAMPLES

    # Create a new term.
    $ wp term create category Apple --description="A type of fruit"
    Success: Created category 199.

    # Get details about a term.
    $ wp term get category 199 --format=json --fields=term_id,name,slug,count
    {"term_id":199,"name":"Apple","slug":"apple","count":1}

    # Update an existing term.
    $ wp term update category 15 --name=Apple
    Success: Term updated.

    # Get the term's URL.
    $ wp term list post_tag --include=123 --field=url
    http://example.com/tag/tips-and-tricks

    # Delete post category
    $ wp term delete category 15
    Success: Deleted category 15.

    # Recount posts assigned to each categories and tags
    $ wp term recount category post_tag
    Success: Updated category term count
    Success: Updated post_tag term count



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
			<td><a href="https://developer.wordpress.org/cli/commands/term/create/">create</a></td>
			<td>Create a new term.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/delete/">delete</a></td>
			<td>Delete an existing term.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/generate/">generate</a></td>
			<td>Generate some terms.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/get/">get</a></td>
			<td>Get details about a term.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/list/">list</a></td>
			<td>List terms in a taxonomy.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/meta/">meta</a></td>
			<td>Manage term custom fields.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/recount/">recount</a></td>
			<td>Recalculate number of posts assigned to each term.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/term/update/">update</a></td>
			<td>Update an existing term.</td>
		</tr>
	</tbody>
</table>
