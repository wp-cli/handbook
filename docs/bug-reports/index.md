---
layout: doc
title: Bug reports
category: Contributing
description: Help ensure your issue is resolved in a timely manner.
---

Think you've found a bug? We'd love for you to help us get it fixed.

At a minimum, please start your [Github issue](https://github.com/wp-cli/wp-cli/issues) with:

* What you were doing.
* What you expected to see.
* What you actually saw.

Instead of:

> I think WP-CLI is broken. Can you help me?

It would be better to start with something like:

> When I run `wp post list`, I see a fatal error about a class being undefined. I expected to see the list of posts.

Also, because WP-CLI is a tool whose behavior is different from system to system, it never hurts to include some environmental details in your issue if you think they're relevant.

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

