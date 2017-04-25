# wp scaffold

<small>[Commands](/commands/) &raquo; scaffold</small>

`wp scaffold` - Generate code for post types, taxonomies, plugins, child themes, etc.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ascaffold+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Generate a new plugin with unit tests
    $ wp scaffold plugin sample-plugin
    Success: Created plugin files.
    Success: Created test files.

    # Generate theme based on _s
    $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
    Success: Created theme 'Sample Theme'.

    # Generate code for post type registration in given theme
    $ wp scaffold post-type movie --label=Movie --theme=simple-life
    Success: Created /var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php



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
			<td><a href="/commands/scaffold/_s/">_s</a></td>
			<td>Generate starter code for a theme based on _s.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/child-theme/">child-theme</a></td>
			<td>Generate child theme based on an existing theme.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/plugin/">plugin</a></td>
			<td>Generate starter code for a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/plugin-tests/">plugin-tests</a></td>
			<td>Generate files needed for running PHPUnit tests in a plugin.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/post-type/">post-type</a></td>
			<td>Generate PHP code for registering a custom post type.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/taxonomy/">taxonomy</a></td>
			<td>Generate PHP code for registering a custom taxonomy.</td>
		</tr>
		<tr>
			<td><a href="/commands/scaffold/theme-tests/">theme-tests</a></td>
			<td>Generate files needed for running PHPUnit tests in a theme.</td>
		</tr>
	</tbody>
</table>
