---
layout: default
title: 'wp db'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; db</small>

`wp db` - Perform basic database operations.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Create database
    $ wp db create
    Success: Database created.

    # Drop database
    $ wp db drop --yes
    Success: Database dropped.

    # Reset database
    $ wp db reset --yes
    Success: Database reset.

    # Execute a query stored in a file
    $ wp db query < debug.sql



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
			<td><a href="/commands/db/check/">check</a></td>
			<td>Check the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/cli/">cli</a></td>
			<td>Open a MySQL console using credentials from wp-config.php</td>
		</tr>
		<tr>
			<td><a href="/commands/db/create/">create</a></td>
			<td>Create the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/drop/">drop</a></td>
			<td>Delete the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/export/">export</a></td>
			<td>Exports the MySQL database to a file or to STDOUT.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/import/">import</a></td>
			<td>Import a MySQL database from a file or from STDIN.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/optimize/">optimize</a></td>
			<td>Optimize the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/query/">query</a></td>
			<td>Execute a MySQL query against the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/repair/">repair</a></td>
			<td>Repair the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/reset/">reset</a></td>
			<td>Remove all tables from the database in MySQL.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/tables/">tables</a></td>
			<td>List the MySQL database tables.</td>
		</tr>
	</tbody>
</table>
