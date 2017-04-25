# wp site

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite+sort%3Aupdated-desc">Github issues</a></small>

Perform site-wide operations.

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
			<td><a href="https://developer.wordpress.org/cli/commands/site/activate/">activate</a></td>
			<td>Activate one or more sites.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/archive/">archive</a></td>
			<td>Archive one or more sites.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/create/">create</a></td>
			<td>Create a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/deactivate/">deactivate</a></td>
			<td>Deactivate one or more sites.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/delete/">delete</a></td>
			<td>Delete a site in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/empty/">empty</a></td>
			<td>Empty a site of its content (posts, comments, terms, and meta).</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/list/">list</a></td>
			<td>List all sites in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/option/">option</a></td>
			<td>Manage site options in a multisite install.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/spam/">spam</a></td>
			<td>Mark one or more sites as spam.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/unarchive/">unarchive</a></td>
			<td>Unarchive one or more sites.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/site/unspam/">unspam</a></td>
			<td>Remove one or more sites from spam.</td>
		</tr>
	</tbody>
</table>
