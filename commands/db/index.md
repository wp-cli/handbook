---
layout: default
title: 'wp db'
---

`wp db` - Perform basic database operations.

### OPTIONS

--yes
: Answer yes to the confirmation message.

&lt;file&gt;
: The name of the export file. If omitted, it will be '{dbname}.sql'

&lt;SQL&gt;
: A SQL query.

### EXAMPLES

    # execute a query stored in a file
    wp db query &lt; debug.sql

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
			<td><a href="/commands/db/cli/">cli</a></td>
			<td>Open a mysql console using the WordPress credentials.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/create/">create</a></td>
			<td>Create the database, as specified in wp-config.php</td>
		</tr>
		<tr>
			<td><a href="/commands/db/drop/">drop</a></td>
			<td>Delete the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/export/">export</a></td>
			<td>Exports the database using mysqldump.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/import/">import</a></td>
			<td>Import database from a file.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/optimize/">optimize</a></td>
			<td>Optimize the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/query/">query</a></td>
			<td>Execute a query against the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/repair/">repair</a></td>
			<td>Repair the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/reset/">reset</a></td>
			<td>Remove all tables from the database.</td>
		</tr>
	</tbody>
</table>
