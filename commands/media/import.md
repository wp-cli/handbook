# wp media import

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Amedia-import+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Create attachments from local files or URLs.

### OPTIONS

&lt;file&gt;...
: Path to file or files to be imported. Supports the glob(3) capabilities of the current shell.
    If file is recognized as a URL (for example, with a scheme of http or ftp), the file will be
    downloaded to a temp file before being sideloaded.

[\--post_id=&lt;post_id&gt;]
: ID of the post to attach the imported files to.

[\--title=&lt;title&gt;]
: Attachment title (post title field).

[\--caption=&lt;caption&gt;]
: Caption for attachent (post excerpt field).

[\--alt=&lt;alt_text&gt;]
: Alt text for image (saved as post meta).

[\--desc=&lt;description&gt;]
: "Description" field (post content) of attachment post.

[\--featured_image]
: If set, set the imported image as the Featured Image of the post its attached to.

[\--porcelain]
: Output just the new attachment ID.

### EXAMPLES

    # Import all jpgs in the current user's "Pictures" directory, not attached to any post.
    $ wp media import ~/Pictures/**\/*.jpg
    Imported file '/home/person/Pictures/beautiful-youg-girl-in-ivy.jpg' as attachment ID 1751.
    Imported file '/home/person/Pictures/fashion-girl.jpg' as attachment ID 1752.
    Success: Imported 2 of 2 images.

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



