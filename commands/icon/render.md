# wp icon render

Renders the SVG markup of a registered icon.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Unlike `wp icon get <name> --field=content`, which prints the icon as it was registered, this applies the same sizing and accessibility attributes that WordPress applies when rendering the icon on the front end.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;name&gt;
: Namespaced icon name, in the form "collection/icon-name".

[\--size=&lt;size&gt;]
: Width and height of the icon in pixels. Pass "none" to leave the intrinsic dimensions of the SVG untouched.
\---
default: 24
\---

[\--class=&lt;class&gt;]
: Additional CSS class names, separated by spaces.

[\--label=&lt;label&gt;]
: Accessible label for the icon. Without it, the icon is rendered as decorative and hidden from assistive technology.

### EXAMPLES

    # Render an icon at its default size of 24 pixels
    $ wp icon render core/plus
    &lt;svg aria-hidden="true" focusable="false" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"&gt;
        &lt;path d="M11 12.5V17.5H12.5V12.5H17.5V11H12.5V6H11V11H6V12.5H11Z" /&gt;
    &lt;/svg&gt;

    # Render a larger icon with a CSS class and an accessible label
    $ wp icon render core/plus --size=48 --class=my-icon --label="Add item" > plus.svg

    # Keep the intrinsic dimensions of the SVG
    $ wp icon render core/plus --size=none

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
