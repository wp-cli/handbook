# Running Commands Remotely

## Using an SSH connection

WP-CLI accepts an `--ssh=<host>` global parameter for running a command against a remote WordPress install.

Under the hood, WP-CLI proxies commands to the ssh executable, which then passes them to WP-CLI installed on the remote machine. Your syntax for `--ssh=<host>` can be any of the following:

* Just the host (e.g. `wp --ssh=runcommand.io`), which means the user will be inferred from your current system user, and the path will be the SSH user’s home directory.
* The user and the host (e.g. `wp --ssh=runcommand@runcommand.io`).
* The user, the host, and the path to the WordPress install (e.g. `wp --ssh=runcommand@runcommand.io~/webapps/production`). The path comes immediately after the TLD of the host.
* A known alias, stored in `~/.ssh/config` (e.g. `wp --ssh=rc` for the `@rc` alias).

**Note: you need to have a copy of WP-CLI installed on the remote server, accessible as `wp`.**

Futhermore, `--ssh=<host>` won’t load your `~/.bash_profile` if you have a shell alias defined, or are extending the `$PATH` environment variable. If this affects you, [here’s a more thorough explanation](https://make.wordpress.org/cli/handbook/running-commands-remotely/#making-wp-cli-accessible-on-a-remote-server) of how you can make `wp` accessible.

## Aliases

WP-CLI aliases are shortcuts you register in your `wp-cli.yml` or `config.yml` to effortlessly run commands against any WordPress install.

For instance, when you are working locally, have registered a new rewrite rule and need to flush rewrites inside of your Vagrant-based virtual machine, you can run:

```
# Run the flush command on the development environment
$ wp @dev rewrite flush
Success: Rewrite rules flushed.
```

Then, once the code goes to production, you can run:

```
# Run the flush command on the production environment
$ wp @prod rewrite flush
Success: Rewrite rules flushed.
```

You don't need to SSH into machines, change directories, and generally spend a full minute to get to a given WordPress install, you can just let WP-CLI know what machine to work with and it knows how to make the actual connection.

Additionally, alias groups let you register groups of aliases. If I want to run a command against both configured example sites, I can use a group like `@both`:

```
# Run the update check on both environments
$ wp @both core check-update
Success: WordPress is at the latest version.
Success: WordPress is at the latest version.
```

Aliases can be registered in your project’s `wp-cli.yml` file, or your user’s global `~/.wp-cli/config.yml` file:

```yaml
@prod:
  ssh: dev_user@example.com~/webapps/production
@dev:
  ssh: vagrant@192.168.50.10/srv/www/example.dev
@both:
  - @prod
  - @dev
```

You can find more information about how to set up your configuration files in the [Config section](https://make.wordpress.org/cli/handbook/config/#config-files).

## Running custom commands remotely

If you want to run a custom command on a remote server, that custom command needs to be installed on the remote server, but it does not have to be installed on the local machine you're launching `wp` from.

You can use the WP-CLI package manager remotely to install custom commands to remote machines.

Example:

```
# The command is not installed on either local or remote machine
$ wp db ack
Error: 'ack' is not a registered subcommand of 'db'. See 'wp help db'.
$ wp @dev db ack
Error: 'ack' is not a registered subcommand of 'db'. See 'wp help db'.

# To make the command work on the remote machine, we can install it remotely
# through the WP-CLI package manager
$ wp @dev package install runcommand/db-ack
Installing package runcommand/db-ack (dev-master)
Updating /home/vagrant/.wp-cli/packages/composer.json to require the package...
Using Composer to install the package...
---
Loading composer repositories with package information
Updating dependencies
Resolving dependencies through SAT
Dependency resolution completed in 0.311 seconds
Analyzed 4726 packages to resolve dependencies
Analyzed 162199 rules to resolve dependencies
Package operations: 1 install, 0 updates, 0 removals
Installs: runcommand/db-ack:dev-master aff8ccc
 - Installing runcommand/db-ack (dev-master aff8ccc)
Writing lock file
Generating autoload files
---
Success: Package installed.

# Now we can run the command remotely, even though it is not installed locally
$ wp @dev db ack test_email@example.com
wp_users:user_email
9:test_email@example.com
```

## Making WP-CLI accessible on a remote server

Running a command remotely through SSH requires having `wp` accessible on the `$PATH` on the remote server. Because SSH connections don’t load `~/.bashrc` or `~/.zshrc`, you may need to specify a custom `$PATH` when using `wp --ssh=<host>`.

You can do so by hooking into the `before_ssh` hook, and defining an environment variable with the command you’d like to run:

```php
WP_CLI::add_hook( 'before_ssh', function() {

    $host = WP_CLI\Utils\parse_ssh_url(
        WP_CLI::get_runner()->config['ssh'],
        PHP_URL_HOST
    );

    switch( $host ) {
        case 'runcommand.io':
            putenv( 'WP_CLI_SSH_PRE_CMD=export PATH=$HOME/bin:$PATH' );
            break;
    }
} );
```

If you put the code above in a `pre-ssh.php` file, you can load it for your entire environment by requiring it from your `~/.wp-cli/config.yml` file:

```yaml
require:
  - pre-ssh.php
```
