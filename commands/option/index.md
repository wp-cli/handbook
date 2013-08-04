---
layout: default
title: 'wp option'
---

`wp option` - Manage options.

### OPTIONS

--format=json
: Encode/decode values as JSON.

### EXAMPLES

    wp option get siteurl

    wp option add my_option foobar

    wp option update my_option '{&quot;foo&quot;: &quot;bar&quot;}' --format=json

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
			<td><a href="/commands/option/update/">update</a></td>
			<td>Update an option.</td>
		</tr>
	</tbody>
</table>
