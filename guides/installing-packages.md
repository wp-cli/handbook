# Installing WP-CLI Packages

WP-CLI packages are community-maintained projects built on WP-CLI. They can contain WP-CLI commands, but they can also just extend WP-CLI in some way.

To find existing packages to install, take a look at [Packagist](https://packagist.org/?type=wp-cli-package).

## Installing a Package

Use the `wp package install` command to install a package. Packages can be specified as:

* Package name from WP-CLI's package index
* Git URL accessible by the current shell user
* Path to a directory on the local machine
* Local or remote .zip file

```bash
# Install a package by name
wp package install wp-cli/server-command

# Install from a Git URL
wp package install https://github.com/wp-cli/server-command.git

# Install from a local directory
wp package install /path/to/package

# Install from a .zip file
wp package install package.zip
```

Packages are installed to `~/.wp-cli/packages/` by default. Use the `WP_CLI_PACKAGES_DIR` environment variable to provide a custom path. See also: [Sharing WP-CLI Packages](https://make.wordpress.org/cli/handbook/guides/sharing-wp-cli-packages/).

## Version Constraints

When installing WP-CLI packages, you can specify version constraints to control which version of a package is installed.

Version constraints are specified by appending a colon (`:`) followed by the constraint to the package name:

```bash
wp package install <package-name>:<version-constraint>
```

WP-CLI uses Composer's version constraint syntax. Here are some commonly used examples:

```bash
# Install a specific version
wp package install wp-cli/server-command:2.0.0

# Install with caret operator (allows non-breaking updates)
wp package install wp-cli/server-command:^1.0

# Install with tilde operator (allows patch-level updates)
wp package install wp-cli/server-command:~1.2

# Install the latest stable release
wp package install wp-cli/server-command:@stable

# Install from a development branch
wp package install wp-cli/server-command:dev-main
```

For complete documentation on version constraint syntax and operators, see the [Composer documentation on versions and constraints](https://getcomposer.org/doc/articles/versions.md).
