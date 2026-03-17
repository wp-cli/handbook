# Beginner's Guide

So you've heard about WP-CLI and want to try it out, but you're not sure where to start? This guide is for you. No programming experience required!

This guide is designed to be read from start to finish. Each section builds on the previous one, taking you from opening a terminal for the first time all the way to running your first WP-CLI commands and getting help when you need it.

## What Is the Command Line?

When you use your computer, you normally interact with it by clicking on things — icons, buttons, menus. This is called a **graphical user interface (GUI)**.

The **command line** (also called the terminal, shell, or console) is a different way to interact with your computer. Instead of clicking, you type text commands and press **Enter** to run them. It might look intimidating at first, but it's really just another way to tell your computer what to do.

### Opening the Terminal

**On macOS:**

1. Press **Command (⌘) + Space** to open Spotlight Search.
2. Type `Terminal` and press **Enter**.
3. A window with a black or white background and a blinking cursor will appear. That's the terminal!

**On Windows:**

1. Press **Windows key + R** to open the Run dialog.
2. Type `cmd` and press **Enter**.
3. Alternatively, search for "Command Prompt" or "PowerShell" in the Start menu.

> **Tip for Windows users:** WP-CLI works best with Git Bash or Windows Subsystem for Linux (WSL). You can download Git Bash from [git-scm.com](https://git-scm.com/downloads).

**On Linux:**

1. Look for "Terminal" in your applications menu, or press **Ctrl + Alt + T** on many distributions.

### Basic Terminal Navigation

Once the terminal is open, here are a few essential commands to know:

| Command | What it does |
|---------|-------------|
| `pwd` | Shows the folder you are currently in |
| `ls` (macOS/Linux) or `dir` (Windows) | Lists files and folders in the current folder |
| `cd folder-name` | Moves into a folder named `folder-name` |
| `cd ..` | Goes up one folder level |
| `clear` | Clears the terminal screen |

Don't worry — you don't need to memorize all of these right now. You can come back to this table whenever you need a reminder.

## What Is WP-CLI?

WP-CLI is a **command line interface for WordPress**. It lets you manage your WordPress website by typing commands in the terminal, instead of clicking through the WordPress admin dashboard.

Think of it this way: anything you can do in the WordPress admin (installing plugins, creating users, updating settings), you can also do with WP-CLI — and usually much faster.

### Why Should I Use WP-CLI?

Here are a few reasons why even non-technical WordPress users find WP-CLI useful:

- **Speed:** Update all your plugins with a single command instead of clicking through each one.
- **Automation:** Repeat the same tasks easily without navigating the admin every time.
- **Bulk actions:** Do things to many posts, users, or options all at once.
- **Remote management:** Manage a website on a remote server without opening a browser.
- **Reliability:** Less clicking means fewer mistakes.

## Installing WP-CLI

For step-by-step installation instructions on macOS, Linux, and Windows, see the [Installing](https://make.wordpress.org/cli/handbook/guides/installing/) guide. It covers system requirements, the recommended Phar download method, and alternative installation options such as Composer and Homebrew.

## Running WP-CLI: Inside vs. Outside the WordPress Folder

WP-CLI needs to know which WordPress installation to work with. By default, it looks for WordPress in your **current directory** (the folder your terminal is currently in).

This means you generally need to `cd` into your WordPress site's folder before running WP-CLI commands. For example:

```
cd /var/www/mysite
wp plugin list
```

If you run `wp plugin list` from a folder that doesn't contain a WordPress installation, you'll get an error like:

```
Error: This does not seem to be a WordPress installation.
```

**Where is my WordPress folder?**

- On a typical shared host, it's often something like `/home/username/public_html` or `/var/www/html`.
- If you use a local development tool like Local, MAMP, or XAMPP, each tool has its own folder structure — check its documentation.
- On managed WordPress hosts, WP-CLI may be pre-configured to work without needing to `cd` first.

## Running Your First WP-CLI Command

Navigate in your terminal to your WordPress folder (see [above](#running-wp-cli-inside-vs-outside-the-wordpress-folder)). For example:

```
cd /var/www/mysite
```

Then try this command:

```
wp --info
```

This displays information about your WP-CLI installation. If it works, you're ready to go!

To see the version of WordPress you have installed:

```
wp core version
```

To list the plugins on your site:

```
wp plugin list
```

## Reading WP-CLI Output

When you run a WP-CLI command, it prints a response in the terminal. Here's what the common messages mean:

- **`Success:`** — The command worked as expected.
- **`Warning:`** — The command ran, but there's something you should know about.
- **`Error:`** — Something went wrong. Read the message to find out what.

## Getting Help

### Built-in help

WP-CLI has built-in documentation for every command. If you get stuck, run `wp help` to see a list of all available commands:

```
wp help
```

To get help on a specific command, add the command name after `help`. For example:

```
wp help plugin
wp help plugin install
```

### Community support

If the built-in help isn't enough, these resources can help:

- **[WP-CLI Handbook](https://make.wordpress.org/cli/handbook/)** — The full reference documentation.
- **[GitHub Issues](https://github.com/wp-cli/wp-cli/issues)** — Report bugs or search for known problems.
- **[WordPress.org Support Forums](https://wordpress.org/support/)** — General WordPress help from the community.

## Using WP-CLI on a Remote Server (SSH)

If your WordPress site is hosted on a remote server (most live websites are), you can still use WP-CLI. There are two common approaches:

1. **SSH into the server and run WP-CLI there.** Most hosts provide SSH access. Connect with a command like:

    ```
    ssh username@yoursite.com
    ```

    Then navigate to your WordPress folder and use WP-CLI normally.

2. **Use WP-CLI's built-in SSH support.** WP-CLI can run commands on a remote server directly from your local machine. See the [Running Commands Remotely](https://make.wordpress.org/cli/handbook/guides/running-commands-remotely/) guide for details.

## Learning More

Now that you've got the basics, here are some great next steps:

- **[Common Tasks with WP-CLI](https://make.wordpress.org/cli/handbook/guides/common-tasks/)** — Practical examples for everyday WordPress management.
- **[Quick Start Guide](https://make.wordpress.org/cli/handbook/guides/quick-start/)** — A short walkthrough of WP-CLI with more examples.
- **[Running Commands Remotely](https://make.wordpress.org/cli/handbook/guides/running-commands-remotely/)** — Manage your live site's server over SSH.
- **[All WP-CLI Commands](https://developer.wordpress.org/cli/commands/)** — The full list of commands available.
- **[External Resources](https://make.wordpress.org/cli/handbook/guides/external-resources/)** — Blog posts, slides, and videos from WP-CLI users.

You don't need to learn everything at once. Start with a task you want to speed up, find the right command, and go from there!
