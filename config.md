# Config

WP-CLI has a series of global parameters (e.g. `--path=<path>` and `--user=<user>`) which work with all commands. They are called *global parameters* because they affect how WP-CLI interacts with WordPress, and have the same behavior across all commands.

```
# `--user=<user>` sets request to a specific WordPress user
$ wp --user=wpcli eval 'echo wp_get_current_user()->user_email;'
wpcli@example.com
```

For repeated usage, WP-CLI can also read options from a YAML configuration file (e.g. `wp-cli.yml`). WP-CLI automatically discovers configuration files on the filesystem based on rules defined below. These configuration files enable specifying default values for both global parameters and subcommand-specific arguments.

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
		<tr>
		<td>
			Path to the WordPress files.
			<br />
			Default value: <code>null</code>
		</td>
		<td>
			<code class="flag">--path=&lt;path&gt;</code>
		</td>
		<td>
			<code class="option">path: &lt;path&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Perform operation against a remote server over SSH.
			<br />
			Default value: <code>null</code>
		</td>
		<td>
			<code class="flag">--ssh=[&lt;user&gt;@]&lt;host&gt;[:&lt;port&gt;][&lt;path&gt;]</code>
		</td>
		<td>
			<code class="option">ssh: [&lt;user&gt;@]&lt;host&gt;[:&lt;port&gt;][&lt;path&gt;]</code>
		</td>
	</tr>
	<tr>
		<td>
			Perform operation against a remote WordPress install over HTTP.
			<br />
			Default value: <code>null</code>
		</td>
		<td>
			<code class="flag">--http=&lt;http&gt;</code>
		</td>
		<td>
			<code class="option">http: &lt;http&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Pretend request came from given URL. In multisite, this argument is how the target site is specified.
			<br />
			Default value: <code>null</code>
		</td>
		<td>
			<code class="flag">--url=&lt;url&gt;</code>
		</td>
		<td>
			<code class="option">url: &lt;url&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Set the WordPress user.
			<br />
			Default value: <code>null</code>
		</td>
		<td>
			<code class="flag">--user=&lt;id|login|email&gt;</code>
		</td>
		<td>
			<code class="option">user: &lt;id|login|email&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Skip loading all or some plugins. Note: mu-plugins are still loaded.
			<br />
			Default value: <code>&quot;&quot;</code>
		</td>
		<td>
			<code class="flag">--skip-plugins[=&lt;plugin&gt;]</code>
		</td>
		<td>
			<code class="option">skip-plugins: &lt;list&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Skip loading all or some themes.
			<br />
			Default value: <code>&quot;&quot;</code>
		</td>
		<td>
			<code class="flag">--skip-themes[=&lt;theme&gt;]</code>
		</td>
		<td>
			<code class="option">skip-themes: &lt;list&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Skip loading all installed packages.
			<br />
			Default value: <code>false</code>
		</td>
		<td>
			<code class="flag">--skip-packages</code>
		</td>
		<td>
			<code class="option">skip-packages: &lt;bool&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Load PHP file before running the command (may be used more than once).
			<br />
			Default value: <code>[]</code>
		</td>
		<td>
			<code class="flag">--require=&lt;path&gt;</code>
		</td>
		<td>
			<code class="option">require: &lt;path&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Execute PHP code before running the command (may be used more than once).
			<br />
			Default value: <code>[]</code>
		</td>
		<td>
			<code class="flag">--exec=&lt;php-code&gt;</code>
		</td>
		<td>
			<code class="option">exec: &lt;php-code&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			(Sub)commands to disable.
			<br />
			Default value: <code>[]</code>
		</td>
		<td>
			<em>Not available as a flag</em>
		</td>
		<td>
			<code class="option">disabled_commands: &lt;list&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Whether to colorize the output.
			<br />
			Default value: <code>&quot;auto&quot;</code>
		</td>
		<td>
			<code class="flag">--[no-]color</code>
		</td>
		<td>
			<code class="option">color: &lt;bool&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Show all PHP errors; add verbosity to WP-CLI bootstrap.
			<br />
			Default value: <code>false</code>
		</td>
		<td>
			<code class="flag">--debug[=&lt;group&gt;]</code>
		</td>
		<td>
			<code class="option">debug: &lt;group&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values.
			<br />
			Default value: <code>false</code>
		</td>
		<td>
			<code class="flag">--prompt[=&lt;assoc&gt;]</code>
		</td>
		<td>
			<em>Not available as an option</em>
		</td>
	</tr>
	<tr>
		<td>
			Suppress informational messages.
			<br />
			Default value: <code>false</code>
		</td>
		<td>
			<code class="flag">--quiet</code>
		</td>
		<td>
			<code class="option">quiet: &lt;bool&gt;</code>
		</td>
	</tr>
	<tr>
		<td>
			List of Apache Modules that are to be reported as loaded.
			<br />
			Default value: <code>[]</code>
		</td>
		<td>
			<em>Not available as a flag</em>
		</td>
		<td>
			<code class="option">apache_modules: &lt;list&gt;</code>
		</td>
	</tr>

	</tbody>
</table>

## Config files

WP-CLI can automatically discover and read options from a few configuration file types (when present):

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

	# Subcommand defaults (e.g. `wp config create`)
	config create:
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

	# Aliases can reference other aliases to create alias groups
	# Alias groups can be nested
	@both:
	 - @staging
	 - @production

	# '_' is a special value denoting configuration options for this wp-cli.yml
	_:
		# Merge subcommand defaults from the upstream config.yml, instead of overriding
		merge: true
		# Inherit configuration from an arbitrary YAML file
		inherit: prod.yml

## Environment variables

WP-CLI's behavior can be changed at runtime through the use of environment variables:

* `WP_CLI_CACHE_DIR` - Directory to store the WP-CLI file cache. Default is `~/.wp-cli/cache/`.
* `WP_CLI_CONFIG_PATH` - Path to the global `config.yml` file. Default is `~/.wp-cli/config.yml`.
* `WP_CLI_CUSTOM_SHELL` - Allows the user to override the default `/bin/bash` shell used.
* `WP_CLI_DISABLE_AUTO_CHECK_UPDATE` - Disable WP-CLI automatic checks for updates.
* `WP_CLI_PACKAGES_DIR` - Directory to store packages installed through WP-CLI's package management. Default is `~/.wp-cli/packages/`.
* `WP_CLI_PHP` - PHP binary path to use when overriding the system default (only works for non-Phar installation).
* `WP_CLI_PHP_ARGS` - Arguments to pass to the PHP binary when invoking WP-CLI (only works for non-Phar installation).
* `WP_CLI_SSH_PRE_CMD` - When using `--ssh=<ssh>`, perform a command before WP-CLI calls WP-CLI on the remote server.
* `WP_CLI_STRICT_ARGS_MODE` - Avoid ambiguity by telling WP-CLI to treat any arguments before the command as global, and after the command as local.
* `WP_CLI_SUPPRESS_GLOBAL_PARAMS` - Set to `true` to skip showing the global parameters at the end of the help screen. This saves screen estate for advanced users.

To set an environment variable on demand, simply place the environment variable definition before the WP-CLI command you mean to run.

    # Use vim to edit a post
    $ EDITOR=vim wp post edit 1

To set the same environment variable value for every shell session, you’ll need to include the environment variable definition in your `~/.bashrc` or `~/.zshrc` file

    # Always use vim to edit a post
    export EDITOR=vim
