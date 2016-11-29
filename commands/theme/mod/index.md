---
layout: default
title: 'wp theme mod'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [theme](/commands/theme/) &raquo; mod</small>

`wp theme mod` - Manage theme mods.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-mod+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Set the 'background_color' theme mod to '000000'.
    $ wp theme mod set background_color 000000
    Success: Theme mod background_color set to 000000

    # Get single theme mod in JSON format.
    $ wp theme mod get background_color --format=json
    [{"key":"background_color","value":"dd3333"}]

    # Remove all theme mods.
    $ wp theme mod remove --all
    Success: Theme mods removed.





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
			<td><a href="/commands/theme/mod/get/">get</a></td>
			<td>Get one or more theme mods.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/remove/">remove</a></td>
			<td>Remove one or more theme mods.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/set/">set</a></td>
			<td>Set the value of a theme mod.</td>
		</tr>
	</tbody>
</table>
