---
layout: default
title: 'wp user session'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; session</small>

`wp user session` - Manage a user's sessions.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-session+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List a user's sessions.
    $ wp user session list admin@example.com --format=csv
    login_time,expiration_time,ip,ua
    "2016-01-01 12:34:56","2016-02-01 12:34:56",127.0.0.1,"Mozilla/5.0..."

    # Destroy the most recent session of the given user.
    $ wp user session destroy admin
    Success: Destroyed session. 3 sessions remaining.





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
			<td><a href="/commands/user/session/destroy/">destroy</a></td>
			<td>Destroy a session for the given user.</td>
		</tr>
		<tr>
			<td><a href="/commands/user/session/list/">list</a></td>
			<td>List sessions for the given user.</td>
		</tr>
	</tbody>
</table>
