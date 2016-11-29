---
layout: default
title: 'wp theme'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; theme</small>

`wp theme` - Manage themes.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Install the latest version of a theme from wordpress.org and activate
    $ wp theme install twentysixteen --activate
    Installing Twenty Sixteen (1.2)
    Downloading install package from http://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
    Unpacking the package...
    Installing the theme...
    Theme installed successfully.
    Activating 'twentysixteen'...
    Success: Switched to 'Twenty Sixteen' theme.

    # Get details of an installed theme
    $ wp theme get twentysixteen --fields=name,title,version
    +---------+----------------+
    | Field   | Value          |
    +---------+----------------+
    | name    | Twenty Sixteen |
    | title   | Twenty Sixteen |
    | version | 1.2            |
    +---------+----------------+

    # Get status of theme
    $ wp theme status twentysixteen
    Theme twentysixteen details:
    		Name: Twenty Sixteen
    		Status: Active
    		Version: 1.2
    		Author: the WordPress team



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
			<td><a href="/commands/theme/activate/">activate</a></td>
			<td>Activate a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/delete/">delete</a></td>
			<td>Delete a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/disable/">disable</a></td>
			<td>Disable a theme on a WordPress multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/enable/">enable</a></td>
			<td>Enable a theme on a WordPress multisite install.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/get/">get</a></td>
			<td>Get details about a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/install/">install</a></td>
			<td>Install a theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/is-installed/">is-installed</a></td>
			<td>Check if the theme is installed.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/list/">list</a></td>
			<td>Get a list of themes.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/mod/">mod</a></td>
			<td>Manage theme mods.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/path/">path</a></td>
			<td>Get the path to a theme or to the theme directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/search/">search</a></td>
			<td>Search the WordPress.org theme directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/status/">status</a></td>
			<td>See the status of one or all themes.</td>
		</tr>
		<tr>
			<td><a href="/commands/theme/update/">update</a></td>
			<td>Update one or more themes.</td>
		</tr>
	</tbody>
</table>
