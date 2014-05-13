---
layout: default
title: Command line interface for WordPress
---
**WP-CLI** is a set of command-line tools for managing [WordPress](http://wordpress.org) installations. You can update plugins, set up multisite installs and much more, without using a web browser.

<h2 id="requirements">Requirements</h2>

* UNIX-like environment (OS X, Linux, FreeBSD, Cygwin)
* PHP 5.3.2 or later
* WordPress 3.5.2 or later

<h2 id="install">Installing (And Upgrading)</h2>

First, download [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) using `wget` or `curl`. For example:

~~~
curl -kL https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > wp-cli.phar
~~~


Then, check if it works:

~~~
php wp-cli.phar --info
~~~

To be able to type just `wp`, instead of `php wp-cli.phar`, you need to make the file executable and move it to somewhere in your PATH. For example:

~~~
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/bin/wp
~~~

Now try running `wp --info`.

Upgrade using the same procedure.

<h3 id="mamp">MAMP</h3>

If you're using MAMP, you will probably get a MySQL error, because the `php` found in your PATH is not the same as the PHP used by MAMP. Here is one way to [fix it](http://stackoverflow.com/a/10653443/97998).

More resources:

* [Getting Started with WP-CLI](https://trepmal.com/2014/02/22/getting-started-with-wp-cli/) (includes video)
* [Alternative Install Methods](https://github.com/wp-cli/wp-cli/wiki/Alternative-Install-Methods)

<h3 id="complete">Tab completions</h3>

WP-CLI also comes with a tab completion script for Bash. Just download [wp-completion.bash](https://github.com/wp-cli/wp-cli/raw/master/utils/wp-completion.bash) and load it from `~/.bash_profile`:

~~~
source /FULL/PATH/TO/wp-completion.bash
~~~

(Don't forget to run `source ~/.bash_profile` afterwards)

<h2 id="usage">Using</h2>

Go into a WordPress root folder:

~~~
cd /var/www/wp/
~~~

Typing `wp` should show you output similar to this:

~~~
Available commands:
    wp blog create|delete
    wp cache add|decr|delete|flush|get|incr|replace|set|type
    wp comment create|delete|trash|untrash|spam|unspam|approve|unapprove|count|status|last
    wp core download|config|is-installed|install|install-network|version|update|update-db
    wp db create|drop|reset|optimize|repair|connect|cli|query|export|import
    wp eval-file
    ...

See 'wp help <command>' for more information on a specific command.
~~~

Let's try to install the Hello Dolly plugin from wordpress.org:

~~~
wp plugin install hello-dolly
~~~

Output:

~~~
Installing Hello Dolly (1.5)

Downloading install package from http://downloads.WordPress.org/plugin/hello-dolly.1.5.zip ...
Unpacking the package ...
Installing the plugin ...
Plugin installed successfully.
~~~

<h3 id="multisite">Multisite</h3>

On a multisite installation, you need to pass a `--url` parameter, so that WP-CLI knows which site it's supposed to be operating on:

~~~
wp theme status --url=localhost/wp/test
~~~

If you have a subdomain installation, it would look like this:

~~~
wp theme status --url=test.example.com
~~~

If you're usually working on the same site most of the time, you can create a `wp-cli.yml` file in the root directory:

~~~
url: test.example.com
~~~

Then, you can call `wp` without the `--url` parameter again:

~~~
wp theme status
~~~

<h2>Adding commands</h2>

Adding commands to WP-CLI is as easy as creating a PHP class. See the [Commands Cookbook](https://github.com/wp-cli/wp-cli/wiki/Commands-Cookbook) for more info.

Please share the commands you make by adding them to the [List of community commands](https://github.com/wp-cli/wp-cli/wiki/List-of-community-commands).

<h3>Contributors</h3>

- [Contributor list](https://github.com/wp-cli/wp-cli/contributors)
- [Contributor guide](https://github.com/wp-cli/wp-cli/blob/master/CONTRIBUTING.md)
