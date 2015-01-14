---
layout: default
title: 'wp cron event'
---

`wp cron event` - Manage WP-Cron events.



### GLOBAL PARAMETERS

  --path=&lt;path&gt;
      Path to the WordPress files

  --url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  --user=&lt;id|login|email&gt;
      Set the WordPress user

  --skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  --skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  --require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  --[no-]color
      Whether to colorize the output

  --debug
      Show all PHP errors

  --prompt
      Prompt the user to enter values for all command arguments

  --quiet
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
			<td><a href="/commands/cron/event/delete/">delete</a></td>
			<td>Delete the next scheduled cron event for the given hook.</td>
		</tr>
		<tr>
			<td><a href="/commands/cron/event/list/">list</a></td>
			<td>List scheduled cron events.</td>
		</tr>
		<tr>
			<td><a href="/commands/cron/event/run/">run</a></td>
			<td>Run the next scheduled cron event for the given hook.</td>
		</tr>
		<tr>
			<td><a href="/commands/cron/event/schedule/">schedule</a></td>
			<td>Schedule a new cron event.</td>
		</tr>
	</tbody>
</table>
