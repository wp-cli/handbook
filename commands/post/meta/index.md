---
layout: default
title: 'wp post meta'
display_global_parameters: true
---

`wp post meta` - Manage post custom fields.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-meta+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Set post meta
    $ wp post meta set 123 _wp_page_template about.php
    Success: Updated custom field '_wp_page_template'.

    # Get post meta
    $ wp post meta get 123 _wp_page_template
    about.php

    # Update post meta
    $ wp post meta update 123 _wp_page_template contact.php
    Success: Updated custom field '_wp_page_template'.

    # Delete post meta
    $ wp post meta delete 123 _wp_page_template
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
			<td><a href="/commands/post/meta/add/">add</a></td>
			<td>Add a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/delete/">delete</a></td>
			<td>Delete a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/get/">get</a></td>
			<td>Get meta field value.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/list/">list</a></td>
			<td>List all metadata associated with an object.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/update/">update</a></td>
			<td>Update a meta field.</td>
		</tr>
	</tbody>
</table>
