---
layout: default
title: 'wp plugin'
---

`wp plugin` - Manage plugins.

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
			<td><a href="/commands/plugin/activate/">activate</a></td>
			<td>Activate a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/deactivate/">deactivate</a></td>
			<td>Deactivate a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/delete/">delete</a></td>
			<td>Delete plugin files.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/get/">get</a></td>
			<td>Get a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/install/">install</a></td>
			<td>Install a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/is-installed/">is-installed</a></td>
			<td>Check if the plugin is installed.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/list/">list</a></td>
			<td>Get a list of plugins.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/path/">path</a></td>
			<td>Get the path to a plugin or to the plugin directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/search/">search</a></td>
			<td>Search the wordpress.org plugin repository.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/status/">status</a></td>
			<td>See the status of one or all plugins.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/toggle/">toggle</a></td>
			<td>Toggle a plugin's activation state.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/uninstall/">uninstall</a></td>
			<td>Uninstall a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/update/">update</a></td>
			<td>Update one or more plugins.</td>
		</tr>
	</tbody>
</table>
