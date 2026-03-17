# Common Tasks with WP-CLI

Not sure what you can do with WP-CLI? This page showcases practical, everyday WordPress management tasks you can accomplish from the command line — with examples you can use right away.

> **New to the command line?** Start with the [Beginner's Guide](https://make.wordpress.org/cli/handbook/guides/beginners-guide/) first.

## Plugins

### Install a plugin

```
wp plugin install contact-form-7
```

### Install and activate a plugin in one step

```
wp plugin install contact-form-7 --activate
```

### Activate an already-installed plugin

```
wp plugin activate contact-form-7
```

### Deactivate a plugin

```
wp plugin deactivate contact-form-7
```

### Update a specific plugin

```
wp plugin update akismet
```

### Update all plugins at once

```
wp plugin update --all
```

### List all installed plugins and their status

```
wp plugin list
```

### Delete a plugin

```
wp plugin delete hello
```

## Themes

### Install a theme

```
wp theme install twentytwentyfour
```

### Activate a theme

```
wp theme activate twentytwentyfour
```

### Update all themes

```
wp theme update --all
```

### List all installed themes

```
wp theme list
```

## WordPress Core

### Check which version of WordPress is installed

```
wp core version
```

### Check if a WordPress update is available

```
wp core check-update
```

### Update WordPress to the latest version

```
wp core update
```

### Update the WordPress database after an update

```
wp core update-db
```

## Users

### List all users

```
wp user list
```

### Create a new user

```
wp user create jane jane@example.com --role=editor
```

### Change a user's password

```
wp user update jane --user_pass=newpassword
```

### Delete a user

```
wp user delete jane --reassign=1
```

> **Tip:** The `--reassign=1` option moves the deleted user's posts to the user with ID 1 (usually the site admin). Replace `1` with the ID of the user you want to reassign posts to.

### Add an administrator role to an existing user

```
wp user set-role jane administrator
```

## Posts and Pages

### Create a new post

```
wp post create --post_title="My First Post" --post_status=publish --post_type=post
```

### Create a new page

```
wp post create --post_title="About Us" --post_status=publish --post_type=page
```

### List all published posts

```
wp post list --post_status=publish
```

### Delete a post (sends it to trash)

```
wp post delete 42
```

### Permanently delete a post

```
wp post delete 42 --force
```

## Comments

### List all comments awaiting moderation

```
wp comment list --status=hold
```

### Approve a comment

```
wp comment approve 5
```

### Delete spam comments

```
wp comment delete $(wp comment list --status=spam --format=ids)
```

> **Note:** The `$(...)` syntax works in bash (macOS, Linux, Git Bash, or WSL on Windows). It does not work in Windows Command Prompt. Windows users should use Git Bash, WSL, or PowerShell to run this command.

## Options and Settings

### Get the site URL

```
wp option get siteurl
```

### Get the site title

```
wp option get blogname
```

### Change the site title

```
wp option update blogname "My New Site Title"
```

### Put the site into maintenance mode (discourage search engines)

```
wp option update blog_public 0
```

### Re-enable search engine indexing

```
wp option update blog_public 1
```

## Search and Replace

### Preview what would change when moving a site to a new domain

```
wp search-replace 'http://oldsite.com' 'http://newsite.com' --dry-run
```

### Replace URLs when moving to a new domain

```
wp search-replace 'http://oldsite.com' 'http://newsite.com'
```

## Media

### Regenerate all thumbnail sizes

Useful after changing your theme or adding a new image size:

```
wp media regenerate --yes
```

## Caching

### Flush the object cache

```
wp cache flush
```

### Flush rewrite rules (useful after adding a new plugin or changing permalink settings)

```
wp rewrite flush
```

## Database

### Export the database to a file

```
wp db export backup.sql
```

### Import a database from a file

```
wp db import backup.sql
```

### Open an interactive database console

```
wp db cli
```

## WP-CLI Itself

### Check the installed version of WP-CLI

```
wp cli version
```

### Update WP-CLI to the latest version

```
wp cli update
```

### Get system information useful for troubleshooting

```
wp --info
```

## Going Further

These examples only scratch the surface. WP-CLI has commands for nearly every part of WordPress. To explore more:

- Browse the [full list of built-in commands](https://developer.wordpress.org/cli/commands/).
- Read the [Quick Start Guide](https://make.wordpress.org/cli/handbook/guides/quick-start/) for a more detailed walkthrough.
- Check out [External Resources](https://make.wordpress.org/cli/handbook/guides/external-resources/) for tutorials, blog posts, and videos.
