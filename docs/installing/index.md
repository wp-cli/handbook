---
layout: doc
title: Installing
category: Guides
description: Recommended and alternative installation mechanisms.
quick_links:
  - Recommended Installation
  - Installing nightly via Phar
  - Installing via Composer
---

## Recommended installation

The recommended way to install WP-CLI is by downloading the Phar build, marking it executable, and placing it on your PATH.

First, download [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) using `wget` or `curl`. For example:

```
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Then, check if it works:

```
php wp-cli.phar --info
```

To be able to type just `wp`, instead of `php wp-cli.phar`, you need to make the file executable and move it to somewhere in your PATH. For example:

```
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp
```

Now try running `wp --info`. If WP-CLI is installed successfully, you'll see output like this:

```
PHP binary:    /usr/bin/php5
PHP version:    5.5.9-1ubuntu4.14
php.ini used:   /etc/php5/cli/php.ini
WP-CLI root dir:        /home/wp-cli/.wp-cli
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version: 0.23.0
```

Voila! You're now an official WP-CLI user.

Wondering what to do next? Check out the [quick start guide](/docs/quick-start/) for a short introduction and some example usage.

## Alternative installation methods

### Installing nightly via Phar

The "nightly" is the bleeding-edge version of WP-CLI, built straight from the [master branch](https://github.com/wp-cli/wp-cli/commits/master).

Just follow the normal [installation instructions](/#install), except change the URL to the phar file:

<https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli-nightly.phar>

### Installing via Composer

**As part of a project**

Add the following line to your projects `composer.json` file:

    "require" : {
    	"wp-cli/wp-cli" : "~0.22",
    	"psy/psysh" : "~0.6"
    }

where the `psy/psysh` package is just a _suggestion_ by the WP CLI package and _optional_.

Optionally (if run on a server or for e.g. in a virtual machine locally) you can automate setting up the command and making it available in the users path. Let's assume _Composer_ installed into `/var/www/vendor`, we can add the following `scripts`/commands to the `composer.json` file. The second and third line set up [bash completion](https://github.com/wp-cli/wp-cli/blob/master/utils/wp-completion.bash) so we don't have to remember every single command:

    "scripts" : {
    	"post-install-cmd" : [
    		"sudo ln -s /var/www/vendor/wp-cli/wp-cli/bin/wp /usr/bin/wp",
    		"source /var/www/vendor/wp-cli/wp-cli/utils/wp-completion.bash",
    		"source ~/.bash_profile"
    	]
    }

**As a project**

Needs `php` and `composer` (or `php composer.phar`) set up as console commands.

    composer create-project wp-cli/wp-cli --prefer-source

Then run `wp-cli/bin/wp` or add `wp-cli/bin` folder to `PATH` for global `wp` command (on Windows, use `wp-cli/bin/wp.bat` instead).

To update, you'll need to:

    cd wp-cli
    git pull origin master
    composer install

**Global require**

If you prefer to have PHP tools installed globally via Composer and have something like `~/.composer/vendor/bin` in your PATH (or `C:\Users\you\AppData\Roaming\Composer\vendor\bin` on Windows), you can just run:

    composer global require wp-cli/wp-cli

To update everything globally, run `composer global update`.

**Installing a specific version**

If you want to install a specific version of WP-CLI then append the version numbers behind the packages


    composer create-project wp-cli/wp-cli:0.22.0 --no-dev

The version must be in a [format](https://getcomposer.org/doc/04-schema.md#version) that Composer can understand and can be found on [packagist.org](https://packagist.org/packages/wp-cli/wp-cli).

**Installing bleeding-edge**

If you want to install bleeding-edge then use `dev-master`:

    composer create-project wp-cli/wp-cli:dev-master --no-dev

#### Installing globally as a project

You can specify a custom install path for WP-CLI, like so:

    composer create-project wp-cli/wp-cli /usr/share/wp-cli --no-dev

Then, just symlink the binary:

    sudo ln -s /usr/share/wp-cli/bin/wp /usr/bin/wp

### Installing via Homebrew

    brew install homebrew/php/wp-cli

Here's the [formula](https://github.com/homebrew/homebrew-php/blob/master/Formula/wp-cli.rb).

### Installing on Windows

Install via [composer as described above](#installing-via-composer) or use the following method.

Make sure you have php installed and [in your path](http://php.net/manual/en/faq.installation.php#faq.installation.addtopath) so you can execute it globally.

Download [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) manually and save it to a folder, for example `c:\wp-cli`

Create a file named `wp.bat` in `c:\wp-cli` with the following contents:

    @ECHO OFF
    php "c:/wp-cli/wp-cli.phar" %*

Add `c:\wp-cli` to your path:

    setx path "%path%;c:\wp-cli"

Rename `wp-cli.phar` to `wp` 

You can now use WP-CLI from anywhere in Windows command line.

### Installing via .deb package

On Debian or Ubuntu, just download and open one of the .deb packages: <https://github.com/wp-cli/builds/tree/gh-pages/deb>


### Using a custom PHP binary

In some cases, like for MAMP installs, you might not want to use the default PHP binary.

To change it, you need to set the WP_CLI_PHP environment variable in your `.bash_profile`:

    export WP_CLI_PHP=/Applications/MAMP/.../bin/php

Once you have added that and saved the file, reload the file with:

    source ~/.bash_profile

After you've done that, run `wp --info` to make sure it took.

### Installing on MediaTemple

See [http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/](http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/)
