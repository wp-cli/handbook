---
layout: default
title: 'wp transient'
---

`wp transient` - Manage transients.

<hr />

### EXAMPLES

    wp transient set my_key my_value 300

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
			<td><a href="/commands/transient/delete/">delete</a></td>
			<td>Delete a transient value.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/delete-all/">delete-all</a></td>
			<td>Delete all transients.</td>
		</tr>
		<tr>
			<td><a href="/commands/transient/delete-expired/">delete-expired</a></td>
			<td>Delete all expired transients.</td>
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
