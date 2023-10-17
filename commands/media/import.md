# wp media import

Creates attachments from local files or URLs.

### OPTIONS

&lt;file&gt;...
: Path to file or files to be imported. Supports the glob(3) capabilities of the current shell.
    If file is recognized as a URL (for example, with a scheme of http or ftp), the file will be
    downloaded to a temp file before being sideloaded.

[\--post_id=&lt;post_id&gt;]
: ID of the post to attach the imported files to.

[\--post_name=&lt;post_name&gt;]
: Name of the post to attach the imported files to.

[\--title=&lt;title&gt;]
: Attachment title (post title field).

[\--caption=&lt;caption&gt;]
: Caption for attachment (post excerpt field).

[\--alt=&lt;alt_text&gt;]
: Alt text for image (saved as post meta).

[\--desc=&lt;description&gt;]
: "Description" field (post content) of attachment post.

[\--skip-copy]
: If set, media files (local only) are imported to the library but not moved on disk. File names will not be run through wp_unique_filename() with this set.

[\--preserve-filetime]
: Use the file modified time as the post published &amp; modified dates. Remote files will always use the current time.

[\--featured_image]
: If set, set the imported image as the Featured Image of the post it is attached to.

[\--porcelain[=&lt;field&gt;]]
: Output a single field for each imported image. Defaults to attachment ID when used as flag.
\---
options:
  - url
\---

### EXAMPLES

    # Import all jpgs in the current user's "Pictures" directory, not attached to any post.
    $ wp media import ~/Pictures/**\/*.jpg
    Imported file '/home/person/Pictures/landscape-photo.jpg' as attachment ID 1751.
    Imported file '/home/person/Pictures/fashion-icon.jpg' as attachment ID 1752.
    Success: Imported 2 of 2 items.

    # Import a local image and set it to be the post thumbnail for a post.
    $ wp media import ~/Downloads/image.png --post_id=123 --title="A downloaded picture" --featured_image
    Imported file '/home/person/Downloads/image.png' as attachment ID 1753 and attached to post 123 as featured image.
    Success: Imported 1 of 1 images.

    # Import a local image, but set it as the featured image for all posts.
    # 1. Import the image and get its attachment ID.
    # 2. Assign the attachment ID as the featured image for all posts.
    $ ATTACHMENT_ID="$(wp media import ~/Downloads/image.png --porcelain)"
    $ wp post list --post_type=post --format=ids | xargs -d ' ' -I % wp post meta add % _thumbnail_id $ATTACHMENT_ID
    Success: Added custom field.
    Success: Added custom field.

    # Import an image from the web.
    $ wp media import http://s.wordpress.org/style/images/wp-header-logo.png --title='The WordPress logo' --alt="Semantic personal publishing"
    Imported file 'http://s.wordpress.org/style/images/wp-header-logo.png' as attachment ID 1755.
    Success: Imported 1 of 1 images.

    # Get the URL for an attachment after import.
    $ wp media import http://s.wordpress.org/style/images/wp-header-logo.png --porcelain | xargs -I {} wp post list --post__in={} --field=url --post_type=attachment
    http://wordpress-develop.dev/wp-header-logo/

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
