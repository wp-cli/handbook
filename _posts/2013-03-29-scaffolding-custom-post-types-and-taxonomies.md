---
layout: post
title: Scaffolding Custom Post Types and Taxonomies
author: jmslbam
---

The `wp scaffold command` can generate code that registers Custom Post Types and Custom Taxonomies. Most of the time this is done by copy+pasting it from let's say the WordPress Codex or having the code as shortcode/snippet in your editor.  
Now you can use WP-CLI for this.

### Scaffold a custom post type
The following command generates a Custom Post Type and registers the post type including update messages.

```bash
wp scaffold post-type zombie
```

Scaffold a taxonomy
The following command generates a Custom Taxonomy and registers the taxonomy to the Post Type zombie.

```bash
wp scaffold taxonomy zombie-speed post-type=zombie
```

### But where does the code go?
This is a personal preference. Some ship it within a theme, while others will save it within a plugin.
That's why there a these two flags:

```bash
wp scaffold post-type zombie --theme
```
`--theme` stores the generated code within your current active theme under a `/post-types` directory and names a file name `zombie.php`

```bash
wp scaffold post-type zombie --plugin=pluginname
```

`--plugin=plugin-dir-name` stores the generated code within the given plugin name.  
 
No flag will output the code to you terminal (STDOUT) so you could write it too your file of choice.

```bash
wp scaffold post-type zombie > ~/project/foo/bar.php
```
### But I only want the registration of the post-type...
Then you can add the `–raw` flag 

```bash
wp scaffold post-type zombie --raw
```
This will only output the code that will `register_post_type()` without the init action and the update messages.

### And what about I18n?
Internationalization by gettext can be achieved through `–textdomain=my-textdomain`

Default when using the `–theme`, the textdomain will be that of your active theme.
Otherwise by using the `–plugin` flag, the textdomain will be your plugin name.

```bash
wp scaffold post-type zombie --textdomain=my-textdomain
```
Enjoy these commands, we hope it will speed-up and ease your development with WordPress and  WP-CLI!

Props [sebastiaandegeus](https://github.com/sebastiaandegeus), [scribu](https://github.com/scribu), [jmslbam](https://github.com/jmslbam)
