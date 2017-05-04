# wp cli completions

Generate tab completion strings.

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


