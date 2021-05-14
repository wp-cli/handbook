# How to install WordPress

Download and install WordPress using WP-CLI is straight forward. It takes four steps.
First, you will need to download WordPress using the `wp core download` command.

### Step 1 - Download WordPress

The syntax of the command to download WordPress is the following: `wp core download [--path=<path>] [--locale=<locale>] [--version=<version>] [--skip-content] [--force]`

```
    $ wp core download --path=wpdemo.test --locale=it_IT
    Creating directory '/wpdemo.test/'.
    Downloading WordPress 5.4.1 (it_IT)...
    md5 hash verified: 3fa03967b47cdfbf263462d451cdcdb8
    Success: WordPress downloaded.
```

The command above creates a `wpdemo.test/` folder inside your current working directory and downloads the latest WordPress version. You can replace the `--path=wpdemo.test` with your
desired folder name and the `--locale=it_IT` with your desired locale. You can omit the `--locale` option and, that will download by default WordPress in American English using the locale en_US.

### Step 2 - Generate a config file

In this step, we will generate a config file and set up the database
credentials for our installation.
The basic syntax of the command is the following: `wp config create --dbname=<dbname> --dbuser=<dbuser> [--dbpass=<dbpass>]`

```
    $ wp config create --dbname=your_db_name_here --dbuser=your_db_user_here --prompt=dbpass
    1/10 [--dbpass=<dbpass>]: type_your_password
    Success: Generated 'wp-config.php' file.
```

The command above generates the `wp-config.php` file and adds to it the database credentials that you passed. Make sure to replace `your_db_name_here` with the name you want to assign to the database, replace `your_db_user_here` with your database user and type the database password when prompted with the following: `1/10 [--dbpass=<dbpass>]:`

### Step 3 - Create the database

In this step, we are going to create the database based on the information we passed to the `wp-config.php` file in step 2.

```
    $ wp db create
    Success: Database created.
```

Now we are ready to move to the final step where we install WordPress.

### Step 4 - Install WordPress

To install WordPress now, we need to run one last command.

```
    $ wp core install --url=wpclidemo.dev --title="WP-CLI" --admin_user=wpcli --admin_password=wpcli --admin_email=info@wp-cli.org
    Success: WordPress installed successfully.
```

Remember to replace the values passed to each of the following options with your details:

- `--url=wpclidemo.dev` replace wpclidemo.dev with your website url,
- `--title="WP-CLI"` replace WP-CLI with the name you want to assign to the website,
- `--admin_user=wpcli` replace wpcli with the username you want to assign to the website administrator
- `--admin_password=wpcli` replace wpcli with the password you want to use to access the WordPress administrator panel.

Congratulation! You have successfully installed WordPress using WP-CLI.
