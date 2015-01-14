---
layout: default
title: 'wp core'
---

`wp core` - Download, install, update and otherwise manage WordPress proper.



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
			<td><a href="/commands/core/check-update/">check-update</a></td>
			<td>Check for update via Version Check API. Returns latest version if there's an update, or empty if no update available.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/config/">config</a></td>
			<td>Generate a wp-config.php file.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/download/">download</a></td>
			<td>Download core WordPress files.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/install/">install</a></td>
			<td>Create the WordPress tables in the database.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/is-installed/">is-installed</a></td>
			<td>Determine if the WordPress tables are installed.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/">language</a></td>
			<td></td>
		</tr>
		<tr>
			<td><a href="/commands/core/multisite-convert/">multisite-convert</a></td>
			<td>Transform a single-site install into a multi-site install.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/multisite-install/">multisite-install</a></td>
			<td>Install multisite from scratch.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/update/">update</a></td>
			<td>Update WordPress.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/update-db/">update-db</a></td>
			<td>Update the WordPress database.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/verify-checksums/">verify-checksums</a></td>
			<td>Verify WordPress files against WordPress.org's checksums.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/version/">version</a></td>
			<td>Display the WordPress version.</td>
		</tr>
	</tbody>
</table>
