---
layout: default
title: 'wp cli'
---

`wp cli` - Get information about WP-CLI itself.

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
			<td><a href="/commands/cli/check-update/">check-update</a></td>
			<td>Check for update via Github API. Returns the available versions if there are updates, or empty if no update available.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/cmd-dump/">cmd-dump</a></td>
			<td>Dump the list of installed commands, as JSON.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/completions/">completions</a></td>
			<td>Generate tab completion strings.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/info/">info</a></td>
			<td>Print various data about the CLI environment.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/param-dump/">param-dump</a></td>
			<td>Dump the list of global parameters, as JSON or in var_export format.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/update/">update</a></td>
			<td>Fetch most recent update matching the requirements. Returns the available versions if there are updates, or empty if no update available.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/version/">version</a></td>
			<td>Print WP-CLI version.</td>
		</tr>
	</tbody>
</table>
