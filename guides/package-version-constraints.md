# Package Version Constraints

When installing WP-CLI packages using the `wp package install` command, you can specify version constraints to control which version of a package is installed. This is particularly useful for ensuring compatibility, testing specific versions, or maintaining stability in production environments.

## Syntax

Version constraints are specified by appending a colon (`:`) followed by the constraint to the package name:

```bash
wp package install <package-name>:<version-constraint>
```

## Common Version Constraints

WP-CLI uses Composer's version constraint syntax. Here are the most commonly used constraints:

### Exact Version

Install a specific version:

```bash
wp package install wp-cli/server-command:2.0.0
```

### Version Range

Install a version within a specific range:

```bash
# Install any version >= 1.0 and < 2.0
wp package install wp-cli/server-command:^1.0

# Install any version >= 1.2 and < 1.3
wp package install wp-cli/server-command:~1.2
```

### Stability Flags

Install packages with specific stability requirements:

```bash
# Install the latest stable release
wp package install wp-cli/server-command:@stable

# Install the latest development version
wp package install wp-cli/server-command:@dev

# Install the latest release candidate
wp package install wp-cli/server-command:@rc

# Install the latest beta version
wp package install wp-cli/server-command:@beta

# Install the latest alpha version
wp package install wp-cli/server-command:@alpha
```

### Wildcard Versions

Use wildcards to match multiple versions:

```bash
# Install any 1.x version
wp package install wp-cli/server-command:1.*

# Install any 1.2.x version
wp package install wp-cli/server-command:1.2.*
```

### Development Branches

Install directly from a development branch:

```bash
# Install from the main branch
wp package install wp-cli/server-command:dev-main

# Install from a feature branch
wp package install wp-cli/server-command:dev-feature-branch
```

## Caret (^) vs Tilde (~) Operators

### Caret Operator (^)

The caret operator allows updates that do not change the leftmost non-zero digit:

- `^1.2.3` is equivalent to `>=1.2.3 <2.0.0`
- `^0.3.0` is equivalent to `>=0.3.0 <0.4.0`
- `^0.0.3` is equivalent to `>=0.0.3 <0.0.4`

This is useful for semantic versioning, where you want to allow non-breaking changes.

### Tilde Operator (~)

The tilde operator allows the last digit specified to go up:

- `~1.2.3` is equivalent to `>=1.2.3 <1.3.0`
- `~1.2` is equivalent to `>=1.2.0 <2.0.0`

This is useful when you want to allow patch-level updates but not minor version updates.

## Examples

### Installing a Stable Package

To install the latest stable version of a package:

```bash
wp package install wp-cli/server-command:@stable
```

### Installing a Specific Version

To install a specific version for testing or compatibility:

```bash
wp package install wp-cli/server-command:1.0.0
```

### Installing with Semantic Versioning

To install a package and allow non-breaking updates:

```bash
wp package install wp-cli/server-command:^2.0
```

### Installing from a Development Branch

To install the latest development version:

```bash
wp package install wp-cli/server-command:dev-main
```

## Additional Resources

For more detailed information about version constraints and advanced usage, see the official [Composer documentation on versions and constraints](https://getcomposer.org/doc/articles/versions.md).
