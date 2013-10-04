---
layout: default
title: 'wp term get'
---

`wp term get` - Get a taxonomy term

### OPTIONS

&lt;term-id&gt;
: ID of the term to get

&lt;taxonomy&gt;
: Taxonomy of the term to get

[\--field=&lt;field&gt;]
: Instead of returning the whole term, returns the value of a single field.

[\--format=&lt;format&gt;]
: The format to use when printing the term, acceptable values:

  - **table**: Outputs all fields of the term as a table.
  - **json**: Outputs all fields in JSON format.

### EXAMPLES

    wp term get 1 category --format=json

