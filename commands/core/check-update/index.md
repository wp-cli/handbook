---
layout: default
title: 'wp core check-update'
---

`wp core check-update` - Check for update via Version Check API. Returns latest version if there's an update, or empty if no update available.

### OPTIONS

[\--minor]
: Compare only the first two parts of the version number.

[\--major]
: Compare only the first part of the version number.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each update.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to version,update_type,package_url.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json. Default: table

