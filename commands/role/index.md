---
layout: default
title: 'wp role'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; role</small>

`wp role` - Manage user roles.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arole+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List roles
    $ wp role list --fields=role --format=csv
    role
    administrator
    editor
    author
    contributor
    subscriber

    # Check if a role exists
    $ wp role exists editor
    Success: Role with ID editor exists.

    # Create role
    $ wp role create approver Approver
    Success: Role with key approver created.

    # Delete role
    $ wp role delete approver
    Success: Role with key approver deleted.

    # Reset role
    $ wp role reset administrator author contributor
    Success: Reset 3/3 roles



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
			<td><a href="/commands/role/create/">create</a></td>
			<td>Create a new role.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/delete/">delete</a></td>
			<td>Delete an existing role.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/exists/">exists</a></td>
			<td>Check if a role exists.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/list/">list</a></td>
			<td>List all roles.</td>
		</tr>
		<tr>
			<td><a href="/commands/role/reset/">reset</a></td>
			<td>Reset any default role to default capabilities.</td>
		</tr>
	</tbody>
</table>
