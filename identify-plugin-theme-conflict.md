# Identify a Plugin or Theme Conflict

Is WP-CLI not working with your WordPress install, but you don't know why? It might be a plugin or theme conflicting with the WP-CLI load process.

To verify, first run `wp --skip-plugins --skip-themes` to execute WP-CLI without loading plugins or themes. If WP-CLI runs as expected with plugins and themes skipped, then the problem is caused by one of those plugins or the active theme.

To see if the source of the problem is the active theme, run `wp --skip-themes` to see if WP-CLI loads as expected.

To see if the source of the problem is an active plugin, run wp `--skip-plugins=<plugin-slug>` for each active plugin to see which plugin blocks the full execution of WP-CLI. For instance, skipping the Akismet plugin would be:

    wp --skip-plugins=akismet

Or, use `xargs` to try the entire list of active plugins:

    wp plugin list --field=name --status=active --skip-plugins | xargs -n1 -I % wp --skip-plugins=% plugin get % --field=name
