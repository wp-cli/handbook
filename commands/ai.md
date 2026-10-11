# wp ai

Interacts with the WordPress AI Client for text and image generation.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

### EXAMPLES

    # Check AI capabilities status
    $ wp ai status
    +------------------+-----------+
    | Capability       | Supported |
    +------------------+-----------+
    | Text Generation  | Yes       |
    | Image Generation | No        |
    +------------------+-----------+

    # Generate text from a prompt
    $ wp ai generate text "Write a haiku about WordPress"
    Success: Generated text:
    Open source and free
    Empowering creators
    WordPress shines bright

    # Generate an image from a prompt
    $ wp ai generate image "A futuristic WordPress logo" --destination-file=logo.png
    Success: Image saved to logo.png

    # Check if a prompt is supported
    $ wp ai check "Summarize this text"
    Success: Text generation is supported for this prompt.


