---
layout: default
title: 'wp rewrite'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; rewrite</small>

`wp rewrite` - Manage rewrite rules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arewrite+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### EXAMPLES

    # Flush rewrite rules
    $ wp rewrite flush
    Success: Rewrite rules flushed.

    # Update permalink structure
    $ wp rewrite structure '/%year%/%monthnum%/%postname%'
    Success: Rewrite structure set.

    # List rewrite rules
    $ wp rewrite list --format=csv
    match,query,source
    ^wp-json/?$,index.php?rest_route=/,other
    ^wp-json/(.*)?,index.php?rest_route=/$matches[1],other
    category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/embed/?$,index.php?category_name=$matches[1]&amp;embed=true,category



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
			<td><a href="/commands/rewrite/flush/">flush</a></td>
			<td>Flush rewrite rules.</td>
		</tr>
		<tr>
			<td><a href="/commands/rewrite/list/">list</a></td>
			<td>Get a list of the current rewrite rules.</td>
		</tr>
		<tr>
			<td><a href="/commands/rewrite/structure/">structure</a></td>
			<td>Update the permalink structure.</td>
		</tr>
	</tbody>
</table>
