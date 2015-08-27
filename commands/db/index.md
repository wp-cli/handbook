---
layout: default
title: 'wp db'
---

`wp db` - Perform basic database operations.

<hr />



### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



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
			<td>Exports the database to a file or to STDOUT.</td>
		</tr>
		<tr>
			<td><a href="/commands/db/import/">import</a></td>
			<td>Import database from a file or from STDIN.</td>
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
		<tr>
			<td><a href="/commands/db/tables/">tables</a></td>
			<td>List the database tables.</td>
		</tr>
	</tbody>
</table>
