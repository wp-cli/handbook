# wp ai generate

Generates AI content.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;type&gt;
: Type of content to generate.
\---
options:
  - text
  - image
\---

&lt;prompt&gt;
: The prompt to send to the AI.

[\--model=&lt;models&gt;]
: Comma-separated list of models in order of preference. Format: "provider,model" (e.g., "openai,gpt-4" or "openai,gpt-4,anthropic,claude-3").

[\--provider=&lt;provider&gt;]
: Specific AI provider to use (e.g., "openai", "anthropic", "google").

[\--temperature=&lt;temperature&gt;]
: Temperature for generation, typically between 0.0 and 1.0. Lower is more deterministic.

[\--top-p=&lt;top-p&gt;]
: Top-p (nucleus sampling) parameter. Value between 0.0 and 1.0.

[\--top-k=&lt;top-k&gt;]
: Top-k sampling parameter. Positive integer.

[\--max-tokens=&lt;tokens&gt;]
: Maximum number of tokens to generate.

[\--system-instruction=&lt;instruction&gt;]
: System instruction to guide the AI's behavior.

[\--destination-file=&lt;file&gt;]
: For image generation, path to save the generated image.

[\--stdout]
: Output the whole image using standard output (incompatible with --destination-file=)

[\--format=&lt;format&gt;]
: Output format for text.
\---
default: text
options:
  - text
  - json
\---

### EXAMPLES

    # Generate text
    $ wp ai generate text "Explain WordPress in one sentence"

    # Generate text with specific settings
    $ wp ai generate text "List 3 WordPress features" --temperature=0.1 --max-tokens=100

    # Generate with top-p and top-k sampling
    $ wp ai generate text "Write a story" --top-p=0.9 --top-k=40

    # Generate with model preferences
    $ wp ai generate text "Write a haiku" --model=openai,gpt-4,anthropic,claude-3

    # Generate with system instruction
    $ wp ai generate text "Explain AI" --system-instruction="Explain as if to a 5-year-old"

    # Generate image
    $ wp ai generate image "A minimalist WordPress logo" --output=wp-logo.png

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
