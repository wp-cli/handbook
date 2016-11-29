---
layout: default
title: 'wp site'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; site</small>

`wp site` - Perform site-wide operations.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Create site
    $ wp site create --slug=example
    Success: Site 3 created: www.example.com/example/

    # Output a simple list of site URLs
    $ wp site list --field=url
    http://www.example.com/
    http://www.example.com/subdir/

    # Delete site
    $ wp site delete 123
    Are you sure you want to delete the 'http://www.example.com/example' site? [y/n] y
    Success: The site at 'http://www.example.com/example' was deleted.



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
			<td><a href="/commands/site/activate/">activate</a></td>
			<td>Activate one or more sites.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/archive/">archive</a></td>
			<td>Archive one or more sites.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/create/">create</a></td>
			<td>Create a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/deactivate/">deactivate</a></td>
			<td>Deactivate one or more sites.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/delete/">delete</a></td>
			<td>Delete a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/empty/">empty</a></td>
			<td>Empty a site of its content (posts, comments, terms, and meta).</td>
		</tr>
		<tr>
			<td><a href="/commands/site/list/">list</a></td>
			<td>List all sites in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/option/">option</a></td>
			<td>Manage site options.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/spam/">spam</a></td>
			<td>Mark one or more sites as spam.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/unarchive/">unarchive</a></td>
			<td>Unarchive one or more sites.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/unspam/">unspam</a></td>
			<td>Remove one or more sites from spam.</td>
		</tr>
	</tbody>
</table>
