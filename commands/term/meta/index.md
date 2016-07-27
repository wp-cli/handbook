---
layout: default
title: 'wp term meta'
display_global_parameters: true
---

`wp term meta` - Manage term custom fields.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-meta+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Set term meta
    $ wp term meta set 123 bio "Mary is a WordPress developer."
    Success: Updated custom field 'bio'.

    # Get term meta
    $ wp term meta get 123 bio
    Mary is a WordPress developer.

    # Update term meta
    $ wp term meta update 123 bio "Mary is an awesome WordPress developer."
    Success: Updated custom field 'bio'.

    # Delete term meta
    $ wp term meta delete 123 bio
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
			<td><a href="/commands/term/meta/add/">add</a></td>
			<td>Add a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/meta/delete/">delete</a></td>
			<td>Delete a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/meta/get/">get</a></td>
			<td>Get meta field value.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/meta/list/">list</a></td>
			<td>List all metadata associated with an object.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/meta/update/">update</a></td>
			<td>Update a meta field.</td>
		</tr>
	</tbody>
</table>
