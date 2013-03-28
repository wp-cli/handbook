---
layout: post
title: Scaffolding Custom Post Types and Taxonomies
author: jmslbam
---
Custom post types and custom taxonomies are the building blocks for advanced functionality. Most of the time, the code for registering them is either copy+pasted from somewhere or it's saved as a snippet in your text editor.  

Now you can do this with WP-CLI, using the `wp scaffold` command.

### Scaffold a custom post type

The following command generates the code for registering the post type and also for customizing the update messages:

```bash
wp scaffold post-type zombie
```

### Scaffold a taxonomy

The following command generates the code for registering the taxonomy to the zombie post type:

```bash
wp scaffold taxonomy zombie-speed --post-type=zombie
```

### But I only want the registration of the post-type...

Then you can add the `--raw` flag:

```bash
wp scaffold post-type zombie --raw
```

This will only output the code that will `register_post_type()` without the `init` action and the update messages.

### But where does the code go?

This is a personal preference. Some ship it within a theme, while others will save it within a plugin. That's why we have these two flags:

```bash
wp scaffold post-type zombie --theme
```

`--theme` stores the generated code within your current active theme under a `/post-types` directory and names a file name `zombie.php`

```bash
wp scaffold post-type zombie --plugin=pluginname
```

`--plugin=plugin-dir-name` stores the generated code within the given plugin name.  
 
By default, the code will be output to your terminal (STDOUT) so you could write it to your file of choice:

```bash
wp scaffold post-type zombie > ~/project/foo/bar.php
```

### And what about I18n?

Internationalization by gettext can be achieved through the `--textdomain` parameter:

```bash
wp scaffold post-type zombie --textdomain=my-textdomain
```

By default when using the `--theme`, the textdomain will be that of your active theme, and if 
using the `--plugin` flag, the textdomain will be your plugin name.

Enjoy these commands; we hope it will speed-up and ease your development with WordPress!
