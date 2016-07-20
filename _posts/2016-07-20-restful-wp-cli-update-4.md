---
layout: post
author: danielbachhuber
title: RESTful WP-CLI - The final update?
---

Last November, I [published a Kickstarter](https://www.kickstarter.com/projects/danielbachhuber/a-more-restful-wp-cli), and was completely blown away by the support. This month, the funding ran out, so I thought I'd post one last [RESTful WP-CLI](https://github.com/wp-cli/restful) update.

Actually, the story doesn't end here. I'm writing a massive retrospective post about using Kickstarter to fund open source, so keep an eye out for that. Also, WP-CLI v0.24.0 is due out a week from now, July 27th, and it's looking to be the largest release ever. When you do a Kickstarter, it's really just the beginning of something bigger.

Enough with the superlatives, let's dive into some new features. Remember: RESTful WP-CLI features require under the hood changes to WP-CLI. You'll want to `wp cli update --nightly` to play with this new functionality locally. Once you've done so, you can `wp package install wp-cli/restful` to install the latest.

### Effortlessly use WP-CLI against any WordPress install

WP-CLI aliases are shortcuts you register in your `wp-cli.yml` or `config.yml` to effortlessly run commands against any WordPress install.

For instance, if I'm working locally on the runcommand theme, have registered a new rewrite rule, and need to flush rewrites inside my Vagrant-based virtual machine, I can run:

    $ wp @dev rewrite flush
    Success: Rewrite rules flushed.

Then, once the code goes to production, I can run:

    $ wp @prod rewrite flush
    Success: Rewrite rules flushed.

Look ma! No more SSH'ing into machines, changing directories, and generally spending a full minute get to a given WordPress install.

Additionally, alias groups let you register groups of aliases. If I want to run a command against both runcommand WordPress instances, I can use `@both`:

    $ wp @both core check-update
    Success: WordPress is at the latest version.
    Success: WordPress is at the latest version.

Aliases can be registered in your project's `wp-cli.yml` file, or your user's global `~/.wp-cli/config.yml` file:

    @prod:
      ssh: runcommand@runcommand.io~/webapps/production
    @dev:
      ssh: vagrant@192.168.50.10/srv/www/runcommand.dev
    @both:
      - @prod
      - @dev

### But wait, what's the 'ssh' in there?

WP-CLI now natively supports a `--ssh=<host>` global parameter for running a command against a remote WordPress install. Many thanks to XWP and their community for paving the way with [WP-CLI SSH](https://github.com/xwp/wp-cli-ssh).

Under the hood, WP-CLI proxies commands to the `ssh` executable, which then passes them to WP-CLI installed on the remote machine. Your syntax for `-ssh=<host>` can be any of the following:

* Just the host (e.g. `wp --ssh=runcommand.io`), which means the user will be inferred from your current system user, and the path will be the SSH user's home directory.
* The user and the host (e.g. `wp --ssh=runcommand@runcommand.io`).
* The user, the host, and the path to the WordPress install (e.g. `wp --ssh=runcommand@runcommand.io~/webapps/production`). The path comes immediately after the TLD of the host.

Or, if you use a `~/.ssh/config`, `<host>` can be any host alis stored in the SSH config (e.g. `wp --ssh=rc` for me).

Note you do need a copy of WP-CLI on the remote server, accessible as `wp`. Futhermore, `--ssh=<host>` won't load your `.bash_profile` if you have a shell alias defined, or are extending the `$PATH` environment variable. If this affects you, [here's a more thorough explanation](https://runcommand.io/to/wp-ssh-custom-path/) of how you can make `wp` accessible.

### RESTful WP-CLI v0.2.0 and beyond

Today marks the release of [RESTful WP-CLI](https://github.com/wp-cli/restful) v0.2.0. Among [43 closed issues and pull requests](https://github.com/wp-cli/restful/milestone/2?closed=1), I'd like to highlight two new features.

First, use `wp rest (post|user|comment|*) generate` to create an arbitrary number of any resource:

    $ wp @wpdev rest post generate --count=50 --title="Test Post"
    Generating items  100% [==============================================] 0:01 / 0:02

When working on a site locally, you often need dummy content to work with. There are a myriad of ways custom post types can store data in the database though, so generating dummy content can be a painstaking process. Because the WP REST API represents a layer of abstraction between the client (e.g. WP-CLI in this case) and the database, it's much easier to produce a general purpose content generation command.

In the future, I'd love to see [dummy data generated for each field based on the resource schema](https://github.com/wp-cli/restful/issues/69).

Second, use `wp rest (post|user|comment|*) diff` to compare resources between two enviroments:

    $ wp @dev rest command diff @prod find-unused-themes --fields=title
    (-) http://runcommand.dev/api/ (+) https://runcommand.io/api/
      command:
      + title: find-unused-themes

When working with multiple WordPress environments, you may want to know how these environments differ. Because the WP REST API represents a higher-level abstraction on top of WordPress, computing the difference between two environments becomes a matter of fetching the data and producing a comparison.

There are a [number of ways the diff command could be improved](https://github.com/wp-cli/restful/issues?q=is%3Aissue+is%3Aopen+label%3Acommand%3Adiff), so consider this implementation to be the prototype.

What's next? Ultimately, the goal is for `wp rest post` to replace `wp post`, but there are many months between here and there. In this future where WP-CLI packages are first-class citizens amongst the commands in WP-CLI core, RESTful WP-CLI gets to serve as a testbed for figuring out how that actually works. We shall see, we shall see.

As always, thanks for your support!
