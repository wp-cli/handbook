---
layout: default
title: 'wp post'
---

`wp post` - Manage posts.



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
			<td><a href="/commands/post/create/">create</a></td>
			<td>Create a post.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/delete/">delete</a></td>
			<td>Delete a post by ID.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/edit/">edit</a></td>
			<td>Launch system editor to edit post content.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/generate/">generate</a></td>
			<td>Generate some posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/get/">get</a></td>
			<td>Get a post's content by ID.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/list/">list</a></td>
			<td>Get a list of posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/meta/">meta</a></td>
			<td>Manage post custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/term/">term</a></td>
			<td>Manage post terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/update/">update</a></td>
			<td>Update one or more posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/post/url/">url</a></td>
			<td>Get post url</td>
		</tr>
	</tbody>
</table>
