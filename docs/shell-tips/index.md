---
layout: doc
title: Shell Tips
description: Helpful shortcuts for bash and zsh.
category: References
---

# Shell Tips

Master of bash or zsh? Share your tips here.

## Take a look at the plugin changelog

Needs `elinks` to browse HTML.

```bash
wget -qO- http://api.wordpress.org/plugins/info/1.0/akismet|php -r '$seri=unserialize(stream_get_contents(STDIN)); echo $seri->sections["changelog"];'|elinks -force-html
```

Explanation

- set wget quiet & query the WordPress.org Plugin API
- unserialize with php, `stream_get_contents(STDIN)` means "get all from *stdin*"
- echo the changelog part from the API's reply
- fire up elinks (a console browser) to view the changelog

## Start wp-cli with ABSPATH in the current dir and under the current dir's owner

```bash
#!/bin/bash

sudo -u $(stat . -c %U) -- wp --path="$PWD" "$@"
```

Explanation

The `stat` command returns the owner of the current directory, WordPress root.
