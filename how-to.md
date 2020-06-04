# How to WP-CLI

## Introduction

Using WP-CLI you can perform specific tasks using the command line instead of accessing the WordPress admin panel. In the following section we will cover step by step some of these
tasks.

## How to install WordPress

Download and install WordPress using WP-CLI is very easy. It's done in four simple steps.
First you will need to download WordPress using the `wp core download` command.

### Step 1 - Download WordPress

The syntax of the command to download WordPress is the following `wp core download [--path=<path>] [--locale=<locale>] [--version=<version>] [--skip-content] [--force]`

    $ wp core download --path=wpdemo.test --locale=it_IT
    Creating directory '/wpdemo.test/'.
    Downloading WordPress 5.4.1 (it_IT)...
    md5 hash verified: 3fa03967b47cdfbf263462d451cdcdb8
    Success: WordPress downloaded.

The command above creates a wpdemo.test/ folder inside your current working directory and downloads the latest WordPress version. You can replace the --path=wpdemo.test with your
desired folder name and the --locale=it_IT with your desired locale. You can omit the --locale option and that will download by default WordPress in American English using the locale en_US.

### Step 2 - Generate a config file

In this step we will generate a config file and setup the database
credentials for our installation.
The basic syntax of the command is the following `wp config create --dbname=<dbname> --dbuser=<dbuser> [--dbpass=<dbpass>]`

    $ wp config create --dbname=your_db_name_here --dbuser=your_db_user_here --prompt=dbpass
    1/10 [--dbpass=<dbpass>]: type_your_password
    Success: Generated 'wp-config.php' file.

The command above generates the wp-config.php file and adds to it the database credentials that you passed. Make sure to replace "your_db_name_here" with the name you want to assign to the database, replace "your_db_user_here" with your database user and type the database password when prompted `1/10 [--dbpass=<dbpass>]:`

### Step 3 - Create the database

In this step we are going to actually create the database based on the information we passed to the wp-config.php file in the step 2.

    $ wp db create
    Success: Database created.

Now we are ready to move to the final step where we actually install WordPress.

### Step 4 - Install WordPress

To install WordPress now we need to run one last command.

    $ wp core install --url=wpclidemo.dev --title="WP-CLI" --admin_user=wpcli --admin_password=wpcli --admin_email=info@wp-cli.org
    Success: WordPress installed successfully.

remember to replace the values passed to each of the following options with the your desider values:

- `--url=wpclidemo.dev` replace wpclidemo.dev with your website url,
- `--title="WP-CLI"` replace WP-CLI with the name you want to assign to the website,
- `--admin_user=wpcli` replace wpcli with the username you want to assign to the website administrator
- `--admin_password=wpcli` replace wpcli with the password you want to use to access the WordPress administrator panel.

Congratulation! You have successfully Installed WordPress using WP-CLI.

## How to put the site in maintenance mode

WP-CLI offers a command to enable, disable maintenance mode and check in maintenance mode is
enabled or not.

### Step 1 - Check the status

    $ wp maintenance-mode status
    Maintenance mode is not active.

### Step 2 - Enable maintenance mode

    $ wp maintenance-mode activate
    Enabling Maintenance mode...
    Success: Activated Maintenance mode.

### Step 3 - Disable maintenance mode

    $ wp maintenance-mode deactivate
    Disabling Maintenance mode...
    Success: Deactivated Maintenance mode.

## How to start the web server

You can user the command `wp server` to launches PHP's built-in web server for a specific WordPress installation. By default the webserver will start using the local host and default port 8080 but you can change them using the --host and --port options.

### Step 1 - Start the web server using the default settings

    $ wp server
    PHP 7.2.24-0ubuntu0.18.04.4 Development Server started at Thu Jun  4 17:40:13 2020
    Listening on http://localhost:8080
    Document root is ../wpdemo.test
    Press Ctrl-C to quit.

This command will start the server using the default settings. We can now open our browser
and visit the link http://localhost:8080 to access our WordPress installation.

### Step 2 - Start the web server using different settings

If you want to specify a different port number or host you can simply pass them to the options
`--port` and `--host`

    $ wp server --port=9090 --host=192.168.0.4

The command above will start the web server and listen for requests on http://192.168.0.4:9090
you can open the browser and visit the page to access your WordPress intallation.

## How to create a custom plugin:

If you want to create your own plugins, WP-CLI has a powerful scaffold command that allows us to generate starter code. In this guide we will see how to generate starter code for a basic plugin.

### Step 1 - Scaffold the plugin files

The following command uses a number of options to lets us specify the plugin slug, its name, description, author name and uri as well as the plugin uri. You can replace the values passed to the options below to curomize the plugin based on your needs.

    $ wp scaffold plugin wpcli-demo-plugin --plugin_name="WP-CLI Demo Plugin" --plugin_description="This is a wp-cli demo plugin" --plugin_author=wp-cli --plugin_author_uri="https://wp-cli.org" --plugin_uri="https://plugins.wp-cli.org/demo-plugin"Success: Created plugin files.
    Success: Created test files.

The above command generates a new folder called wpcli-demo-plugin in the plugins directory, with the following files structure.

    | - bin/
    | - tests/
    | - .gitignore
    | - .editorconfig
    | - .phpcs.xml.dist
    | - .travis.yml
    | - Gruntfile.js
    | - package.json
    | - phpunit.xml.dist
    | - readme.txt
    | - wpcli-demo-plugin.php

Unless you use the --skip-tests option the following files are always generated:

- `phpunit.xml.dist` is the configuration file for PHPUnit.
- `.travis.yml` is the configuration file for Travis CI. Use `--ci=<provider>` to select a different service.
- `bin/install-wp-tests.sh` configures the WordPress test suite and a test database.
- `tests/bootstrap.php` is the file that makes the current plugin active when running the test suite.
- `tests/test-sample.php` is a sample file containing test cases.
- `.phpcs.xml.dist` is a collection of PHP_CodeSniffer rules.

### Step 2 - How to create a custom post type:

We can now use the scaffold command again to add a custom post type inside our new plugin using the wp scaffold post-type command.

    \$ wp scaffold post-type books --label=Book --textdomain=wpcli-demo-plugin --dashicon=dashicons-book-alt --plugin=wpcli-demo-plugin
    Success: Created '/wpcli-demo-plugin/post-types/books.php'.

### Step 3 - Write code inside the main file:

The main plugin file wpcli-demo-plugin.php is the starting point that we can use to write our plugin logic.

Inside the main plugin file lets now reference the new post type we just created.

Open in your favourite text editor the file wpcli-demo-plugin.php
and under the line saying "your code starts here" add the following:
\$ Your code starts here.
require('post-types/books.php');

### Step 4 - Activate the plugin

You can now use two wp-cli commands to check the list of plugins and activate your newly created plugin.

    $ wp plugin list
    +-------------------+----------+-----------+---------+
    | name              | status   | update    | version |
    +-------------------+----------+-----------+---------+
    | akismet           | inactive | available | 4.1.5   |
    | hello             | inactive | none      | 1.7.2   |
    | wpcli-demo-plugin | inactive | none      | 0.1.0   |
    +-------------------+----------+-----------+---------+

From the list above we can see that our plugin wpcli-demo-plugin is inactive. Let's enable it using anotehr command.

    $ wp plugin activate wpcli-demo-plugin
    Plugin 'wpcli-demo-plugin' activated.
    Success: Activated 1 of 1 plugins.

Our plugin is now active. We can visit the WordPress admin panel and
start using our books custom post type.

## How to create a custom Taxonomy

Coming Soon

## How to Manage Widgets

Coming Soon

## How to Create a Child theme

Coming soon
