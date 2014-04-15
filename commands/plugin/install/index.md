---
layout: default
title: 'wp plugin install'
---

`wp plugin install` - Install a plugin.

### OPTIONS

&lt;plugin|zip|url&gt;...
: A plugin slug, the path to a local zip file, or URL to a remote zip file.

[\--version=&lt;version&gt;]
: If set, get that particular version from wordpress.org, instead of the
stable version.

[\--force]
: If set, the command will overwrite any installed version of the plugin, without prompting
for confirmation.

[\--activate]
: If set, the plugin will be activated immediately after install.

[\--activate-network]
: If set, the plugin will be network activated immediately after install

### EXAMPLES

    # Install the latest version from wordpress.org and activate
    wp plugin install bbpress --activate

    # Install the development version from wordpress.org
    wp plugin install bbpress --version=dev

    # Install from a local zip file
    wp plugin install ../my-plugin.zip

    # Install from a remote zip file
    wp plugin install http://s3.amazonaws.com/bucketname/my-plugin.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef

