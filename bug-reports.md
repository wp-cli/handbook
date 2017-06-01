# Bug Reports

Think you've found a bug? We'd love for you to help us get it fixed.

Before you create a new issue, you should:

* [Search existing issues](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue+bug) to see if there's an existing resolution to it, or if it's already been fixed in a newer version of WP-CLI.
* Check our documentation on [common issues and their fixes](http://wp-cli.org/docs/common-issues/). It's worth reading through the Github issues linked on the page, as the error listed may not be exactly the error you're experiencing.
* Reproduce the issue in a fresh install of WordPress (e.g. Twenty Sixteen or similar, with no plugins active). If the issue only reproduces in a custom environment, then the issue is a bug in your environment, not WP-CLI.

Once you've done a bit of searching and discovered there isn't prior art for your bug, please [create a new Github issue](https://github.com/wp-cli/wp-cli/issues/new) with:

* What you were doing.
* What you expected to see.
* What you actually saw.


Following this template will help guarantee you are submitting a full bug report:

Environment: affected software and versions (please see environment-specific note below)

Summary: in narrative form, such as “While testing feature x, I encountered z.”

Steps to reproduce the bug (Please be as detailed and specific as possible. It's a good idea to go back and follow your steps a second time to make sure another user can recreate the issue by following the steps directly without assuming any actions)
1. this
2. is
3. what
4. you
5. do

Results and impacts:, including severity level (what were the expected results, what were the actual results? who, how and to what degree affected?)

Workarounds (do any workarounds exist?, if so what are they?)

Relevant diagnostics (include any crash reports, stack traces or debug output relevant to the issue. Any screenshots or gifs of issue are helpful too!)

For instance, instead of:

> I think WP-CLI is broken. Can you help me?

It's more helpful to give as much detail as you can:

> When I run `wp post list`, I see a fatal error about a class being undefined. I expected to see the list of posts.

If you include the `--debug` flag when executing WP-CLI (e.g. `wp post list --debug`), you may get more verbosity into the source of the error to include in the report.

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
