---
layout: default
title: Configuration
---

# Configuration

<p><small>Quick links: <a href="#overview">Overview</a> | <a href="#global-parameters">Global parameters</a> | <a href="#config-files">Config files</a> | <a href="#environment-variables">Environment variables</a></small></p>

## Overview

WP-CLI has a series of global parameters (e.g. `--path=<path>` and `--user=<user>`) which work with all commands. They are called *global parameters* because they affect how WP-CLI interacts with WordPress, and have the same behavior across all commands.

```
# `--user=<user>` sets request to a specific WordPress user
$ wp --user=wpcli eval 'echo wp_get_current_user()->user_email;'
wpcli@example.com
```

For repeated usage, WP-CLI can also read options from a YAML configuration file (e.g. `wp-cli.yml`). These configuration files enable specifying default values for both global parameters and subcommand-specific arguments.

```
# WordPress develop includes a `wp-cli.yml` to enable easy use of WP-CLI
$ pwd
/srv/www/wordpress-develop.dev
$ cat wp-cli.yml
path: src/
```

Arguments are interpreted following an order of precedence, from highest priority to lowest:

1. Command-line arguments.
1. `wp-cli.local.yml` file inside the current working directory (or upwards).
1. `wp-cli.yml` file inside the current working directory (or upwards).
1. `~/.wp-cli/config.yml` file (path can be changed by setting the `WP_CLI_CONFIG_PATH` environment variable).
1. WP-CLI defaults.

## Global parameters

The table below lists the available <span class="argument">arguments</span> (specified on the command-line) and <span class="option">options</span> (specified in the configuration file).

<table>
	<thead>
	<tr>
		<th>Description</th>
		<th><span class="argument">Argument</span></th>
		<th><span class="option">Option</span></th>
	</tr>
	</thead>
	<tbody>
	{% include param-list.html %}
	</tbody>
</table>

## Config files

WP-CLI can read options from a few configuration file types (when present):

1. `wp-cli.local.yml` file inside the current working directory (or upwards).
1. `wp-cli.yml` file inside the current working directory (or upwards).
1. `~/.wp-cli/config.yml` file (path can be changed by setting the `WP_CLI_CONFIG_PATH` environment variable).

Besides the global parameters described above, configuration files can also contain defaults for any subcommand, as well as aliases to one or more WordPress installs.

Here's an annotated example `wp-cli.yml` file:

	# Global parameter defaults
	path: wp-core
	url: http://example.com
	user: admin
	color: false
	disabled_commands:
	  - db drop
	  - plugin install
	require:
	  - path-to/command.php

	# Subcommand defaults (e.g. `wp core config`)
	core config:
		dbuser: root
		dbpass: 
		extra-php: |
			define( 'WP_DEBUG', true );
			define( 'WP_POST_REVISIONS', 50 );

	# Aliases to other WordPress installs (e.g. `wp @staging rewrite flush`)
	# An alias can include 'user', 'url', 'path', 'ssh', or 'http'
	@staging:
		ssh: wpcli@staging.wp-cli.org
		user: wpcli
		path: /srv/www/staging.wp-cli.org
	@production:
		ssh: wpcli@wp-cli.org:2222
		user: wpcli
		path: /srv/www/wp-cli.org

## Environment variables

WP-CLI's behavior can be changed at runtime through the use of environment variables:

* `WP_CLI_CACHE_DIR` - Directory to store the WP-CLI file cache. Default is `~/.wp-cli/cache/`.
* `WP_CLI_CONFIG_PATH` - Path to the global `config.yml` file. Default is `~/.wp-cli/config.yml`.
* `WP_CLI_DISABLE_AUTO_CHECK_UPDATE` - Disable WP-CLI automatic checks for updates.
* `WP_CLI_PACKAGES_DIR` - Directory to store packages installed through WP-CLI's package management. Default is `~/.wp-cli/packages/`.
* `WP_CLI_SSH_PRE_CMD` - When using `--ssh=<ssh>`, perform a command before WP-CLI calls WP-CLI on the remote server.

To set an environment variable on demand, simply place the environment variable definition before the WP-CLI command you mean to run.

    # Use vim to edit a post
    $ EDITOR=vim wp post edit 1

To set the same environment variable value for every shell session, you’ll need to include the environment variable definition in your `~/.bashrc` or `~/.zshrc` file

    # Always use vim to edit a post
    export EDITOR=vim
