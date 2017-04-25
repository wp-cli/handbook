# wp site delete

<small>[Commands](/commands/) &raquo; [site](/commands/site/) &raquo; delete</small>

`wp site delete` - Delete a site in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;site-id&gt;]
: The id of the site to delete. If not provided, you must set the --slug parameter.

[\--slug=&lt;slug&gt;]
: Path of the blog to be deleted. Subdomain on subdomain installs, directory on subdirectory installs.

[\--yes]
: Answer yes to the confirmation message.

[\--keep-tables]
: Delete the blog from the list, but don't drop it's tables.

### EXAMPLES

    $ wp site delete 123
    Are you sure you want to delete the http://www.example.com/example site? [y/n] y
    Success: The site at 'http://www.example.com/example' was deleted.



