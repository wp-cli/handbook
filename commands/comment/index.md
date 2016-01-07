---
layout: default
title: 'wp comment'
---

`wp comment` - Manage comments.

<hr />

### EXAMPLES

    # delete all spam comments.
    wp comment delete $(wp comment list --status=spam --format=ids)## GLOBAL PARAMETERS

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
			<td><a href="/commands/comment/approve/">approve</a></td>
			<td>Approve a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/count/">count</a></td>
			<td>Count comments, on whole blog or on a given post.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/create/">create</a></td>
			<td>Insert a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/delete/">delete</a></td>
			<td>Delete a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/exists/">exists</a></td>
			<td>Verify whether a comment exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/generate/">generate</a></td>
			<td>Generate comments.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/get/">get</a></td>
			<td>Get a single comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/list/">list</a></td>
			<td>Get a list of comments.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/meta/">meta</a></td>
			<td>Manage comment custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/recount/">recount</a></td>
			<td>Recount the comment_count value for one or more posts.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/spam/">spam</a></td>
			<td>Spam a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/status/">status</a></td>
			<td>Get status of a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/trash/">trash</a></td>
			<td>Trash a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/unapprove/">unapprove</a></td>
			<td>Unapprove a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/unspam/">unspam</a></td>
			<td>Unspam a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/untrash/">untrash</a></td>
			<td>Untrash a comment.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/update/">update</a></td>
			<td>Update one or more comments.</td>
		</tr>
		<tr>
			<td><a href="/commands/comment/url/">url</a></td>
			<td>Get comment url</td>
		</tr>
	</tbody>
</table>
