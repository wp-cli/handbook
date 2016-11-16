---
layout: doc
title: Bug reports
category: Contributing
description: Help ensure your issue is resolved in a timely manner.
---

Think you've found a bug? We'd love for you to help us get it fixed.

Before you create a new issue, you should:

* [Search existing issues](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue+bug) to see if there's an existing resolution to it, or if it's already been fixed in a newer version of WP-CLI.
* Check our documentation on [common issues and their fixes](http://wp-cli.org/docs/common-issues/). It's worth reading through the Github issues linked on the page, as the error listed may not be exactly the error you're experiencing.
* Reproduce the issue in a fresh install of WordPress (e.g. Twenty Sixteen or similar, with no plugins active). If the issue only reproduces in a custom environment, then the issue is a bug in your environment, not WP-CLI.

Once you've done a bit of searching and discovered there isn't prior art for your bug, please [create a new Github issue](https://github.com/wp-cli/wp-cli/issues/new) with:

* What you were doing.
* What you expected to see.
* What you actually saw.

For instance, instead of:

> I think WP-CLI is broken. Can you help me?

It's more helpful to give as much detail as you can:

> When I run `wp post list`, I see a fatal error about a class being undefined. I expected to see the list of posts.

If you include the `--debug` flag when executing WP-CLI (e.g. `wp post list --debug`), you may get more verbosity into the source of the error.

Your bug may also be environment-specific. Because WP-CLI is a tool whose behavior is different from system to system, it never hurts to include some environmental details in your issue if you think they're relevant.

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

