---
layout: default
title: 'wp cli completions'
display_global_parameters: true
---

`wp cli completions` - Generate tab completion strings.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli-completions+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

\--line=&lt;line&gt;
: The current command line to be executed.

\--point=&lt;point&gt;
: The index to the current cursor position relative to the beginning of the command.

### EXAMPLES

    # Generate tab completion strings.
    $ wp cli completions --line='wp eva' --point=100
    eval
    eval-file



