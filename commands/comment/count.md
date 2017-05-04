# wp comment count

Count comments, on whole blog or on a given post.

### OPTIONS

[&lt;post-id&gt;]
: The ID of the post to count comments in.

### EXAMPLES

    # Count comments on whole blog.
    $ wp comment count
    approved:        33
    spam:            3
    trash:           1
    post-trashed:    0
    all:             34
    moderated:       1
    total_comments:  37

    # Count comments in a post.
    $ wp comment count 42
    approved:        19
    spam:            0
    trash:           0
    post-trashed:    0
    all:             19
    moderated:       0
    total_comments:  19


