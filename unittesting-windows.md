# Integrating WP Unit Testing in windows

This document assumes that you have already tried setting up WP Unit Testing environment for your project in windows but have stucked somewhere.

The purpose of this discussion is to perfectly set up WP Unit Testing environment in a local project. Followed through https://make.wordpress.org/cli/handbook/plugin-unit-tests/ but it lacks some points when it comes to windows with addition to some general points missing.

First, some commands in wp-cli doesnt work with windows, so use cygwin or alike command line utility.
Cygwin is preferred because its suggested even in <a href="/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=1&amp;cad=rja&amp;uact=8&amp;ved=0ahUKEwidhZ_RjqLVAhVBPZQKHXqPBUIQFgg1MAA&amp;url=https%3A%2F%2Fmake.wordpress.org%2Fcore%2Fhandbook%2Ftutorials%2Fworking-with-patches%2F&amp;usg=AFQjCNENVuRFv23KA3UugzN75VdTbklrdg" onmousedown="return rwt(this,'','','','1','AFQjCNENVuRFv23KA3UugzN75VdTbklrdg','','0ahUKEwidhZ_RjqLVAhVBPZQKHXqPBUIQFgg1MAA','','',event)" data-href="https://make.wordpress.org/core/handbook/tutorials/working-with-patches/">Working With Patches – Make WordPress Core</a>.

Before starting, let me suggest that if you fail with running `wp scaffold` command then update your wp-cli to stable version first (Ex :  wp cli update --nightly)

For ease of understanding, I rewrite the points of above mentioned tutorial, such as ...

2) Generate the plugin test files:

   `wp scaffold plugin-tests my-plugin`

It would work perfectly when you are running it on WordPress downloaded with `wp core download` but when you run this command in any local WordPress setup, which is not downloaded from above, it would generate error : 

> Error: This does not seem to be a WordPress install.
Pass --path=`path/to/wordpress` or run `wp core download`.

Which is valid cause its not installed from wp-cli, run the `wp core download` and it will create src with WordPress in it (The folder structure of core WordPress installation).

Running `plugin-tests` command can still generate error like ....

> Error: 'wp-config.php' not found.
Either create one manually or use `wp config create`.

Now, running `wp config create` will create wp-config.php file in src installation.

3) Initialize the testing environment locally: cd into the plugin directory and run the install script. (You’ll need to already have svn and wget installed.)

`bash bin/install-wp-tests.sh wordpress_test root '' localhost latest`

**bash script does not work directly in windows**. In windows10, they have introduced <a href="http://www.pcworld.com/article/3106463/windows/how-to-get-bash-on-windows-10-with-the-anniversary-update.html">"Windows Subsystem for Linux"</a> but in other versions of windows, you need to do separate work for running bash. **Cygwin by default runs the bash scripts**.

For running above bash script, not only svn and wget but svn and either wget or curl are required because of the following lines in install-wp-tests.sh script

`download() {
    if [ `which curl` ]; then
        curl -s "$1" > "$2";
    elif [ `which wget` ]; then
        wget -nv -O "$2" "$1"
    fi
}`

Again, `which` is a linux command not by default in windows, it can be installed as a package. All curl, svn and wget can be installed in windows as packages, but for running bash you need to be depending on third party tools, **Cygwin** in our case.

Bash script is bound to build wordpress over there right after **wordpress-tests-lib** because of `mkdir -p $WP_CORE_DIR` in install-wp-tests.sh file but it sometimes fails because its a tmp folder and so sometimes it depends on whether or not tmp folder is perfectly emptied or not. If in any case WordPress folder does not get created there, then you can set up one manually. The logic is, while running any tests, it runs them against this WordPress in /tmp/wordpress-tests-lib. So finally in your /tmp folder there should be structure like this ...

1) data
2) includes
3) WordPress
4) wp-tests-config.php file

Finally run `phpunit` and there you go.....

**NOTES** : 

1) If scaffold command fails, update to stable version (wp cli update --nightly)
2) If testing locally, create a config file with wp config create
3) Try using Cygwin or alike command line utility (Ex : vagrant can still be used)
4) If bash script fails creating WordPress in /tmp then create one manually with wp-tests-config.php

Hope, above mentioned tutorial helps.