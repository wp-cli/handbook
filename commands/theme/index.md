---
layout: default
title: 'wp theme'
---

`wp theme` - Manage themes.

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
			<td><a href="/commands/theme/activate/">activate</a></td>
			<td>Activate a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/delete/">delete</a></td>
			<td>Delete a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/disable/">disable</a></td>
			<td>Disable a theme in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/enable/">enable</a></td>
			<td>Enable a theme in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/get/">get</a></td>
			<td>Get a theme</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/install/">install</a></td>
			<td>Install a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/is-installed/">is-installed</a></td>
			<td>Check if the theme is installed.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/list/">list</a></td>
			<td>Get a list of themes.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/">mod</a></td>
			<td>Manage theme mods.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/path/">path</a></td>
			<td>Get the path to a theme or to the theme directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/search/">search</a></td>
			<td>Search the wordpress.org theme repository.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/status/">status</a></td>
			<td>See the status of one or all themes.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/update/">update</a></td>
			<td>Update one or more themes.</td>
		</tr>
	</tbody>
</table>
