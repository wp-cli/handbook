---
layout: default
title: 'wp core language'
display_global_parameters: true
---

`wp core language` - Manage core language.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-language+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Install language
    $ wp core language install nl_NL
    Success: Language installed.

    # Activate language
    $ wp core language activate nl_NL
    Success: Language activated.

    # Uninstall language
    $ wp core language uninstall nl_NL
    Success: Language uninstalled.

    # List installed languages
    $ wp core language list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+





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
			<td><a href="/commands/core/language/activate/">activate</a></td>
			<td>Activate a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/install/">install</a></td>
			<td>Install a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/list/">list</a></td>
			<td>List all languages available.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/uninstall/">uninstall</a></td>
			<td>Uninstall a given language.</td>
		</tr>
		<tr>
			<td><a href="/commands/core/language/update/">update</a></td>
			<td>Updates the active translation of core, plugins, and themes.</td>
		</tr>
	</tbody>
</table>
