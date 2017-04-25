# wp post-type

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-type+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage post types.

### EXAMPLES

    # Get details about a post type
    $ wp post-type get page --fields=name,label,hierarchical --format=json
    {"name":"page","label":"Pages","hierarchical":true}

    # List post types with 'post' capability type
    $ wp post-type list --capability_type=post --fields=name,public
    +---------------+--------+
    | name          | public |
    +---------------+--------+
    | post          | 1      |
    | attachment    | 1      |
    | revision      |        |
    | nav_menu_item |        |
    +---------------+--------+



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
			<td><a href="https://developer.wordpress.org/cli/commands/post-type/get/">get</a></td>
			<td>Get details about a registered post type.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/post-type/list/">list</a></td>
			<td>List registered post types.</td>
		</tr>
	</tbody>
</table>
