# Argument Syntax

WP-CLI commands use a standardized syntax to describe their arguments and options. Understanding this syntax will help you use commands correctly and avoid confusion.

## Syntax Conventions

The command synopsis uses specific formatting to indicate whether arguments are required or optional, and what type of values they accept.

### Required Arguments

Arguments without square brackets are **required** and must be provided:

* **`<argument>`** - A required positional argument that needs a value.
  * Example: `<hook>` means you must provide a hook name
  * Usage: `wp cron event schedule my_hook`

* **`--option=<value>`** - A required option that needs a value.
  * Example: `--dbname=<dbname>` means you must provide the database name
  * Usage: `wp config create --dbname=mydatabase --dbuser=root`

### Optional Arguments

Arguments enclosed in square brackets **`[ ]`** are optional:

* **`[<argument>]`** - An optional positional argument.
  * Example: `[<next-run>]` means this argument can be omitted
  * If omitted, a default value may be used

* **`[--option=<value>]`** - An optional option that accepts a value.
  * Example: `[--dbhost=<dbhost>]` means this option can be omitted
  * Often has a default value (e.g., `localhost` for `--dbhost`)
  * Usage: `wp config create --dbname=mydb --dbuser=root --dbhost=127.0.0.1`

* **`[--flag]`** - An optional boolean flag.
  * Example: `[--force]` means this flag can be included or omitted
  * When present, the flag is `true`; when absent, it's `false`
  * Usage: `wp config create --dbname=mydb --dbuser=root --force`

### Boolean Flags

Boolean flags are switches that enable or disable a feature:

* **Enabling**: Include the flag to set it to `true`
  * Example: `--force` enables force mode

* **Disabling**: Most flags can be "reversed" with a `--no-` prefix
  * Example: `--no-force` explicitly disables force mode
  * Example: `--no-color` disables color output

### Associative Arguments

Some commands accept arbitrary key-value pairs:

* **`[--<field>=<value>]`** - Accepts any field name with a value.
  * Example: `--foo=bar --baz=qux`
  * Useful for passing custom data or configuration

### Repeatable Arguments

Arguments that can be provided multiple times:

* **`[--<field>=<value>]`** - When documented as repeatable, you can provide the option multiple times.
  * Example: `--require=<path>` can be used as `--require=/path/one.php --require=/path/two.php`

### Variadic Arguments

Arguments that accept multiple values:

* **`<argument>...`** - The ellipsis (`...`) indicates the argument accepts one or more values.
  * Example: `<file>...` means you can provide multiple files
  * Usage: `wp plugin install plugin1 plugin2 plugin3`

### Value Placeholders

The text inside angle brackets describes what kind of value is expected:

* **`<id>`** - Expects a numeric identifier
* **`<file>`** - Expects a file path
* **`<url>`** - Expects a URL
* **`<name>`** - Expects a name or label
* **`<format>`** - Expects a format type (often with available options listed)

## Common Patterns

### Required Database Connection

Many commands require database connection details:

```
--dbname=<dbname> --dbuser=<dbuser> [--dbpass=<dbpass>] [--dbhost=<dbhost>]
```

* `--dbname` and `--dbuser` are required
* `--dbpass` and `--dbhost` are optional

### Format Options

Commands that output data often accept a format option:

```
[--format=<format>]
```

Common formats include: `table`, `csv`, `json`, `yaml`, `count`

### Fields and Filtering

Commands that work with multiple fields:

```
[--fields=<fields>] [--field=<field>]
```

* `--fields` typically accepts a comma-separated list
* `--field` typically returns a single field value

## Examples

Here are practical examples showing different syntax types:

```bash
# Required arguments (no brackets)
wp config create --dbname=mydb --dbuser=root

# Optional arguments with defaults
wp config create --dbname=mydb --dbuser=root --dbhost=localhost

# Boolean flags
wp plugin install hello-dolly --activate --force

# Negated boolean flags
wp plugin list --no-color

# Associative arguments
wp cron event schedule my_hook --foo=bar --baz=qux

# Multiple values
wp plugin install plugin1 plugin2 plugin3

# Optional fields with specific format options
wp post list --format=json --fields=ID,post_title,post_date
```

## Tips

* Always check the command's `OPTIONS` section to see which arguments are required
* Use `wp help <command>` to see the complete synopsis and documentation
* When in doubt about a flag, try the `--help` option: `wp <command> --help`
* Default values for optional arguments are typically listed in the `OPTIONS` section
* Quote values that contain spaces or special characters: `--title="My Post Title"`

## Related Documentation

* [Documentation Standards](https://make.wordpress.org/cli/handbook/references/documentation-standards/) - Standards for annotating WP-CLI commands
* [Commands Cookbook](https://make.wordpress.org/cli/handbook/guides/commands-cookbook/) - How commands work
* [Global Parameters](https://make.wordpress.org/cli/handbook/references/config/) - Parameters available to all commands
