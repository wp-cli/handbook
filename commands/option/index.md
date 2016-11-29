---
layout: default
title: 'wp option'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; option</small>

`wp option` - Manage options.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Get site URL.
    $ wp option get siteurl
    http://example.com

    # Add option.
    $ wp option add my_option foobar
    Success: Added 'my_option' option.

    # Update option.
    $ wp option update my_option '{"foo": "bar"}' --format=json
    Success: Updated 'my_option' option.

    # Delete option.
    $ wp option delete my_option
    Success: Deleted 'my_option' option.



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
			<td><a href="/commands/option/add/">add</a></td>
			<td>Add a new option value.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/delete/">delete</a></td>
			<td>Delete an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/get/">get</a></td>
			<td>Get the value for an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/list/">list</a></td>
			<td>List options and their values.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/update/">update</a></td>
			<td>Update an option value.</td>
		</tr>
	</tbody>
</table>
