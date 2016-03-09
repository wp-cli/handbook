---
layout: doc
title: Common issues and their fixes
description: In case of fire, break glass.
category: Guides
---

### The installation hangs

If the installation seems to hang forever while trying to clone the resources from GitHub, please ensure that you are allowed to connect to Github using SSL (port 443) and Git (port 9418) for outbound connections.

### Error: Can't connect to the database

A few possibilities:

a) you're using MAMP, but WP-CLI is not using the MAMP PHP binary.

You can check which PHP WP-CLI is using by running `wp --info`.

Set or update the `WP_CLI_PHP` environment variable with the path to the MAMP PHP.

b) it's a WordPress multisite install.

c) the database credentials in `wp-config.php` are actually incorrect.

### PHP Fatal error: Cannot redeclare wp_unregister_GLOBALS()

If you get this fatal error running the `wp` command, you may have moved or edited `wp-config.php` beyond what wp-cli supports:

```
PHP Fatal error: Cannot redeclare wp_unregister_GLOBALS() (previously declared in /var/www/foo.com/wp-includes/load.php:18) in /var/www/foo.com/wp-includes/load.php on line 33
```

One of WP-CLI's requirements is that the line:

```php
require_once(ABSPATH . 'wp-settings.php');
```

remains in the `wp-config.php` file, so if you've modified or moved it, put it back there. It gets matched by a regex when WP-CLI runs.

See also: [#1631](https://github.com/wp-cli/wp-cli/issues/1631)

### PHP Fatal error: Call to undefined function cli\posix_isatty()

Please ensure you have the php-process extension installed. For example for Centos 6: `yum install php-process`

### Warning: Some code is trying to do a URL redirect

Most of the time, it's some plugin or theme code that disables wp-admin access to non-admins.

Quick fix, other than disabling the protection, is to pass the user parameter: `--user=some_admin`

See also: [#477](https://github.com/wp-cli/wp-cli/issues/477)

### W3 Total Cache Error: some files appear to be missing or out of place.

W3 Total Cache object caching can cause this problem. Disabling object caching and optionally removing `wp-content/object-cache.php` will allow WP-CLI to work again.

See also: [#587](https://github.com/wp-cli/wp-cli/issues/587)

### The automated updater doesn't work for versions before 3.4

The `wp core update` command is designed to work for WordPress 3.4 and above. To be able to update an older website to latest WordPress, you could try one of the following alternatives:

1. **Fully-automated:** Run `wp core download --force` to download latest WordPress and replace it with your files (don't worry, `wp-config.php` will remain intact). Then, run `wp core update-db` to update the database. Since the procedure isn't ideal, run once again `wp core download --force` and the new version should be available.
2. **Semi-automated:** Run `wp core download --force` to download all files and replace them in your current installation, then navigate to `/wp-admin/` and run the database upgrade when prompted.
