---
layout: default
title: 'wp site create'
---

`wp site create` - Create a site in a multisite install.

### OPTIONS

\--slug=&lt;slug&gt;
: Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs.

\--title=&lt;title&gt;
: Title of the new site. Default: prettified slug.

\--email=&lt;email&gt;
: Email for Admin user. User will be created if none exists. Assignement to Super Admin if not included.

\--network_id=&lt;network-id&gt;
: Network to associate new site with. Defaults to current network (typically 1).

\--private
: If set, the new site will be non-public (not indexed)

\--porcelain
: If set, only the site id will be output on success.

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



