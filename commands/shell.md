# wp shell

Opens an interactive PHP console for running and testing PHP code.

`wp shell` allows you to evaluate PHP statements and expressions interactively, from within a WordPress environment. Type a bit of code, hit enter, and see the code execute right before you. Because WordPress is loaded, you have access to all the functions, classes and globals that you can use within a WordPress plugin, for example.

The `restart` command reloads the shell by spawning a new PHP process, allowing modified code to be fully reloaded. Note that this requires the `pcntl_exec()` function. If not available, the shell restarts in-process, which resets variables but doesn't reload PHP files.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--basic]
: Force the use of WP-CLI's built-in PHP REPL, even if the Boris or PsySH PHP REPLs are available.

[\--watch=&lt;path&gt;]
: Watch a file or directory for changes and automatically restart the shell. Only works with the built-in REPL (--basic).

[\--hook=&lt;hook&gt;]
: Ensure that a specific WordPress action hook has fired before starting the shell. This validates that the preconditions associated with that hook are met. Only hooks that have already been triggered can be used (e.g., init, plugins_loaded, wp_loaded).
\---
default: ''
\---

### EXAMPLES

    # Call get_bloginfo() to get the name of the site.
    $ wp shell
    wp> get_bloginfo( 'name' );
    => string(6) "WP-CLI"

    # Restart the shell to reload code changes.
    $ wp shell
    wp> restart
    Restarting shell in new process...
    wp&gt;

    # Watch a directory for changes and auto-restart.
    $ wp shell --watch=wp-content/plugins/my-plugin
    wp> // Make changes to files in the plugin directory
    Detected changes in wp-content/plugins/my-plugin, restarting shell...
    wp&gt;

    # Start a shell, ensuring the 'init' hook has already fired.
    $ wp shell --hook=init

    # Start a shell in quiet mode, suppressing return value output.
    $ wp shell --quiet
    wp> $a = "hello";
    wp&gt;

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
