---
layout: default
title: 'wp term'
---

`wp term` - Manage terms.

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
			<td><a href="/commands/term/create/">create</a></td>
			<td>Create a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/delete/">delete</a></td>
			<td>Delete a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/generate/">generate</a></td>
			<td>Generate some terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/get/">get</a></td>
			<td>Get a taxonomy term</td>
		</tr>
		<tr>
			<td><a href="/commands/term/list/">list</a></td>
			<td>List terms in a taxonomy.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/update/">update</a></td>
			<td>Update a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/term/url/">url</a></td>
			<td>Get term url</td>
		</tr>
	</tbody>
</table>
