---
layout: default
title: 'wp cli'
display_global_parameters: true
---

`wp cli` - Get information about WP-CLI itself.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Display CLI version
    $ wp cli version
    WP-CLI 0.23.1

    # Check for update
    $ wp cli check-update
    Success: WP-CLI is at the latest version.

    # Update CLI
    $ wp cli update
    You have version 0.23.0. Would you like to update to 0.23.1? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.23.1/wp-cli-0.23.1.phar...
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 0.23.1



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
			<td><a href="/commands/cli/alias/">alias</a></td>
			<td>List available aliases.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/check-update/">check-update</a></td>
			<td>Check for update via Github API. Returns the available versions if there are updates, or empty if no update available.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/cmd-dump/">cmd-dump</a></td>
			<td>Dump the list of installed commands, as JSON.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/completions/">completions</a></td>
			<td>Generate tab completion strings.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/info/">info</a></td>
			<td>Print various data about the CLI environment.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/param-dump/">param-dump</a></td>
			<td>Dump the list of global parameters, as JSON or in var_export format.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/update/">update</a></td>
			<td>Fetch most recent update matching the requirements. Returns the available versions if there are updates, or empty if no update available.</td>
		</tr>
		<tr>
			<td><a href="/commands/cli/version/">version</a></td>
			<td>Print WP-CLI version.</td>
		</tr>
	</tbody>
</table>
