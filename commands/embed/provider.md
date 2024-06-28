# wp embed provider

Retrieves oEmbed providers.

### EXAMPLES

    # List format,endpoint fields of available providers.
    $ wp embed provider list
    +------------------------------+-----------------------------------------+
    | format                       | endpoint                                |
    +------------------------------+-----------------------------------------+
    | #https?://youtu\.be/.*#i     | https://www.youtube.com/oembed          |
    | #https?://flic\.kr/.*#i      | https://www.flickr.com/services/oembed/ |
    | #https?://wordpress\.tv/.*#i | https://wordpress.tv/oembed/            |

    # Get the matching provider for the URL.
    $ wp embed provider match https://www.youtube.com/watch?v=dQw4w9WgXcQ
    https://www.youtube.com/oembed


