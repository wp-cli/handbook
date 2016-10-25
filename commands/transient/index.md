---
layout: default
title: 'wp transient'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; transient</small>

`wp transient` - Manage transients.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atransient+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Set transient.
    $ wp transient set sample_key "test data" 3600
    Success: Transient added.

    # Get transient.
    $ wp transient get sample_key
    test data

    # Delete transient.
    $ wp transient delete sample_key
    Success: Transient deleted.

    # Delete expired transients.
    $ wp transient delete --expired
    Success: 12 expired transients deleted from the database.

    # Delete all transients.
    $ wp transient delete --all
    Success: 14 transients deleted from the database.



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
