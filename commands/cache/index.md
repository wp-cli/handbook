---
layout: default
title: 'wp cache'
---

`wp cache` - Manage the object cache.

<hr />

### EXAMPLES

    wp cache set my_key my_value my_group 300

    wp cache get my_key my_group

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
			<td><a href="/commands/cache/add/">add</a></td>
			<td>Add a value to the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/decr/">decr</a></td>
			<td>Decrement a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/delete/">delete</a></td>
			<td>Remove a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/flush/">flush</a></td>
			<td>Flush the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/get/">get</a></td>
			<td>Get a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/incr/">incr</a></td>
			<td>Increment a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/replace/">replace</a></td>
			<td>Replace a value in the object cache, if the value already exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/set/">set</a></td>
			<td>Set a value to the object cache, regardless of whether it already exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/cache/type/">type</a></td>
			<td>Attempts to determine which object cache is being used.</td>
		</tr>
	</tbody>
</table>
