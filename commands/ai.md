# wp ai

Interacts with the WordPress AI Client for text and image generation.

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


