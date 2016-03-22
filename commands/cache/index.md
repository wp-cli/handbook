---
layout: default
title: 'wp cache'
display_global_parameters: true
---

`wp cache` - Manage the object cache.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    wp cache set my_key my_value my_group 300

    wp cache get my_key my_group



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
			<td><a href="/commands/cache/add/">add</a></td>
			<td>Add a value to the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/decr/">decr</a></td>
			<td>Decrement a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/delete/">delete</a></td>
			<td>Remove a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/flush/">flush</a></td>
			<td>Flush the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/get/">get</a></td>
			<td>Get a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/incr/">incr</a></td>
			<td>Increment a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/replace/">replace</a></td>
			<td>Replace a value in the object cache, if the value already exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/set/">set</a></td>
			<td>Set a value to the object cache, regardless of whether it already exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/type/">type</a></td>
			<td>Attempts to determine which object cache is being used.</td>
		</tr>
	</tbody>
</table>
