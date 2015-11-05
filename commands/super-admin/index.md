---
layout: default
title: 'wp super-admin'
---

`wp super-admin` - List, add, and remove super admins from a network.

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
      Show all PHP errors; add verbosity to WP-CLI bootstrap

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
			<td><a href="/commands/super-admin/add/">add</a></td>
			<td>Grant super-admin privileges to one or more users.</td>
		</tr>
		<tr>
			<td><a href="/commands/super-admin/list/">list</a></td>
			<td>Show a list of users with super-admin capabilities.</td>
		</tr>
		<tr>
			<td><a href="/commands/super-admin/remove/">remove</a></td>
			<td>Revoke super-admin privileges to one or more users.</td>
		</tr>
	</tbody>
</table>
