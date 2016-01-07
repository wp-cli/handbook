---
layout: default
title: 'wp menu location'
---

`wp menu location` - Manage a menu's assignment to locations.

<hr />

### EXAMPLES

    # List available menu locations
    wp menu location list

    # Assign the 'primary-menu' menu to the 'primary' location
    wp menu location assign primary-menu primary

    # Remove the 'primary-menu' menu from the 'primary' location
    wp menu location remove primary-menu primary

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



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
			<td><a href="/commands/menu/location/assign/">assign</a></td>
			<td>Assign a location to a menu</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/location/list/">list</a></td>
			<td>List locations for the current theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/menu/location/remove/">remove</a></td>
			<td>Remove a location from a menu</td>
		</tr>
	</tbody>
</table>
