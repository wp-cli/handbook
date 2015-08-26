---
layout: default
title: 'wp user term'
---

`wp user term` - Manage user terms.

### EXAMPLES

    wp user term set 123 test category

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
			<td><a href="/commands/user/term/add/">add</a></td>
			<td>Add a term. Appends to existing set of terms on the object.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/term/list/">list</a></td>
			<td>List all terms associated with an object.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/term/remove/">remove</a></td>
			<td>Remove a term.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/term/set/">set</a></td>
			<td>Set terms. Replaces existing terms on the object.</td>
		</tr>
	</tbody>
</table>
