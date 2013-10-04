---
layout: default
title: 'wp term create'
---

`wp term create` - Create a term.

### OPTIONS

&lt;term&gt;
: A name for the new term.

&lt;taxonomy&gt;
: Taxonomy for the new term.

[\--slug=&lt;slug&gt;]
: A unique slug for the new term. Defaults to sanitized version of name.

[\--description=&lt;description&gt;]
: A description for the new term.

[\--parent=&lt;term-id&gt;]
: A parent for the new term.

[\--porcelain]
: Output just the new term id.

### EXAMPLES

    wp term create Apple category --description=&quot;A type of fruit&quot;

