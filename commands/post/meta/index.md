---
layout: default
title: 'wp post meta'
---

`wp post meta` - Manage post custom fields.

### OPTIONS

[\--format=json]
: Encode/decode values as JSON.

### EXAMPLES

    wp post meta set 123 _wp_page_template about.php

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
			<td><a href="/commands/post/meta/add/">add</a></td>
			<td>Add a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/delete/">delete</a></td>
			<td>Delete a meta field.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/get/">get</a></td>
			<td>Get meta field value.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/list/">list</a></td>
			<td>List all metadata associated with an object.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/update/">update</a></td>
			<td>Update a meta field.</td>
		</tr>
	</tbody>
</table>
