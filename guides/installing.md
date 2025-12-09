# Installing

## Recommended installation

The recommended way to install WP-CLI is by downloading the Phar build (archives similar to Java JAR files, [see this article for more detail](http://php.net/manual/en/phar.using.intro.php)), marking it executable, and placing it on your PATH.

First, download [wp-cli.phar](https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) using `wget` or `curl`. For example:

```
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

### Verifying the download (optional but recommended)

Before using the downloaded file, you can verify its authenticity and integrity. See our [guide to verifying WP-CLI downloads](https://make.wordpress.org/cli/handbook/guides/verifying-downloads/) for detailed instructions on using GPG signatures or checksums to ensure the file hasn't been tampered with.

Quick verification using GPG:

```
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar.asc
curl -L https://raw.githubusercontent.com/wp-cli/builds/gh-pages/wp-cli.pgp | gpg --import
gpg --verify wp-cli.phar.asc wp-cli.phar
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
OS:  Linux 4.10.0-42-generic #46~16.04.1-Ubuntu SMP Mon Dec 4 15:57:59 UTC 2017 x86_64
Shell:   /usr/bin/zsh
PHP binary:    /usr/bin/php
PHP version:     7.1.12-1+ubuntu16.04.1+deb.sury.org+1
php.ini used:   /etc/php/7.1/cli/php.ini
MySQL binary:
MySQL version:
SQL modes:
WP-CLI root dir:        /home/wp-cli/.wp-cli
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version: 1.5.0
```

Voila! You're now an official WP-CLI user.

Wondering what to do next? Check out the [quick start guide](https://make.wordpress.org/cli/handbook/quick-start/) for a short introduction and some example usage.

### Updating WP-CLI

If you have installed WP-CLI using the recommended Phar method, you can update it at any time by running `wp cli update` (although if WP-CLI is owned by root, that may be `sudo wp cli update`). If you installed WP-CLI using the Composer or Git-based installations, see the specific instructions for updating associated with each method below.

When you run `wp cli update`, you'll be prompted to confirm that you wish to update with a message similar to the following:

```
You have version 0.21.1. Would you like to update to 0.23.1? [y/n]
```

After you accept, you should see a success message:

```
Success: Updated WP-CLI to 0.23.1
```

If you're already running the latest version of WP-CLI, you'll see this message:

```
WP-CLI is at the latest version.
```

Want to live life on the edge? Run `wp cli update --nightly` to use the latest nightly build of WP-CLI. The nightly build is more or less stable enough for you to use in your local environment, and always includes the latest and greatest.

For more information about `wp cli update`, including flags and options that can be used, read the full [docs page on the update command](https://developer.wordpress.org/cli/commands/cli/update/).

### Tab completions

#### Bash & Z-Shell

WP-CLI also comes with a tab completion script for _Bash_ and _Z-Shell_. Just download [wp-completion.bash](https://github.com/wp-cli/wp-cli/raw/main/utils/wp-completion.bash) and source it from `~/.bash_profile`:

```
source /FULL/PATH/TO/wp-completion.bash
```

To have this change take effect in your currently active shell, run `source ~/.bash_profile` afterwards.

#### Oh My Zsh

If you're using the _Oh My Zsh_ framework, you can enable the [built-in `wp-cli` plugin](https://github.com/robbyrussell/oh-my-zsh/tree/master/plugins/wp-cli), by adding it to the `plugins=(wp-cli git [...])` line in your `~/.zshrc` file.

Note: the Oh My Zsh plugin comes with the bash completion script included, so it's unnecessary to have both.

To have this change take effect in your currently active shell, run `source ~/.zshrc` afterwards.

#### Fish

If you're using the _Fish_ shell, you can download [wp.fish](https://github.com/wp-cli/wp-cli/raw/main/utils/wp.fish) and move it to `~/.config/fish/completions/wp.fish`. 
Afterwards just type `wp` and press `TAB`, and fish will automatically source `wp.fish`.

### Dash/Alfred workflow

If you're using _Dash_ and _Alfred_, you can add a custom Alfred workflow to look up WP-CLI command information.

#### Setup
 
Open Dash and download the [WP-CLI docset](https://github.com/wp-cli/dash-docset-generator):
Dash › Preferences › Downloads › User Contributions › Search for WP-CLI

Still in Dash, activate the Alfred integration:
Dash › Preferences › Integration › Alfred

#### Usage

Open Alfred and try searching for a specific command. For example, this gives you an overview of the `plugin` command and its subcommands: `wp-cli plugin`

## Alternative installation methods

**Note:** For all Phar-based installation methods below, you can verify the downloaded file's authenticity and integrity. See the [guide to verifying WP-CLI downloads](https://make.wordpress.org/cli/handbook/guides/verifying-downloads/) for instructions.

### Installing via Git

If you intend to work on WP-CLI itself, see the [Setting up](https://make.wordpress.org/cli/handbook/pull-requests/#setting-up) section in [Pull Requests](https://make.wordpress.org/cli/handbook/pull-requests/).

### Installing nightly via Phar

The "nightly" is the bleeding-edge version of WP-CLI, built straight from the [main branch](https://github.com/wp-cli/wp-cli/commits/main).

Just follow the normal [installation instructions](/#install), except change the URL to the phar file:

<https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli-nightly.phar>

### Installing via Composer

**As part of a project**

Add the following line to your project's `composer.json` file:

    "require" : {
    	"wp-cli/wp-cli-bundle": "*"
    }

To add any additional suggested packages seen in the `wp-cli-bundle` package, such as `psy/psysh`, run: 

```
composer require --dev $(composer suggests --by-package | awk '/wp-cli\/wp-cli-bundle/' RS= | grep -o -P '(?<=- ).*(?=:)')
```

Optionally (if run on a server or for e.g. in a virtual machine locally) you can automate setting up the command and making it available in the users path. Let's assume _Composer_ installed into `/var/www/vendor` (you can get the composer `vendor-dir` config variable specific to your machine via `composer config --list | grep "\[vendor-dir\]"`), we can add the following `scripts`/commands to the `composer.json` file. The second and third line set up [bash completion](https://github.com/wp-cli/wp-cli/blob/main/utils/wp-completion.bash) so we don't have to remember every single command:

    "scripts" : {
    	"post-install-cmd" : [
    		"[[ -f /usr/bin/wp ]] || sudo ln -s /var/www/vendor/wp-cli/wp-cli/bin/wp /usr/bin/wp",
    		"source /var/www/vendor/wp-cli/wp-cli/utils/wp-completion.bash",
        "[[ -f ~/.bash_profile ]] || touch ~/.bash_profile",
    		"source ~/.bash_profile"
    	]
    }

Above script assumes that your current shell is `bash`, which might not be the case for all users. Example for a vagrant box (added to the `scripts`-block):

    cat /etc/passwd | grep $(whoami)
    vagrant:x:1000:1000::/home/vagrant:/bin/bash

In case you got `bash` available and installed for your OS, you can switch dynamically:

    "scripts" : {
    	"post-update-cmd" : [
    		"/bin/bash -c \"[[ -f /usr/local/bin/wp ]] || sudo ln -s /var/www/vendor/wp-cli/wp-cli/bin/wp /usr/bin/wp\"",
    		"/bin/bash -c \"source /var/www/vendor/wp-cli/wp-cli/utils/wp-completion.bash\"",
        "/bin/bash -c \"[[ -f ~/.bash_profile ]] || touch ~/.bash_profile\"",
    		"/bin/bash -c \"source ~/.bash_profile\""
    	]
    }

**As a project**

Needs `php` and `composer` (or `php composer.phar`) set up as console commands.

    composer create-project wp-cli/wp-cli-bundle --prefer-source

Then run `wp-cli-bundle/vendor/wp-cli/wp-cli/bin/wp` or add `wp-cli-bundle/vendor/wp-cli/wp-cli/bin` folder to `PATH` for global `wp` command (on Windows, use `wp-cli/bin/wp.bat` instead).

To update, you'll need to:

    cd wp-cli-bundle
    git pull origin main
    composer install

**Global require**

If you prefer to have PHP tools installed globally via Composer and have something like `~/.composer/vendor/bin` in your PATH (or `C:\Users\you\AppData\Roaming\Composer\vendor\bin` on Windows), you can just run:

    composer global require wp-cli/wp-cli-bundle

To update everything globally, run `composer global update`.

**Installing a specific version**

If you want to install a specific version of WP-CLI then append the version numbers behind the packages

    composer create-project wp-cli/wp-cli-bundle:2.1.0 --no-dev

The version must be in a [format](https://getcomposer.org/doc/04-schema.md#version) that Composer can understand and can be found on [packagist.org](https://packagist.org/packages/wp-cli/wp-cli).

**Installing bleeding-edge**

If you want to install bleeding-edge then use `dev-main`:

    composer create-project wp-cli/wp-cli-bundle:dev-main --no-dev

#### Installing globally as a project

You can specify a custom install path for WP-CLI, like so:

    composer create-project wp-cli/wp-cli-bundle /usr/share/wp-cli --no-dev

Then, just symlink the binary:

    sudo ln -s /usr/share/wp-cli-bundle/vendor/wp-cli/wp-cli/bin /usr/bin/wp

### Installing via Homebrew

    brew install wp-cli

Here's the [formula](https://github.com/Homebrew/homebrew-core/blob/master/Formula/w/wp-cli.rb).

### Installing via Docker

The Docker community maintains [WordPress and WP-CLI images](https://hub.docker.com/_/wordpress/).

To include the WP-CLI image in your own project:

    image: wordpress:cli

### Installing on Windows

Install via [composer as described above](#installing-via-composer) or use the following method.

Make sure you have php installed and [in your path](http://php.net/manual/en/faq.installation.php#faq.installation.addtopath) so you can execute it globally.

Download [wp-cli.phar](https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) manually and save it to a folder, for example `c:\wp-cli`

Create a file named `wp.bat` in `c:\wp-cli` with the following contents:

    @ECHO OFF
    php "c:/wp-cli/wp-cli.phar" %*

Add `c:\wp-cli` to your path:

    setx path "%path%;c:\wp-cli"

You can now use WP-CLI from anywhere in Windows command line.

### Installing via .deb package

On Debian or Ubuntu, just download and open one of the .deb packages: <https://github.com/wp-cli/builds/tree/gh-pages/deb>

### Installing on Fedora 30+

    su -c 'dnf install wp-cli'

### Installing on CentOS

    su -c 'yum install wp-cli'
    
### Using a custom PHP binary

In some cases, like for MAMP installs, you might not want to use the default PHP binary.

To use the latest PHP version provided by MAMP, you'll need to modify your `PATH` environment variable with the following added to your `~/.bash_profile` or `~/.zsh_profile`:

    PHP_VERSION=$(ls /Applications/MAMP/bin/php/ | sort -n | tail -1)
    export PATH=/Applications/MAMP/bin/php/${PHP_VERSION}/bin:$PATH

To use a specific PHP version provided by MAMP, you'll need to determine the path to the PHP version's executable, and modify your `PATH` environment variable with the following added to your `~/.bash_profile` or `~/.zsh_profile`:

    export PATH=/Applications/MAMP/bin/php/php5.5.26/bin:$PATH

Note there's no assignment of the `PHP_VERSION` variable in this case, because we aren't dynamically looking up the latest PHP version.

Once you have added that and saved the file, reload the file with:

    source ~/.bash_profile

After you've done that, run `wp --info` to make sure the change has been applied correctly.

For Composer and Git-based WP-CLI installation, you can alternatively set the `WP_CLI_PHP` environment variable, if you don't want to modify `PATH` for some reason.

### Installing on MediaTemple

See [http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/](http://razorfrog.com/installing-wp-cli-on-mediatemple-grid-server/)
