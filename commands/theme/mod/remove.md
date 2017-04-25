# wp theme mod remove

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-mod-remove+sort%3Aupdated-desc">Github issues</a></small>

Remove one or more theme mods.

### OPTIONS

[&lt;mod&gt;...]
: One or more mods to remove.

[\--all]
: Remove all theme mods.

### EXAMPLES

    # Remove all theme mods.
    $ wp theme mod remove --all
    Success: Theme mods removed.

    # Remove single theme mod.
    $ wp theme mod remove background_color
    Success: 1 mod removed.

    # Remove multiple theme mods.
    $ wp theme mod remove background_color header_textcolor
    Success: 2 mods removed.



