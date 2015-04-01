---
layout: default
title: 'wp cap'
---

`wp cap` - Manage user capabilities.

### EXAMPLES

    # Add 'spectate' capability to 'author' role
    wp cap add 'author' 'spectate'

    # Add all caps from 'editor' role to 'author' role
    wp cap list 'editor' | xargs wp cap add 'author'

    # Remove all caps from 'editor' role that also appear in 'author' role
    wp cap list 'author' | xargs wp cap remove 'editor'

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
			<td><a href="/commands/cap/add/">add</a></td>
			<td>Add capabilities to a given role.</td>
		</tr>
		<tr>
			<td><a href="/commands/cap/list/">list</a></td>
			<td>List capabilities for a given role.</td>
		</tr>
		<tr>
			<td><a href="/commands/cap/remove/">remove</a></td>
			<td>Remove capabilities from a given role.</td>
		</tr>
	</tbody>
</table>
