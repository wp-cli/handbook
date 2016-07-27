---
layout: default
title: 'wp plugin'
display_global_parameters: true
---

`wp plugin` - Manage plugins.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Activate plugin
    $ wp plugin activate hello-dolly
    Success: Plugin 'hello-dolly' activated.

    # Deactivate plugin
    $ wp plugin deactivate hello-dolly
    Success: Plugin 'hello-dolly' deactivated.

    # Delete plugin
    $ wp plugin delete hello-dolly
    Success: Deleted 'hello-dolly' plugin.

    # Install the latest version from wordpress.org and activate
    $ wp plugin install bbpress --activate
    Installing bbPress (2.5.9)
    Downloading install package from https://downloads.wordpress.org/plugin/bbpress.2.5.9.zip...
    Using cached file '/home/vagrant/.wp-cli/cache/plugin/bbpress-2.5.9.zip'...
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Activating 'bbpress'...
    Success: Plugin 'bbpress' activated.



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
			<td><a href="/commands/plugin/activate/">activate</a></td>
			<td>Activate a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/deactivate/">deactivate</a></td>
			<td>Deactivate a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/delete/">delete</a></td>
			<td>Delete plugin files without deactivating or uninstalling.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/get/">get</a></td>
			<td>Get a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/install/">install</a></td>
			<td>Install a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/is-installed/">is-installed</a></td>
			<td>Check if the plugin is installed.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/list/">list</a></td>
			<td>Get a list of plugins.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/path/">path</a></td>
			<td>Get the path to a plugin or to the plugin directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/search/">search</a></td>
			<td>Search the wordpress.org plugin repository.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/status/">status</a></td>
			<td>See the status of one or all plugins.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/toggle/">toggle</a></td>
			<td>Toggle a plugin's activation state.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/uninstall/">uninstall</a></td>
			<td>Uninstall a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/plugin/update/">update</a></td>
			<td>Update one or more plugins.</td>
		</tr>
	</tbody>
</table>
