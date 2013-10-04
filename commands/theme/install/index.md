---
layout: default
title: 'wp theme install'
---

`wp theme install` - Install a theme.

### OPTIONS

&lt;theme|zip|url&gt;...
: A theme slug, the path to a local zip file, or URL to a remote zip file.

[--version=&lt;version&gt;]
: If set, get that particular version from wordpress.org, instead of the
stable version.

[--force]
: If set, the command will overwrite any installed version of the theme, without prompting
for confirmation.

[--activate]
: If set, the theme will be activated immediately after install.

### EXAMPLES

    # Install the latest version from wordpress.org and activate
    wp theme install twentytwelve --activate

    # Install from a local zip file
    wp theme install ../my-theme.zip

    # Install from a remote zip file
    wp theme install http://s3.amazonaws.com/bucketname/my-theme.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef

