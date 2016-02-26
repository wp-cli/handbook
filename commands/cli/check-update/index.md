---
layout: default
title: 'wp cli check-update'
display_global_parameters: true
---

`wp cli check-update` - Check for update via Github API. Returns the available versions if there are updates, or empty if no update available.

<hr />

### OPTIONS

[\--patch]
: Only list patch updates

[\--minor]
: Only list minor updates

[\--major]
: Only list major updates

[\--field=&lt;field&gt;]
: Prints the value of a single field for each update.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to version,update_type,package_url.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table



