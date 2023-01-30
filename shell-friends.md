# Shell Friends

As you advance upon your use of WP-CLI, you'll find that a little bit of command line knowledge can have a huge impact on your workflow. Here are some of our favorite shell helper utilities.

## You Should Know

### Search through your bash history

Did you know that every command you run on your shell is saved to history? Search through your history with `CTRL + R`:

```bash
$ wp core download --version=nightly --force
bck-i-search: wp
```

When 'bck-i-search' appears, your keystrokes will search against commands saved in your bash history. Hit `return` to run the current selection.

Or another way to search history is grepping the output from the `history` command like:

```bash
$ history | grep wp
```
Any of the commands found in that list can be re-executed by bang-number, so for example if the output says your desired command is #218, you just do `!218`

###  Combine WP-CLI commands

In many cases, it can be extremely powerful to be able to pass the results of one command to another. Composability is a [key philosophy](https://make.wordpress.org/cli/handbook/philosophy/) of WP-CLI, and there are two common approaches for composing commands.

*Command substitution* passes the output of one command to another command, without any transformation to the output.

`wp post list` only lists posts; it doesn't perform any operation on them. In this example, the command lists page ids as space-separated values.

```bash
$ wp post list --post_type='page' --format=ids
1164 1186
```
Combining `wp post list` with `wp post delete` lets you easily delete all posts. In this example, `$()` lets us pass the space-separated page ids to `wp post delete`.

```bash
$ wp post delete $(wp post list --post_type='page' --format=ids)
Success: Trashed post 1164.
Success: Trashed post 1186.
```

If you need a bit more flexibility, *xargs* lets you pass the output of one command to another command, while performing minor transformation on the output.

You may want to assign all editor capabilities to the author role. However, `wp cap list` lists capabilities separated by newlines, and `wp cap add` only accepts space-separated capabilities. Enter, `xargs`, whose default behavior is to split newline output into a space-separated list. Note the `|` shell operator, which passes the results of `wp cap list` to `xargs`. Without `|`, you'll see a WP-CLI error.

```bash
$ wp cap list 'editor' | xargs wp cap add 'author'
Success: Added 24 capabilities to 'author' role.
```

`wp user generate` only generates users; it doesn't perform supplemental operations. In this example, `wp user generate` passes user ids to `xargs`, which splits the space-separated ids into a list and calls `wp user meta add` for each.

```bash
$ wp user generate --count=5 --format=ids | xargs -0 -d ' ' -I % wp user meta add % foo bar
Success: Added custom field.
Success: Added custom field.
Success: Added custom field.
Success: Added custom field.
Success: Added custom field.
```

### Define aliases, short macros to common commands

If you find yourself running the same commands quite often, you can define aliases to them for easier access.

Run all three status check commands with one `check-all` alias. In this example, running `alias` creates a `check-all` alias for the current shell session. Save the same statement to your `~/.bashrc` or `~/.zshrc` to always have it available.

```bash
$ alias check-all='wp core check-update && wp plugin list --update=available && wp theme list --update=available'
$ check-all
+-----------------+-------------+-----------------------------------------------------------+
| version         | update_type | package_url                                               |
+-----------------+-------------+-----------------------------------------------------------+
| 4.7-beta4-39322 | minor       | https://wordpress.org/nightly-builds/wordpress-latest.zip |
+-----------------+-------------+-----------------------------------------------------------+
+-------------------------+----------+-----------+--------------+
| name                    | status   | update    | version      |
+-------------------------+----------+-----------+--------------+
| akismet                 | inactive | available | 3.1.8        |
| co-authors-plus         | inactive | available | 3.1.1        |
| wp-redis                | inactive | available | 0.2.2        |
| rest-api                | active   | available | 2.0-beta13.1 |
| wp-api-oauth1           | inactive | available | 0.2          |
+-------------------------+----------+-----------+--------------+
+----------------------+----------+-----------+---------+
| name                 | status   | update    | version |
+----------------------+----------+-----------+---------+
| p2                   | inactive | available | 1.4.2   |
+----------------------+----------+-----------+---------+
```

### Save command output

WP-CLI commands send output to both `STDOUT` and `STDERR`, depending on the nature of the message. You may not notice there are two destinations, because WP-CLI renders both inside your shell. However, if you want to capture your output to a file, the distinction matters.

Simply using `>` will capture STDOUT from the command to a file.

```bash
$ wp import wordpress.wxr --authors=create > import.log
```

Redirect STDERR to STDOUT with `2>&1`, and then capture STDOUT to a log file.

```bash
$ wp import wordpress.wxr --authors=create > import.log 2>&1
```

When you're capturing output to a file, you won't see the output in your current shell session. However, you can open a second shell session and run `tail -f <file>` to see the output as it's added to the file.

Alternatively, you can use `tee` that writes to both standard output and files. You only have to pipe the output to the command and specify the file name.

```bash
$ wp import wordpress.wxr --authors=create | tee import.log
```

This will display the output in the current shell screen and also write it to the log file.

Note that if the file already exists, it will be overwritten. If you want to append the output to the file, use the `-a` option.

```bash
$ wp import wordpress.wxr --authors=create | tee -a import.log
```

## Snippets

Are you an expert in bash or zsh? Share your tips here.

**Take a look at the plugin changelog**

Needs `elinks` to browse HTML.

```bash
wget -qO- http://api.wordpress.org/plugins/info/1.0/akismet|php -r '$seri=unserialize(stream_get_contents(STDIN)); echo $seri->sections["changelog"];'|elinks -force-html
```

Explanation

- set wget quiet & query the WordPress.org Plugin API
- unserialize with php, `stream_get_contents(STDIN)` means "get all from *stdin*"
- echo the changelog part from the API's reply
- fire up elinks (a console browser) to view the changelog

**Start wp-cli with ABSPATH in the current dir and under the current dir's owner**

```bash
#!/bin/bash

sudo -u $(stat . -c %U) -- wp --path="$PWD" "$@"
```

Explanation

The `stat` command returns the owner of the current directory, WordPress root.

**Install and Configure WordPress with WP-CLI**

```bash
wp_install () 
{ 
    wp core download --path=$1;
    cd $1;
    read -p 'name the database:' dbname;
    wp config create --dbname=$dbname --dbuser=root --dbpass=awoods --dbhost=localhost;
    wp db create;
    wp core install --prompt
}

$ source ~/.bashrc
$ wp_install new-site
```

Explanation

Add this function to your ~/.bashrc are reload your shell (or open a new shell).
You'll need to substitute these database credentials with your own.
When you need to create a new WordPress site, call this function and specify the
name of the directory where you want to create the site. This emulates the
web-based install process.

**List all image URL-s in posts**

```bash
wp post list --field=ID|xargs -I % wp post get % --field=post_content|sed -ne 's;.*\(https\?\S\+\(jpe\?g\|png\|gif\)\).*;\1;gp'
```

Explanation

- List all post ID-s
- Get each content (xargs)
- Display only image URL-s (sed)

**Create a page from a file and flag it with the file name**

```bash
wp post create new_page.html --post_type=page --post_title="New Page" --porcelain | xargs -I % wp post meta add % imported_from new_page.html
```

Explanation

- Create a page (--porcelain will return only the new post ID)
- Create post meta with xargs using "-I %" to signify the placeholder template for the new post ID

**Change to a certain WordPress installation's directory from a menu**

```bash
#!/bin/bash

WP_TOP_PATH="/home/"
MENU_TEXT="Choose an installation"
GAUGE_TEXT="Searching for WordPress"

declare -a MENU
WPS="$(wp --allow-root find "$WP_TOP_PATH" --field=version_path)"
WP_TOTAL="$(wc -l <<< "$WPS")"
WP_COUNT="0"

while read -r WP; do
    WP_LOCAL="${WP%wp-includes/version.php}"

    NAME="$(cd "$WP_LOCAL"; sudo -u "$(stat . -c %U)" -- wp --no-debug --quiet option get blogname)"
    if [ -z "$NAME" ]; then
        NAME="(unknown)"
    fi
    MENU+=( "$WP_LOCAL" "$NAME" )

    echo "$((++WP_COUNT * 100 / WP_TOTAL))".
done <<< "$WPS" > >(whiptail --gauge "$GAUGE_TEXT" 7 74 0)

WP_LOCAL="$(whiptail --title "WordPress" --menu "$MENU_TEXT"  $((${#MENU[*]} / 2 + 7)) 74 10 "${MENU[@]}" 3>&1 1>&2 2>&3)"

if [ $? -ne 0 ] || [ ! -d "$WP_LOCAL" ]; then
    echo "Cannot find '${WP_LOCAL}'" 1>&2
    exit 100
fi

echo "cd ${WP_LOCAL}"
```

Explanation

- Needs `wp-cli/find-command` and `whiptail`
- Find all WordPress installations below `$WP_TOP_PATH` - must be run as root
- Display a progress bar while getting `blogname` of each installation
- Choose one installation from a nice menu and display `cd` command for it

**Discard header row from a CSV**

By default, `--format=csv` includes a header row:

```bash
$ wp user list --format=csv
ID,user_login,display_name,user_email,user_registered,roles
1,daniel,daniel,daniel@handbuilt.co,"2022-12-21 23:05:16",administrator
```

If you'd like to discard the header row, `tail` is pretty helpful:

```bash
$ wp user list --format=csv | tail -n +2
1,daniel,daniel,daniel@handbuilt.co,"2022-12-21 23:05:16",administrator
```
