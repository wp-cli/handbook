# wp dist-archive

Create a distribution archive based on a project's .distignore file.

This command runs on the `before_wp_load` hook, just before the WP load process begins.

For a plugin in a directory 'wp-content/plugins/hello-world', this command creates a distribution archive 'wp-content/plugins/hello-world.zip'.

You can specify files or directories you'd like to exclude from the archive with a .distignore file in your project repository:

```
.distignore
.editorconfig
.git
.gitignore
.travis.yml
circle.yml
```

Use one distribution archive command for many projects, instead of a bash script in each project.

### OPTIONS

&lt;path&gt;
: Path to the project that includes a .distignore file.

[&lt;target&gt;]
: Path and optional file name for the distribution archive. If only a path is provided, the file name defaults to the project directory name plus the version, if discoverable. Also, if only a path is given, the directory that it points to has to already exist for the command to function correctly.

[\--create-target-dir]
: Automatically create the target directory as needed.

[\--plugin-dirname=&lt;plugin-slug&gt;]
: Set the archive extract directory name. Defaults to project directory name.

[\--format=&lt;format&gt;]
: Choose the format for the archive.
\---
default: zip
options:
  - zip
  - targz
\---

[\--filename-format=&lt;filename-format&gt;]
: Use a custom format for archive filename. Available substitutions: {name}, {version}. This is ignored if the &lt;target&gt; parameter is provided or the version cannot be determined.
\---
default: "{name}.{version}"
\---

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
