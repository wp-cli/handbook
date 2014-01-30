---
layout: default
title: Configuration
---
The following is a list of the currently supported configuration options. They can be specified by creating a `wp-cli.yml` file in your site's root directory.

Most can also be passed directly to the `wp` executable.

The order of precedence is:

1. Command-line flags
1. `wp-cli.local.yml` file
1. `wp-cli.yml` file
1. `~/.wp-cli/config.yml` file
1. Defaults

<table>
	<thead>
	<tr>
		<th>Config</th>
		<th>Flag</th>
		<th>Default</th>
		<th>Description</th>
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

	core install:
	  admin_user: billy
	  admin_email: billy@example.com

The path to the global config file (which defaults to `~/.wp-cli/config.yml`) can be changed by setting the `WP_CLI_CONFIG_PATH` environment variable.
