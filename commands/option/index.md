---
layout: default
title: 'wp option'
---

`wp option` - Manage options.

<hr />

### OPTIONS

[\--format=json]
: Encode/decode values as JSON.

### EXAMPLES

    wp option get siteurl

    wp option add my_option foobar

    wp option update my_option '{"foo": "bar"}' --format=json

    wp option delete my_option

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
			<td><a href="/commands/option/add/">add</a></td>
			<td>Add an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/delete/">delete</a></td>
			<td>Delete an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/get/">get</a></td>
			<td>Get an option.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/list/">list</a></td>
			<td>List options.</td>
		</tr>
		<tr>
			<td><a href="/commands/option/update/">update</a></td>
			<td>Update an option.</td>
		</tr>
	</tbody>
</table>
