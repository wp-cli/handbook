---
layout: default
title: 'wp term'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; term</small>

`wp term` - Manage terms.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Create term
    $ wp term create category Apple --description="A type of fruit"
    Success: Created category 199.

    # Get term
    $ wp term get category 199 --format=json --fields=term_id,name,slug,count
    {"term_id":199,"name":"Apple","slug":"apple","count":1}

    # Update term
    $ wp term update category 15 --name=Apple
    Success: Term updated.

    # Get term url
    $ wp term url post_tag 123
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
			<td><a href="/commands/term/create/">create</a></td>
			<td>Create a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/delete/">delete</a></td>
			<td>Delete a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/generate/">generate</a></td>
			<td>Generate some terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/get/">get</a></td>
			<td>Get a taxonomy term</td>
		</tr>
		<tr>
			<td><a href="/commands/term/list/">list</a></td>
			<td>List terms in a taxonomy.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/meta/">meta</a></td>
			<td>Manage term custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/recount/">recount</a></td>
			<td>Recalculate number of posts assigned to each term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/update/">update</a></td>
			<td>Update a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/url/">url</a></td>
			<td>Get term url</td>
		</tr>
	</tbody>
</table>
