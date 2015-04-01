---
layout: default
title: 'wp scaffold'
---

`wp scaffold` - Generate code for post types, taxonomies, etc.



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
			<td><a href="/commands/scaffold/_s/">_s</a></td>
			<td>Generate starter code for a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/child-theme/">child-theme</a></td>
			<td>Generate empty child theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/package-tests/">package-tests</a></td>
			<td>Generate files needed for writing Behat tests for your command.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/plugin/">plugin</a></td>
			<td>Generate starter code for a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/plugin-tests/">plugin-tests</a></td>
			<td>Generate files needed for running PHPUnit tests.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/post-type/">post-type</a></td>
			<td>Generate PHP code for registering a custom post type.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/taxonomy/">taxonomy</a></td>
			<td>Generate PHP code for registering a custom taxonomy.</td>
		</tr>
	</tbody>
</table>
