---
layout: default
title: 'wp rewrite structure'
display_global_parameters: true
---

`wp rewrite structure` - Update the permalink structure.

<hr />

### DESCRIPTION

Updates the post permalink structure.

To regenerate a .htaccess file with WP-CLI, you'll need to add the mod_rewrite module
to your wp-cli.yml or config.yml. For example:

`apache_modules:
  - mod_rewrite`

### OPTIONS

&lt;permastruct&gt;
: The new permalink structure to apply.

[\--category-base=&lt;base&gt;]
: Set the base for category permalinks, i.e. '/category/'.

[\--tag-base=&lt;base&gt;]
: Set the base for tag permalinks, i.e. '/tag/'.

[\--hard]
: Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database.

### EXAMPLES

    wp rewrite structure '/%year%/%monthnum%/%postname%'



