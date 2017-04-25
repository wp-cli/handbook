# wp core download

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore-download+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Download core WordPress files.

Downloads and extracts WordPress core files to the specified path. Uses
an archive file stored in cache if WordPress has been previously
downloaded.

### OPTIONS

[\--path=&lt;path&gt;]
: Specify the path in which to install WordPress.

[\--locale=&lt;locale&gt;]
: Select which language you want to download.

[\--version=&lt;version&gt;]
: Select which version you want to download. Accepts a version number, 'latest' or 'nightly'

[\--force]
: Overwrites existing files, if present.

### EXAMPLES

    $ wp core download --locale=nl_NL
    Downloading WordPress 4.5.2 (nl_NL)...
    md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
    Success: WordPress downloaded.



