# wp taxonomy

<small>[Commands](/commands/) &raquo; taxonomy</small>

`wp taxonomy` - Manage taxonomies.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ataxonomy+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # List all taxonomies with 'post' object type.
    $ wp taxonomy list --object_type=post --fields=name,public
    +-------------+--------+
    | name        | public |
    +-------------+--------+
    | category    | 1      |
    | post_tag    | 1      |
    | post_format | 1      |
    +-------------+--------+

    # Get capabilities of 'post_tag' taxonomy.
    $ wp taxonomy get post_tag --field=cap
    {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}



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
			<td><a href="/commands/taxonomy/get/">get</a></td>
			<td>Get details about a registered taxonomy.</td>
		</tr>
		<tr>
			<td><a href="/commands/taxonomy/list/">list</a></td>
			<td>List registered taxonomies.</td>
		</tr>
	</tbody>
</table>
