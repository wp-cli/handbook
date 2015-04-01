---
layout: default
title: 'wp theme mod'
---

`wp theme mod` - Manage theme mods.



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
			<td><a href="/commands/theme/mod/get/">get</a></td>
			<td>Get theme mod(s).</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/remove/">remove</a></td>
			<td>Remove theme mod(s).</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/set/">set</a></td>
			<td>Set a theme mod.</td>
		</tr>
	</tbody>
</table>
