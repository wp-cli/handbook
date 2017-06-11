# Bug Reports

Think you've found a bug? We'd love for you to help us get it fixed.

Before you create a new issue, you should:

* [Search existing issues](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue+bug) to see if there's an existing resolution to it, or if it's already been fixed in a newer version of WP-CLI.
* Check our documentation on [common issues and their fixes](http://wp-cli.org/docs/common-issues/). It's worth reading through the Github issues linked on the page, as the error listed may not be exactly the error you're experiencing.
* Reproduce the issue in a fresh install of WordPress (e.g. Twenty Sixteen or similar, with no plugins active). If the issue only reproduces in a custom environment, then the issue is a bug in your environment, not WP-CLI.

Once you've done a bit of searching and discovered there isn't prior art for your bug, please [create a new Github issue](https://github.com/wp-cli/wp-cli/issues/new):

Following this template will help guarantee you are submitting a full bug report:

**Summary:** in narrative form, such as “While testing feature x, I encountered z.”

>After installing the following package on newest nightly version of the WP-CLI, I receive "is not a registered wp command error"

**Steps to reproduce the bug:** (please be as detailed and specific as possible. It's a good idea to go back and follow your steps a second time to make sure another user can recreate the issue by following the steps directly without assuming any actions.)

>**Steps to reproduce:**
>1. Run command 'wp package install somerepo/wp-cli-some-command:@stable'
 >2. Allow installation process to complete
 >3. 'Success: Package installed.' is displayed
 >4. Run 'wp help some command'
 >5. Observe 'Error: 'some command' is not a registered wp command.'

**Environment:** Your bug may also be environment-specific. Because WP-CLI is a tool whose behavior is different from system to system, please include some environmental details in your issue if you think they're relevant.

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

>`lsb_release -a`
No LSB modules are available.
Distributor ID:	Ubuntu
Description:	Ubuntu 14.04.5 LTS
Release:	14.04
Codename:	trusty

>`uname -a`
Linux server.fu-server123.com 3.13.0-57-generic #95-Ubuntu SMP Fri Jun 19 09:28:15 UTC 2015 x86_64 x86_64 x86_64 GNU/Linux

>`suhosin`
not installed

>`wp --info`
PHP binary:	/usr/bin/php7.0
PHP version:	7.0.8-0ubuntu0.16.04.3
php.ini used:	/etc/php/7.0/cli/php.ini
WP-CLI root dir:	phar://wp-cli.phar
WP-CLI packages dir:	/home/vagrant/.wp-cli/packages/
WP-CLI global config:	/home/vagrant/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version:	1.2.0-alpha-a0d0f94

>`WP version`
4.8

>`which -a wp`
/usr/local/bin/wp

>`wp package list`
```
+-------------------------------+----------------+---------+--------+----------------+
| name                          | authors        | version | update | update_version |
+-------------------------------+----------------+---------+--------+----------------+
| somerepo/wp-cli-some-command  | Awesome Author | 1.2.0   | none   |                |
+-------------------------------+----------------+---------+--------+----------------+
```


**Results and impacts:** including severity level (what were the expected results, what were the actual results? who, how and to what degree affected?)

>**Severity** - High

>**Expected Results:** Running `wp help some command` displays help information for installed command.

>**Actual Results:** 'Error: 'some command' is not a registered wp command' is displayed.

>This command is crucial for the daily function of our business. 1.2k other users also have installed this package and will be affected.

>The installed package works without issue using WP-CLI `1.2.0-alpha-3182ac4`

**Workarounds:** (do any workarounds exist, if so what are they?)

>**Workaround:** Rollback to working version of WP-CLI

**Relevant diagnostics:** (include any crash reports, stack traces or debug output relevant to the issue. Any screenshots or gifs of issue are helpful too!)

If you include the `--debug` flag when executing WP-CLI (e.g. `wp post list --debug`), you may get more verbosity into the source of the error to include in the report.

>```
$ wp package install somerepo/wp-cli-some-command:@stable
Installing package somerepo/wp-cli-some-command (@stable)
Updating /root/.wp-cli/packages/composer.json to require the package...
Using Composer to install the package...
---
Loading composer repositories with package information
Updating dependencies
Resolving dependencies through SAT
Dependency resolution completed in 0.001 seconds
Analyzed 421 packages to resolve dependencies
Analyzed 96 rules to resolve dependencies
Package operations: 1 install, 0 updates, 0 removals
Installs: somerepo/wp-cli-some-command:1.2.0
 - Installing somerepo/wp-cli-some-command (1.2.0)
Writing lock file
Generating autoload files
---
Success: Package installed.
```

>```
$ wp help scaffold some command --debug
Debug (bootstrap): Loading packages from: /root/.wp-cli/packages/vendor/autoload.php (0.044s)
Debug (bootstrap): No readable global config found (0.193s)
Debug (bootstrap): No project config found (0.194s)
Debug (bootstrap): argv: /usr/local/bin/wp help scaffold some command --debug (0.194s)
Debug (bootstrap): ABSPATH defined: /home/fu/public_html/ (0.195s)
Debug (bootstrap): Begin WordPress load (0.195s)
Debug (bootstrap): wp-config.php path: /home/fu/public_html/wp-config.php (0.196s)
Debug (bootstrap): Loaded WordPress (1.323s)
Debug (bootstrap): Running command: help (1.323s)
Error: 'scaffold some command' is not a registered wp command.
```

>wp scaffold some command does not work either:

>```
$ wp scaffold some command
Error: 'some command' is not a registered subcommand of 'scaffold'. See 'wp help scaffold'.
```
