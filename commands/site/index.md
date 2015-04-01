---
layout: default
title: 'wp site'
---

`wp site` - Perform site-wide operations.



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
			<td><a href="/commands/site/create/">create</a></td>
			<td>Create a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/delete/">delete</a></td>
			<td>Delete a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/empty/">empty</a></td>
			<td>Empty a site of its content (posts, comments, and terms).</td>
		</tr>
		<tr>
			<td><a href="/commands/site/list/">list</a></td>
			<td>List all sites in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/url/">url</a></td>
			<td>Get site url</td>
		</tr>
	</tbody>
</table>
