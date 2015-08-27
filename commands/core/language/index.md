---
layout: default
title: 'wp core language'
---

`wp core language` - 

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
			<td><a href="/commands/core/language/activate/">activate</a></td>
			<td>Activate a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/install/">install</a></td>
			<td>Install a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/list/">list</a></td>
			<td>List all languages available.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/uninstall/">uninstall</a></td>
			<td>Uninstall a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/update/">update</a></td>
			<td>Updates the active translation of core, plugins, and themes.</td>
		</tr>
	</tbody>
</table>
