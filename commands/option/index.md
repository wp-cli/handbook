---
layout: default
title: 'wp option'
display_global_parameters: true
---

`wp option` - Manage options.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--format=json]
: Encode/decode values as JSON.

### EXAMPLES

    wp option get siteurl

    wp option add my_option foobar

    wp option update my_option '{"foo": "bar"}' --format=json

    wp option delete my_option



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
			<td>Add an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/delete/">delete</a></td>
			<td>Delete an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/get/">get</a></td>
			<td>Get an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/list/">list</a></td>
			<td>List options.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/update/">update</a></td>
			<td>Update an option.</td>
		</tr>
	</tbody>
</table>
