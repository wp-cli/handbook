---
layout: default
title: Creating Helpful Bug Reports
---

# Creating Helpful Bug Reports

Think you've found a bug? Here are some helpful details you can include in your new issue to help expedite resolution.

```
# What is your system?
lsb_release -a
uname -a
# Which version of PHP are you using?
which -a php
php -v
# Are you running suhosin?
php -m | grep -i suhosin
# Which version of WordPress are you using?
grep '^\$wp_version\s' wp-includes/version.php
# Can you share the results of which wp ?
which -a wp
stat $(which wp)
```