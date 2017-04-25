# wp package

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage+sort%3Aupdated-desc">Github issues</a></small>

Manage WP-CLI packages.

WP-CLI packages are community-maintained projects built on WP-CLI. They can
contain WP-CLI commands, but they can also just extend WP-CLI in some way.

Installable packages are listed in the
[Package Index](http://wp-cli.org/package-index/).

Learn how to create your own command from the
[Commands Cookbook](http://wp-cli.org/docs/commands-cookbook/)

### EXAMPLES

    # List installed packages
    $ wp package list
    +-----------------------+------------------------------------------+---------+------------+
    | name                  | description                              | authors | version    |
    +-----------------------+------------------------------------------+---------+------------+
    | wp-cli/server-command | Start a development server for WordPress |         | dev-master |
    +-----------------------+------------------------------------------+---------+------------+

    # Install the latest development version of the package
    $ wp package install wp-cli/server-command
    Installing package wp-cli/server-command (dev-master)
    Updating /home/person/.wp-cli/packages/composer.json to require the package...
    Using Composer to install the package...
    ---
    Loading composer repositories with package information
    Updating dependencies
    Resolving dependencies through SAT
    Dependency resolution completed in 0.005 seconds
    Analyzed 732 packages to resolve dependencies
    Analyzed 1034 rules to resolve dependencies
     - Installing package
    Writing lock file
    Generating autoload files
    ---
    Success: Package installed.

    # Uninstall package
    $ wp package uninstall wp-cli/server-command
    Removing require statement from /home/person/.wp-cli/packages/composer.json
    Deleting package directory /home/person/.wp-cli/packages/vendor/wp-cli/server-command
    Regenerating Composer autoload.
    Success: Uninstalled package.



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
			<td><a href="/commands/package/browse/">browse</a></td>
			<td>Browse WP-CLI packages available for installation.</td>
		</tr>
		<tr>
			<td><a href="/commands/package/install/">install</a></td>
			<td>Install a WP-CLI package.</td>
		</tr>
		<tr>
			<td><a href="/commands/package/list/">list</a></td>
			<td>List installed WP-CLI packages.</td>
		</tr>
		<tr>
			<td><a href="/commands/package/path/">path</a></td>
			<td>Get the path to an installed WP-CLI package, or the package directory.</td>
		</tr>
		<tr>
			<td><a href="/commands/package/uninstall/">uninstall</a></td>
			<td>Uninstall a WP-CLI package.</td>
		</tr>
		<tr>
			<td><a href="/commands/package/update/">update</a></td>
			<td>Update all installed WP-CLI packages to their latest version.</td>
		</tr>
	</tbody>
</table>
