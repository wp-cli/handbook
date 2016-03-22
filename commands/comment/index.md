---
layout: default
title: 'wp comment'
display_global_parameters: true
---

`wp comment` - Manage comments.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # delete all spam comments.
    wp comment delete $(wp comment list --status=spam --format=ids)



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
