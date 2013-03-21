**wp-cli** is a set of command-line tools for managing [WordPress](http://wordpress.org) installations. You can update plugins, set up multisite installs, create posts and much more.

Minimum Requirements
==========

You'll need **PHP 5.3** or later.

All WP-CLI commands are guaranteed to work with **WordPress 3.4** or later. Some commands, like `wp core update`, might work with older versions as well.

Installing
==========

**Via Phar Archive:**

You can download WP-CLI packaged as a [single file](http://wp-cli.org/packages/phar/wp-cli.phar) ([md5](http://wp-cli.org/packages/phar/wp-cli.phar.md5)):

```
sudo -s
curl http://wp-cli.org/packages/phar/wp-cli.phar > /usr/bin/wp
chmod +x /usr/bin/wp
```

If you have Suhosin enabled, make sure to set `suhosin.executor.include.whitelist="phar"` in your `suhosin.ini` or `php.ini` file.

**Via GIT:**

```
git clone git://github.com/wp-cli/wp-cli.git ~/git/wp-cli
cd ~/git/wp-cli
sudo utils/dev-build
```

You can replace `~/git/wp-cli` with whatever you want.

**Via GIT (without sudo):**

```
git clone git://github.com/wp-cli/wp-cli.git ~/git/wp-cli
cd ~/git/wp-cli
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

Now, set up the `wp` alias:

```bash
alias wp='~/git/wp-cli/bin/wp'
source ~/git/wp-cli/utils/wp-completion.bash
```

Add the above two lines to your `.bashrc` or `.bash_profile` file to have it set up automatically when you log in.

MAMP, XAMP, etc.
-----------

If the `php` command is not available, you can try finding an appropriate binary:

```
./utils/find-php
```

Then, create an environment variable called `WP_CLI_PHP` with the path found by `find-php`.

In a UNIX environment, you would do this by adding the following line to your `.bashrc` file:

```
export WP_CLI_PHP=/path/to/php-binary
```

Using
=====

Go into a WordPress root folder:

```
cd /var/www/wp/
```

Typing `wp` should show you output similar to this:

```
Available commands:
    wp blog create|delete
    wp cache add|decr|delete|flush|get|incr|replace|set|type
    wp comment create|delete|trash|untrash|spam|unspam|approve|unapprove|count|status|last
    wp core download|config|is-installed|install|install-network|version|update|update-db
    wp db create|drop|reset|optimize|repair|connect|cli|query|export|import
    wp eval-file
    ...

See 'wp help &lt;command&gt;' for more information on a specific command.
```

Let's try to install the Hello Dolly plugin from wordpress.org:

```
wp plugin install hello-dolly
```

Output:

```
Installing Hello Dolly (1.5)

Downloading install package from http://downloads.WordPress.org/plugin/hello-dolly.1.5.zip ...
Unpacking the package ...
Installing the plugin ...
Plugin installed successfully.
```

Multisite
---------

On a multisite installation, you need to pass a `--url` parameter, so that wp-cli knows which site it's supposed to be operating on:

```
wp theme status --url=localhost/wp/test
```

If you have a subdomain installation, it would look like this:

```
wp theme status --url=test.example.com
```

If you're usually working on the same site most of the time, you can create a `wp-cli.yml` file in the root directory:

```
url: test.example.com
```

Then, you can call `wp` without the `--url` parameter again:

```
wp theme status
```

Adding commands
===============

Adding commands to wp-cli is very easy. You can even add them from within your own plugin.
You can find more information about adding commands in the [Commands Cookbook](https://github.com/wp-cli/wp-cli/wiki/Commands-Cookbook) on our Wiki.

**Please share the commands you make, issue a pull request to get them included in wp-cli by default.**

Contributors
------------

- [Contributor list](https://github.com/wp-cli/wp-cli/contributors)
- [Contributor guide](https://github.com/wp-cli/wp-cli/blob/master/CONTRIBUTING.md)
