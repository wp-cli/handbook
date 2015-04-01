---
layout: default
title: 'wp user'
---

`wp user` - Manage users.



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
			<td><a href="/commands/user/add-cap/">add-cap</a></td>
			<td>Add a capability for a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/add-role/">add-role</a></td>
			<td>Add a role for a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/create/">create</a></td>
			<td>Create a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/delete/">delete</a></td>
			<td>Delete one or more users from the current site.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/generate/">generate</a></td>
			<td>Generate users.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/get/">get</a></td>
			<td>Get a single user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/import-csv/">import-csv</a></td>
			<td>Import users from a CSV file.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/list/">list</a></td>
			<td>List users.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/list-caps/">list-caps</a></td>
			<td>List all user's capabilities.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/">meta</a></td>
			<td>Manage user custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/remove-cap/">remove-cap</a></td>
			<td>Remove a user's capability.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/remove-role/">remove-role</a></td>
			<td>Remove a user's role.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/set-role/">set-role</a></td>
			<td>Set the user role (for a particular blog).</td>
		</tr>
		<tr>
			<td><a href="/commands/user/term/">term</a></td>
			<td>Manage user terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/update/">update</a></td>
			<td>Update a user.</td>
		</tr>
	</tbody>
</table>
