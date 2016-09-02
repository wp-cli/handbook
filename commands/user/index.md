---
layout: default
title: 'wp user'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; user</small>

`wp user` - Manage users.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List user IDs
    $ wp user list --field=ID
    1

    # Create user
    $ wp user create bob bob@example.com --role=author
    Success: Created user 3.
    Password: k9**&amp;I4vNH(&amp;

    # Update user
    $ wp user update 123 --display_name=Mary --user_pass=marypass
    Success: Updated user 123.

    # Delete user 123 and reassign posts to user 567
    $ wp user delete 123 --reassign=567
    Success: Removed user 123 from http://example.com



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
			<td><a href="/commands/user/add-cap/">add-cap</a></td>
			<td>Add a capability for a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/add-role/">add-role</a></td>
			<td>Add a role for a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/create/">create</a></td>
			<td>Create a user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/delete/">delete</a></td>
			<td>Delete one or more users from the current site.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/generate/">generate</a></td>
			<td>Generate users.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/get/">get</a></td>
			<td>Get a single user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/import-csv/">import-csv</a></td>
			<td>Import users from a CSV file.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/list/">list</a></td>
			<td>List users.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/list-caps/">list-caps</a></td>
			<td>List all user's capabilities.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/meta/">meta</a></td>
			<td>Manage user custom fields.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/remove-cap/">remove-cap</a></td>
			<td>Remove a user's capability.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/remove-role/">remove-role</a></td>
			<td>Remove a user's role.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/set-role/">set-role</a></td>
			<td>Set the user role (for a particular blog).</td>
		</tr>
		<tr>
			<td><a href="/commands/user/term/">term</a></td>
			<td>Manage user terms.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/update/">update</a></td>
			<td>Update a user.</td>
		</tr>
	</tbody>
</table>
