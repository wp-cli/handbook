---
layout: post
author: danielbachhuber
title: RESTful WP-CLI - Coming to you soon?
---

Last November, I published a Kickstarter, and was completely blown away by the support. This month, the funding ran out, so I thought I'd post one last RESTful WP-CLI update.

Actually, the story doesn't end here. I'm writing a massive retrospective post on using Kickstarter to fund open source, so keep an eye out for that. Also, WP-CLI v0.24.0 is due out a week from now, July 27th, and it's looking to be the largest release ever. When you do a Kickstarter, it's really just the beginning of something bigger.

Enough with the superlatives, let's dive into some new features ...and remember: RESTful WP-CLI features have required under the hood changes to WP-CLI. You'll want to `wp cli update --nightly` to play with this new functionality locally. Once you've done so, you can `wp package install wp-cli/restful` to install the latest.

### Effortlessly use WP-CLI against any WordPress install

WP-CLI aliases are shortcuts you can register in your `wp-cli.yml` or `config.yml` to effortlessly run commands against any WordPress install.

For instance, if I'm working on the runcommand theme on my local machine, have registered a new rewrite rule, and need to flush rewrites on my virtual machine, I can run:

    $ wp @dev rewrite flush
    Success: Rewrite rules flushed.

Then, once the code goes to production, I can run:

    $ wp @prod rewrite flush
    Success: Rewrite rules flushed.

Or, if I wanted to issue a command against both runcommand WordPress instances, I can use my `@both` alias group:

    $ wp @both core check-update
    Success: WordPress is at the latest version.
    Success: WordPress is at the latest version.

These aliases are registered in my project's `wp-cli.yml` file:

    @prod:
      ssh: runcommand@runcommand.io~/webapps/production
    @dev:
      ssh: vagrant@192.168.50.10/srv/www/runcommand.dev
    @both:
      - @prod
      - @dev

### But wait, what's the 'ssh' in there?

WP-CLI now natively supports a `--ssh=<host>` global parameter for running a command against a remote WordPress install. Many thanks to XWP and their community for paving the way with [WP-CLI SSH](https://github.com/xwp/wp-cli-ssh).

Under the hood, WP-CLI proxies to the `ssh` executable. Your syntax for `<host>` can be any of the following:

* Just the host (e.g. `wp --ssh=runcommand.io`), which means the user will be inferred from your current system user, and the path will be the SSH user's home directory.
* The user and the host (e.g. `wp --ssh=runcommand@runcommand.io`).
* The user, the host, and the path to the WordPress install (e.g. `wp --ssh=runcommand@runcommand.io~/webapps/production`). The path comes immediately after the TLD of the host.

Or, if you use a `~/.ssh/config`, `<host>` can be any host alis stored in the SSH config (e.g. `wp --ssh=rc` for me).

Note you will need a copy of WP-CLI on the remote server, accessible as `wp`. Using `--ssh=<host>` won't load your `.bash_profile` if you have a shell alias defined there. [Here's a more thorough explanation](https://runcommand.io/to/wp-ssh-custom-path/) of how you can make `wp` accessible.

### RESTful WP-CLI v0.2.0 and beyond
