# Saving Commands in WordPress CLI

## Overview

This quick start guide will guide you through the process of saving and managing custom commands in the WordPress CLI (WP-CLI). Saving commands can help streamline your workflow and make it easier to execute complex or frequently used tasks.

## Prerequisites

Ensure that you have WP-CLI installed on your system. If not, refer to the [WP-CLI Quick Start Guide](#wordpress-cli-wp-cli-quick-start-guide) for installation instructions.

## Saving Commands in `wp-cli.yml`

1. **Navigate to Your WordPress Project:**
   Open a terminal and navigate to the root directory of your WordPress project.

2. **Create or Open `wp-cli.yml`:**
   Use a text editor to create or open the `wp-cli.yml` configuration file:

   ```bash
   nano wp-cli.yml
   ```

3. **Add Custom Commands:**
   Inside the `wp-cli.yml` file, under the `commands` section, add your custom commands. For example:

   ```yaml
   commands:
     mycommand:
       run:
         - plugin activate my-plugin
         - theme activate my-theme
   ```

   Save and exit the editor.

4. **Run Custom Commands:**
   Execute your custom command using the `wp` command:

   ```bash
   wp mycommand
   ```

   This will activate the specified plugin and theme.

## Additional Tips

### Using Variables

You can use variables in your custom commands for better flexibility. For example:

```yaml
commands:
  activate-plugin:
    run:
      - plugin activate %s
```

Run the command with a plugin slug:

```bash
wp activate-plugin my-plugin
```

### Organizing Commands

Group related commands by using subcommands. For instance:

```yaml
commands:
  theme:
    run:
      - theme activate %s
      - theme update %s
```

Run the subcommands:

```bash
wp theme activate my-theme
wp theme update my-theme
```