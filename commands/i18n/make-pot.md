# wp i18n make-pot

Create a POT file for a WordPress project.

Scans PHP, Blade-PHP and JavaScript files for translatable strings, as well as theme stylesheets and plugin files if the source directory is detected as either a plugin or theme.

### OPTIONS

&lt;source&gt;
: Directory to scan for string extraction.

[&lt;destination&gt;]
: Name of the resulting POT file.

[\--slug=&lt;slug&gt;]
: Plugin or theme slug. Defaults to the source directory's basename.

[\--domain=&lt;domain&gt;]
: Text domain to look for in the source code, unless the `--ignore-domain` option is used. By default, the "Text Domain" header of the plugin or theme is used. If none is provided, it falls back to the project slug.

[\--ignore-domain]
: Ignore the text domain completely and extract strings with any text domain.

[\--merge[=&lt;paths&gt;]]
: Comma-separated list of POT files whose contents should be merged with the extracted strings. If left empty, defaults to the destination POT file. POT file headers will be ignored.

[\--subtract=&lt;paths&gt;]
: Comma-separated list of POT files whose contents should act as some sort of denylist for string extraction. Any string which is found on that denylist will not be extracted. This can be useful when you want to create multiple POT files from the same source directory with slightly different content and no duplicate strings between them.

[\--subtract-and-merge]
: Whether source code references and comments from the generated POT file should be instead added to the POT file used for subtraction. Warning: this modifies the files passed to `--subtract`!

[\--include=&lt;paths&gt;]
: Comma-separated list of files and paths that should be used for string extraction. If provided, only these files and folders will be taken into account for string extraction. For example, `--include="src,my-file.php` will ignore anything besides `my-file.php` and files in the `src` directory. Simple glob patterns can be used, i.e. `--include=foo-*.php` includes any PHP file with the `foo-` prefix. Leading and trailing slashes are ignored, i.e. `/my/directory/` is the same as `my/directory`.

[\--exclude=&lt;paths&gt;]
: Comma-separated list of files and paths that should be skipped for string extraction. For example, `--exclude=".github,myfile.php` would ignore any strings found within `myfile.php` or the `.github` folder. Simple glob patterns can be used, i.e. `--exclude=foo-*.php` excludes any PHP file with the `foo-` prefix. Leading and trailing slashes are ignored, i.e. `/my/directory/` is the same as `my/directory`. The following files and folders are always excluded: node_modules, .git, .svn, .CVS, .hg, vendor, *.min.js.

[\--headers=&lt;headers&gt;]
: Array in JSON format of custom headers which will be added to the POT file. Defaults to empty array.

[\--location]
: Whether to write `#: filename:line` lines. Defaults to true, use `--no-location` to skip the removal. Note that disabling this option makes it harder for technically skilled translators to understand each message’s context.

[\--skip-js]
: Skips JavaScript string extraction. Useful when this is done in another build step, e.g. through Babel.

[\--skip-php]
: Skips PHP string extraction.

[\--skip-blade]
: Skips Blade-PHP string extraction.

[\--skip-block-json]
: Skips string extraction from block.json files.

[\--skip-theme-json]
: Skips string extraction from theme.json files.

[\--skip-audit]
: Skips string audit where it tries to find possible mistakes in translatable strings. Useful when running in an automated environment.

[\--file-comment=&lt;file-comment&gt;]
: String that should be added as a comment to the top of the resulting POT file. By default, a copyright comment is added for WordPress plugins and themes in the following manner:

     ```
     Copyright (C) 2018 Example Plugin Author
     This file is distributed under the same license as the Example Plugin package.
     ```

     If a plugin or theme specifies a license in their main plugin file or stylesheet, the comment looks like
     this:

     ```
     Copyright (C) 2018 Example Plugin Author
     This file is distributed under the GPLv2.
     ```

[\--package-name=&lt;name&gt;]
: Name to use for package name in the resulting POT file's `Project-Id-Version` header. Overrides plugin or theme name, if applicable.

### EXAMPLES

    # Create a POT file for the WordPress plugin/theme in the current directory
    $ wp i18n make-pot . languages/my-plugin.pot

    # Create a POT file for the continents and cities list in WordPress core.
    $ wp i18n make-pot . continents-and-cities.pot --include="wp-admin/includes/continents-cities.php"
    --ignore-domain

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
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
