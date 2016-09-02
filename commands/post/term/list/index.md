---
layout: default
title: 'wp post term list'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [post](/commands/post/) &raquo; [term](/commands/post/term/) &raquo; list</small>

`wp post term list` - List all terms associated with an object.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-term-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

&lt;id&gt;
: ID for the object.

&lt;taxonomy&gt;...
: One or more taxonomies to list.

[\--fields=&lt;fields&gt;]
: Limit the output to specific row fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, ids. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* term_id
* name
* slug
* taxonomy

These fields are optionally available:

* term_taxonomy_id
* description
* term_group
* parent
* count



