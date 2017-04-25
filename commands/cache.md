# wp cache

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache+sort%3Aupdated-desc">Github issues</a></small>

Manage the object cache.

Use a persistent object cache drop-in to persist cache values between requests.

### EXAMPLES

    # Set cache.
    $ wp cache set my_key my_value my_group 300
    Success: Set object 'my_key' in group 'my_group'.

    # Get cache.
    $ wp cache get my_key my_group
    my_value



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
			<td><a href="https://developer.wordpress.org/cli/commands/cache/add/">add</a></td>
			<td>Add a value to the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/decr/">decr</a></td>
			<td>Decrement a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/delete/">delete</a></td>
			<td>Remove a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/flush/">flush</a></td>
			<td>Flush the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/get/">get</a></td>
			<td>Get a value from the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/incr/">incr</a></td>
			<td>Increment a value in the object cache.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/replace/">replace</a></td>
			<td>Replace a value in the object cache, if the value already exists.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/set/">set</a></td>
			<td>Set a value to the object cache, regardless of whether it already exists.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cache/type/">type</a></td>
			<td>Attempts to determine which object cache is being used.</td>
		</tr>
	</tbody>
</table>
