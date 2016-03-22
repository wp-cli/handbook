---
layout: default
title: 'wp transient'
display_global_parameters: true
---

`wp transient` - Manage transients.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atransient+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    wp transient set my_key my_value 300



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
			<td><a href="/commands/transient/delete/">delete</a></td>
			<td>Delete a transient value.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/delete-all/">delete-all</a></td>
			<td>Delete all transients.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/delete-expired/">delete-expired</a></td>
			<td>Delete all expired transients.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/get/">get</a></td>
			<td>Get a transient value.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/set/">set</a></td>
			<td>Set a transient value. &lt;expiration&gt; is the time until expiration, in seconds.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/type/">type</a></td>
			<td>See whether the transients API is using an object cache or the options table.</td>
		</tr>
	</tbody>
</table>
