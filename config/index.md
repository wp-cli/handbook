---
layout: default
title: Configuration
---
WP-CLI has a series of global parameters which work with all commands. They can be specified either as flags for the `wp` executable in the terminal, or defined in a YAML config file.

The order of precedence, from highest priority to lowest, is:

1. Command-line flags
1. `wp-cli.local.yml` file inside the current working directory (or upwards)
1. `wp-cli.yml` file inside the current working directory (or upwards)
1. `~/.wp-cli/config.yml` file (path can be changed by setting the `WP_CLI_CONFIG_PATH` environment variable)
1. Defaults

The table below lists the available <span class="option">options</span> (specified in the configuration file) and <span class="flag">flags</span> (specified on the command-line).

<table>
	<thead>
	<tr>
		<th>Description</th>
		<th><span class="option">Option</span></th>
		<th><span class="flag">Flag</span></th>
	</tr>
	</thead>
	<tbody>
	{% include param-list.html %}
	</tbody>
</table>

Besides the global parameters described above, config files can also contain defaults for any subcommand.

Example `wp-cli.yml` file:

	path: wp-core
	url: http://example.com
	user: admin
	color: false
	disabled_commands:
	  - db drop
	  - plugin install
	require:
	  - path-to/command.php

	core config:
		extra-php: |
			define( 'WP_DEBUG', true );
			define( 'WP_POST_REVISIONS', 50 );
