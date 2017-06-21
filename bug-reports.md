# Bug Reports

Think you've found a bug? We'd love for you to help us get it fixed.

Before you create a new issue, you should:

* [Search existing issues](https://github.com/issues?utf8=%E2%9C%93&q=sort%3Aupdated-desc+org%3Awp-cli+label%3Abug) to see if there's an existing resolution to it, or if it's already been fixed in a newer version.
* Check our documentation on [common issues and their fixes](https://make.wordpress.org/cli/handbook/common-issues/). It's worth reading through the Github issues linked on the page, as the error listed may not be exactly the error you're experiencing.
* Reproduce the issue in a fresh install of WordPress (e.g. Twenty Sixteen or similar, with no plugins active). If the issue only reproduces in a custom environment, then the issue is a bug in your environment, not WP-CLI.

Once you've done a bit of searching and discovered there isn't prior art for your bug, please create a new GitHub issue in the appropriate repository. Providing the summary, steps to reproduce, environmental details, and other specifics identified below will help guarantee you are submitting a full bug report.

**Summary**

In narrative form, such as “While testing feature x, I encountered z.”

> **Summary:**
>
> After installing the following package on newest nightly version of the WP-CLI, I receive "is not a registered wp command error"

**Steps to reproduce the bug**

Please be as detailed and specific as possible. It's a good idea to go back and follow your steps a second time to make sure another user can recreate the issue by following the steps directly without assuming any actions.

> **Steps to reproduce:**
>
> 1. Run command 'wp package install wp-cli/scaffold-package-command:@stable'
> 2. Allow installation process to complete
> 3. 'Success: Package installed.' is displayed
> 4. Run 'wp help scaffold package'
> 5. Observe 'Error: 'scaffold package' is not a registered wp command.'

If you have a great deal of output to share, please [create a GitHub gist](https://gist.github.com/) and link to it in the issue.

**Environment**

Your bug may also be environment-specific. Because WP-CLI is a tool whose behavior is different from system to system, please include some environmental details in your issue if you think they're relevant.

    # What is your system?
    lsb_release -a
    uname -a
    # Which version of PHP are you using?
    which -a php
    php -v
    # Are you running suhosin? If so, make sure you've added `suhosin.executor.include.whitelist = phar` to your php.ini
    php -m | grep -i suhosin
    # Which version of WordPress are you using?
    grep '^\$wp_version\s' wp-includes/version.php
    # Can you share the results of which wp ?
    which -a wp
    stat $(which wp)
    # Are you running any packages? If one is causing a problem, you can use `--skip-packages` to skip loading them
    wp package list

**Results and impacts**

Explain how the bug affects your usage, including severity level (what were the expected results, what were the actual results? who, how and to what degree affected?).

> **Severity** - High
> 
> **Expected Results:** Running `wp help scaffold package` displays help information for installed command.
> 
> **Actual Results:** 'Error: 'scaffold package' is not a registered wp command' is displayed.
> 
> This command is crucial for the daily function of our business. 1.2k other users also have installed this package and will be affected.
> 
> The installed package works without issue using WP-CLI `1.2.0-alpha-3182ac4`

**Workarounds**

Do any workarounds exist? If so, what are they?

> **Workaround:** Rollback to working version of WP-CLI

**Relevant diagnostics**

Include any crash reports, stack traces or debug output relevant to the issue. Any screenshots or gifs of issue are helpful too!

Have a lot of output? Make your issue easier to understand by [creating a GitHub gist](https://gist.github.com/) and linking to it in the issue.

If you include the `--debug` flag when executing WP-CLI (e.g. `wp post list --debug`), you may get more verbosity into the source of the error to include in the report.

> ```
> $ wp package install wp-cli/scaffold-package-command:@stable
> Installing package wp-cli/scaffold-package-command (@stable)
> Updating /root/.wp-cli/packages/composer.json to require the package...
> Using Composer to install the package...
> ---
> Loading composer repositories with package information
> Updating dependencies
> Resolving dependencies through SAT
> Dependency resolution completed in 0.001 seconds
> Analyzed 421 packages to resolve dependencies
> Analyzed 96 rules to resolve dependencies
> Package operations: 1 install, 0 updates, 0 removals
> Installs: wp-cli/scaffold-package-command:1.2.0
>  - Installing wp-cli/scaffold-package-command (1.2.0)
> Writing lock file
> Generating autoload files
> ---
> Success: Package installed.
> ```

>```
> $ wp help scaffold package --debug
> Debug (bootstrap): Loading packages from: /root/.wp-cli/packages/vendor/autoload.php (0.044s)
> Debug (bootstrap): No readable global config found (0.193s)
> Debug (bootstrap): No project config found (0.194s)
> Debug (bootstrap): argv: /usr/local/bin/wp help scaffold package --debug (0.194s)
> Debug (bootstrap): ABSPATH defined: /home/fu/public_html/ (0.195s)
> Debug (bootstrap): Begin WordPress load (0.195s)
> Debug (bootstrap): wp-config.php path: /home/fu/public_html/wp-config.php (0.196s)
> Debug (bootstrap): Loaded WordPress (1.323s)
> Debug (bootstrap): Running command: help (1.323s)
> Error: 'scaffold package' is not a registered wp command.
> ```

> wp scaffold package does not work either:
> 
>```
> $ wp scaffold package
> Error: 'scaffold package' is not a registered subcommand of 'scaffold'. See 'wp help scaffold'.
> ```
