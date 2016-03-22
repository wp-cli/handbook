---
layout: default
title: 'wp core check-update'
display_global_parameters: true
---

`wp core check-update` - Check for update via Version Check API.

<hr />

Lists the most recent versions when there are updates available, or success message when up to date.

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
: Accepted values: table, csv, json, yaml. Default: table



