---
layout: post
title: Edit WordPress Posts in Vim or Emacs or Whatever
author: scribu
---
A few years ago, I came across a very interesting project by Joseph Scott, called [PressFS][1]; it exposed WordPress posts as plain text files on your filesystem. This allowed you to use all your favorite command-line tools to manipulate these posts, including editing their content in your favorite text editor.

With [WP-CLI](/) 0.9.0-beta, you can do the same thing:

```bash
wp post edit 123
```

Once you run that command, your `$EDITOR` will open up, pre-filled with the content of the post with ID 123. After you've made your changes and quit the editor, WP-CLI will update the post in the database.

Credit goes to [goldenapples](https://github.com/goldenapples) for [implementing](https://github.com/wp-cli/wp-cli/pull/302) it.

[1]: https://github.com/josephscott/pressfs
