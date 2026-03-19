# Exit Codes

WP-CLI follows widely-adopted Unix conventions for exit codes, where `0` signals success and any non-zero value signals failure. Scripts that call WP-CLI commands can inspect the exit code to determine whether to continue, retry, or abort.

## Standard exit codes

| Exit code | Meaning |
|:----------|:--------|
| `0` | Command completed successfully. The requested operation was performed as expected. |
| `1` | Command failed. WP-CLI could not perform the operation as expected (e.g. invalid arguments, WordPress not found, a fatal error was encountered). |

`WP_CLI::error()` ([doc](https://make.wordpress.org/cli/handbook/references/internal-api/wp-cli-error/)) is the conventional way to report a failure and exit with code `1`.

`WP_CLI::halt()` ([doc](https://make.wordpress.org/cli/handbook/references/internal-api/wp-cli-halt/)) can be used to exit with a specific non-zero code when the command needs to communicate a particular outcome to the calling script.

## Using non-standard exit codes

Some commands produce a meaningful binary result and communicate it through the exit code rather than output. For example:

* `wp plugin is-installed <plugin>` exits with `0` if the plugin is installed, `1` if it is not.
* `wp theme is-installed <theme>` follows the same pattern.
* `wp core is-installed` exits with `0` when WordPress is installed, `1` when it is not.

Use a non-standard exit code when:

1. The command result is binary (pass/fail, found/not-found) and is intended to be tested directly in a shell conditional.
2. The behavior deviates from the default `0`/`1` convention and the deviation is intentional and documented.

Do **not** return non-zero exit codes for conditions that are informational rather than erroneous (e.g. a list command that finds no items is still a successful operation).

## Using exit codes in scripts

Because WP-CLI uses standard exit codes, you can use WP-CLI commands directly in shell conditionals:

```bash
# Check if a plugin is installed before trying to activate it
if wp plugin is-installed my-plugin; then
    wp plugin activate my-plugin
else
    echo "Plugin not installed"
    exit 1
fi
```

You can also inspect `$?` after any WP-CLI command to check whether it succeeded:

```bash
wp core update
if [ "$?" -ne 0 ]; then
    echo "Update failed"
fi
```
