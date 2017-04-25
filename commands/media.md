# wp media

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amedia+sort%3Aupdated-desc">Github issues</a></small>

Manage attachments.

### EXAMPLES

    # Re-generate all thumbnails, without confirmation.
    $ wp media regenerate --yes
    Found 3 images to regenerate.
    1/3 Regenerated thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Regenerated thumbnails for "Boardwalk" (ID 757).
    3/3 Regenerated thumbnails for "Sunburst Over River" (ID 756).
    Success: Regenerated 3 of 3 images.

    # Import a local image and set it to be the featured image for a post.
    $ wp media import ~/Downloads/image.png --post_id=123 --title="A downloaded picture" --featured_image
    Success: Imported file '/home/person/Downloads/image.png' as attachment ID 1753 and attached to post 123 as featured image.



### SUBCOMMANDS

<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="/commands/media/import/">import</a></td>
			<td>Create attachments from local files or URLs.</td>
		</tr>
		<tr>
			<td><a href="/commands/media/regenerate/">regenerate</a></td>
			<td>Regenerate thumbnails for one or more attachments.</td>
		</tr>
	</tbody>
</table>
