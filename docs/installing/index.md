---
layout: default
title: Installing
---

## Recommended Installation

The recommended way to install WP-CLI is by downloading the Phar build, marking it executable, and placing it on your PATH.

First, download [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) using `wget` or `curl`. For example:

~~~
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
~~~

Then, check if it works:

~~~
php wp-cli.phar --info
~~~

To be able to type just `wp`, instead of `php wp-cli.phar`, you need to make the file executable and move it to somewhere in your PATH. For example:

~~~
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp
~~~

Now try running `wp --info`. Voila!

## Alternative Installation Methods

### Installing nightly via Phar

The "nightly" is the bleeding-edge version of WP-CLI, built straight from the [master branch](https://github.com/wp-cli/wp-cli/commits/master).

Just follow the normal [installation instructions](/#install), except change the URL to the phar file:

<https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli-nightly.phar>

### Installing via Composer

#### As part of a project

Add the following line to your projects `composer.json` file:

```json
"require" : {
	"wp-cli/wp-cli" : "~0.21",
	"psy/psysh" : "~0.6"
}
```
where the `psy/psysh` package is just a _suggestion_ by the WP CLI package and _optional_.

Optionally (if run on a server or for e.g. in a virtual machine locally) you can automate setting up the command and making it available in the users path. Let's assume _Composer_ installed into `/var/www/vendor`, we can add the following `scripts`/commands to the `composer.json` file. The second and third line set up [bash completion](https://github.com/wp-cli/wp-cli/blob/master/utils/wp-completion.bash) so we don't have to remember every single command:

```json
"scripts" : {
	"post-install-cmd" : [
		"sudo ln -s /var/www/vendor/wp-cli/wp-cli/bin/wp /usr/bin/wp",
		"source /var/www/vendor/wp-cli/wp-cli/utils/wp-completion.bash",
		"source ~/.bash_profile"
	]
}
```

#### As a project

Needs `php` and `composer` (or `php composer.phar`) set up as console commands.

```
composer create-project wp-cli/wp-cli --prefer-source
```

Then run `wp-cli/bin/wp` or add `wp-cli/bin` folder to `PATH` for global `wp` command (on Windows, use `wp-cli/bin/wp.bat` instead).

To update, you'll need to:

```
cd wp-cli
git pull origin master
composer install
```

#### Global require

If you prefer to have PHP tools installed globally via Composer and have something like `~/.composer/vendor/bin` in your PATH (or `C:\Users\you\AppData\Roaming\Composer\vendor\bin` on Windows), you can just run:

```
composer global require wp-cli/wp-cli
```

To update everything globally, run `composer global update`.


#### Installing a specific version

If you want to install a specific version of WP-CLI then append the version numbers behind the packages

```
composer create-project wp-cli/wp-cli:0.15.1 --no-dev
```
The version must be in a [format](https://getcomposer.org/doc/04-schema.md#version) that Composer can understand and can be found on [packagist.org](https://packagist.org/packages/wp-cli/wp-cli).

**Installing bleeding-edge**  
If you want to install bleeding-edge then use `dev-master`:

```
composer create-project wp-cli/wp-cli:dev-master --no-dev
```

#### Installing globally as a project

You can specify a custom install path for WP-CLI, like so:

```
composer create-project wp-cli/wp-cli /usr/share/wp-cli --no-dev
```

Then, just symlink the binary:

```
sudo ln -s /usr/share/wp-cli/bin/wp /usr/bin/wp
```

### Installing via Homebrew

```
brew install homebrew/php/wp-cli
```
Here's the [formula](https://github.com/homebrew/homebrew-php/blob/master/Formula/wp-cli.rb).

### Installing on Windows

Install via [composer as described above](#installing-via-composer) or use the following method.

Make sure you have php installed and [in your path](http://php.net/manual/en/faq.installation.php#faq.installation.addtopath) so you can execute it globally.

Download [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) manually and save it to a folder, for example `c:\wp-cli`

Create a file named `wp.bat` in `c:\wp-cli` with the following contents:

```
@ECHO OFF
php "c:/wp-cli/wp-cli.phar" %*
```

Add `c:\wp-cli` to your path:

```
setx path "%path%;c:\wp-cli"
```

You can now use wp-cli from anywhere in Windows command line.

### Installing via .deb package

On Debian or Ubuntu, just download and open one of the .deb packages: <https://github.com/wp-cli/builds/tree/gh-pages/deb>


### Using a custom PHP binary

In some cases, like for MAMP installs, you might not want to use the default PHP binary.

To change it, you need to set the WP_CLI_PHP environment variable in your `.bash_profile`:

```
export WP_CLI_PHP=/Applications/MAMP/.../bin/php
```

Once you have added that and saved the file, reload the file with:

```
source ~/.bash_profile
```

After you've done that, run `wp --info` to make sure it took.

### Installing on MediaTemple

See [http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/](http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/)

### Installing Locally on cPanel Dedicated Server

Below is an account of upgrading from wp-cli 0.13.0 to version 0.17.1 onto a dedicated server using cPanel accounts thus restricting wp-cli to individual domain vs entire box ... 

I was upgrading from version 0.13 to 0.17.1 and the install script previously used is deprecated yet my working version of wp-cli was in `/home/[USERNAME]/.wp-cli/` ... I also did not want to super-user-do across my dedicated box but instead keep wp-cli at account level (a domain vs root box) ... 

* First I downloaded the wp-cli.phar file onto my server in the user account I want wp-cli to run ... can download the wp-cli.phar file one of two ways - click on link with web broswer at https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar then ftp file onto server ... or via wget with the no-check-certificate flag as the SSL certificate at githubusercontent.com kicks out errors (ditto using curl -k)

    <pre><code>wget --no-check-certificate https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar</code></pre>

* Once the file is on server, move it into the previous installed folder (or create the folder) -> /home/[USERNAME]/.wp-cli/ ... delete all other files and folders so only one file, wp-cli.phar, is in this folder ...

* Next make the file executable by chmod to 0755

* Key part is to now update your .bash_profile file with this line that also points to your WordPress directory (mine WP install is in the public_html folder) ... also note with cPanel the .bash_profile file is found in /home/[USERNAME]/.bash_profile

	<pre><code># WP-CLI Create WP Alias
alias wp="php /home/[USERNAME]/.wp-cli/wp-cli.phar --path=/home/[USERNAME]/public_html/"</code></pre>

* Now reload the bash profile 

	<pre><code>source ~/.bash_profile</code></pre>

* Then test and voila - working wp-cli.phar file ...

**Outstanding Issues** ... when I do wp --info, I get the following and it is the root dir, global config and project config that i'm not positive are correct so I might be missing something to set these but for now my install is working with various tests ... output from wp --info =

```
PHP binary: /usr/local/bin/php
PHP version: 5.5.18
php.ini used: /usr/local/lib/php.ini
WP-CLI root dir: phar://wp-cli.phar
WP-CLI global config: blank
WP-CLI project config: blank
WP-CLI version: 0.17.1
```

ps - this cPanel section authored by Chuck Scott - chuck at avantigroup dot com on 11.20.2014

### Installing Locally Better Way

Though previous method works well when `wp-cli` used interactively, it fails when it comes to automation. Some scripts (for example [wp-deploy capistrano tasks](https://github.com/Mixd/wp-deploy)) may access `wp-cli` via

```
/usr/bin/env wp
```

It means PATH should be aware of `wp` command. Also PATH should be defined in `.bashrc` file, not in `.bash_profile`, in order to make it visible to scripts. `.bash_profile` in turn could load `.bashrc`

**Complete HOWTO:**

- First download the `wp-cli.phar` file using wget or curl. For example:
	
	<pre><code>curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar</code></pre>

- Then, check if it works:
	
	<pre><code>php wp-cli.phar --info</code></pre>

- Move the file into the previous installed folder (or create the folder) -> `/home/[USERNAME]/.wp-cli/`, delete all other files and folders so only one file, `wp-cli.phar`, is in this folder. Rename `wp-cli.phar` into `wp` and make it executable:

	<pre><code>chmod +x wp-cli.phar
mkdir ~/.wp-cli
mv wp-cli.phar ~/.wp-cli/wp</code></pre>

- Next update (or create) your .bashrc file, located at `/home/[USERNAME]/.bashrc`. It should contain something like this:

	<pre><code>export PATH="$PATH:$HOME/.wp-cli"</code></pre>

- Update (or create) your .bash_profile file, located at `/home/[USERNAME]/.bash_profile`. It should contain something like this:

	<pre><code>if [ -f ~/.bashrc ]; then 
    source ~/.bashrc 
fi</code></pre>

- Finally reload .bashrc and check if everything works properly:
	
	<pre><code>source ~/.bashrc
/usr/bin/env wp --info</code></pre>
