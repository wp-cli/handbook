---
layout: default
title: 'wp role'
---

`wp role` - Manage user roles.

<hr />

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



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
			<td><a href="/commands/role/create/">create</a></td>
			<td>Create a new role.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/delete/">delete</a></td>
			<td>Delete an existing role.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/exists/">exists</a></td>
			<td>Check if a role exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/list/">list</a></td>
			<td>List all roles.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/reset/">reset</a></td>
			<td>Reset any default role to default capabilities.</td>
		</tr>
	</tbody>
</table>
