---
layout: default
title: 'wp eval-file'
---

`wp eval-file` - Load and execute a PHP file after loading WordPress.

### OPTIONS

&lt;file&gt;
: The path to the PHP file to execute.

[&lt;arg&gt;...]
: One or more arguments to pass to the file. They are placed in the $args variable.

### EXAMPLES

    wp eval-file my-code.php value1 value2

