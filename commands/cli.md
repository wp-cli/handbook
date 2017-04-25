# wp cli

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli+sort%3Aupdated-desc">Github issues</a></small>

Manage WP-CLI itself.

### EXAMPLES

    # Display the version currently installed.
    $ wp cli version
    WP-CLI 0.24.1

    # Check for updates to WP-CLI.
    $ wp cli check-update
    Success: WP-CLI is at the latest version.

    # Update WP-CLI to the latest stable release.
    $ wp cli update
    You have version 0.24.0. Would you like to update to 0.24.1? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar...
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 0.24.1.



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
			<td><a href="https://developer.wordpress.org/cli/commands/cli/alias/">alias</a></td>
			<td>List available WP-CLI aliases.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/check-update/">check-update</a></td>
			<td>Check to see if there is a newer version of WP-CLI available.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/cmd-dump/">cmd-dump</a></td>
			<td>Dump the list of installed commands, as JSON.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/completions/">completions</a></td>
			<td>Generate tab completion strings.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/info/">info</a></td>
			<td>Print various details about the WP-CLI environment.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/param-dump/">param-dump</a></td>
			<td>Dump the list of global parameters, as JSON or in var_export format.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/update/">update</a></td>
			<td>Update WP-CLI to the latest release.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cli/version/">version</a></td>
			<td>Print WP-CLI version.</td>
		</tr>
	</tbody>
</table>
