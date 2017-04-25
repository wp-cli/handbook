# wp db

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Perform basic database operations using credentials stored in wp-config.php

### EXAMPLES

    # Create a new database.
    $ wp db create
    Success: Database created.

    # Drop an existing database.
    $ wp db drop --yes
    Success: Database dropped.

    # Reset the current database.
    $ wp db reset --yes
    Success: Database reset.

    # Execute a SQL query stored in a file.
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
			<td><a href="https://developer.wordpress.org/cli/commands/db/check/">check</a></td>
			<td>Check the current status of the database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/cli/">cli</a></td>
			<td>Open a MySQL console using credentials from wp-config.php</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/create/">create</a></td>
			<td>Create a new database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/drop/">drop</a></td>
			<td>Delete the existing database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/export/">export</a></td>
			<td>Exports the database to a file or to STDOUT.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/import/">import</a></td>
			<td>Import a database from a file or from STDIN.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/optimize/">optimize</a></td>
			<td>Optimize the database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/query/">query</a></td>
			<td>Execute a SQL query against the database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/repair/">repair</a></td>
			<td>Repair the database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/reset/">reset</a></td>
			<td>Remove all tables from the database.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/db/tables/">tables</a></td>
			<td>List the database tables.</td>
		</tr>
	</tbody>
</table>
