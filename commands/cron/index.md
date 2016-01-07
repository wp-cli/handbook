---
layout: default
title: 'wp cron'
---

`wp cron` - Manage WP-Cron events and schedules.

<hr />

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



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
			<td><a href="/commands/cron/event/">event</a></td>
			<td>Manage WP-Cron events.</td>
		</tr>
		<tr>
			<td><a href="/commands/cron/schedule/">schedule</a></td>
			<td>Manage WP-Cron schedules.</td>
		</tr>
		<tr>
			<td><a href="/commands/cron/test/">test</a></td>
			<td>Test the WP Cron spawning system and report back its status.</td>
		</tr>
	</tbody>
</table>
