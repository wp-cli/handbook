# wp site option

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-option+sort%3Aupdated-desc">Github issues</a></small>

Manage site options in a multisite install.

### EXAMPLES

    # Get site registration
    $ wp site option get registration
    none

    # Add site option
    $ wp site option add my_option foobar
    Success: Added 'my_option' site option.

    # Update site option
    $ wp site option update my_option '{"foo": "bar"}' --format=json
    Success: Updated 'my_option' site option.

    # Delete site option
    $ wp site option delete my_option
    Success: Deleted 'my_option' site option.





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
			<td><a href="/commands/site/option/add/">add</a></td>
			<td>Add a site option.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/option/delete/">delete</a></td>
			<td>Delete a site option.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/option/get/">get</a></td>
			<td>Get a site option.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/option/list/">list</a></td>
			<td>List site options.</td>
		</tr>
		<tr>
			<td><a href="/commands/site/option/update/">update</a></td>
			<td>Update a site option.</td>
		</tr>
	</tbody>
</table>
