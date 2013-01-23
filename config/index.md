---
layout: default
title: Configuration
---
The following is a list of the currently supported configuration options. These can all be specified by creating a `wp-cli.yml` file in your site's root directory.

Most can also be passed directly to the `wp` executable.

The order of precedence is:

1. Command-line flags
1. `wp-cli.local.yml` file
1. `wp-cli.yml` file
1. Defaults

<table>
	<thead>
	<tr>
		<td>Config</td>
		<td>Flag</td>
		<td>Default</td>
		<td>Description</td>
	</tr>
	</thead>
	<tbody>
	{% include param-list.html %}
	</tbody>
</table>

Example `wp-cli.yml` file:

	path: wp-core
	url: http://example.com
	user: admin
	color: false
	disabled_commands:
	  - db drop
	  - plugin install
