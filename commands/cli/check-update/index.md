---
layout: default
title: 'wp cli check-update'
---

`wp cli check-update` - Check for update via Github API. Returns the available versions if there are updates, or empty if no update available.

### OPTIONS

[\--patch]
: Compare only the first two parts of the version number.

[\--minor]
: Compare only the first part of the version number.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each update.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to version,update_type,package_url.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

