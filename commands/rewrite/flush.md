# wp rewrite flush

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Arewrite-flush+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Flush rewrite rules.

Resets WordPress' rewrite rules based on registered post types, etc.

To regenerate a .htaccess file with WP-CLI, you'll need to add the mod_rewrite module
to your wp-cli.yml or config.yml. For example:

```
apache_modules:
  - mod_rewrite
```

### OPTIONS

[\--hard]
: Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database. Works only on single site installs.

### EXAMPLES

    $ wp rewrite flush
    Success: Rewrite rules flushed.



