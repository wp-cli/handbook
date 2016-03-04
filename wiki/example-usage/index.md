---
layout: default
title: Example Usage
---

# Example Usage

This page contains examples of some common command line uses.

## Get basic info on WP-CLI install

    wp --info

Gives you basic info on the WP-CLI install, including PHP binary location, version and location of PHP.INI file:

    PHP binary:     /usr/local/bin/php
    PHP version:    5.4.17
    php.ini used:   /usr/local/lib/php.ini
    WP-CLI root dir:        phar://wp-cli.phar
    WP-CLI global config:   /root/.wp-cli/config.yml
    WP-CLI project config:
    WP-CLI version: 0.13.0

## Download latest [en_US] version of WordPress into the current folder

    wp core download

If you have WordPress already installed in the current folder:

    wp core download --force

## Create WXR export files from site in a multisite install to current directory

    wp export --url=sub.domain.com

## Import WXR file from current directory into a specific site in a multisite install, create authors and skip image resize

    wp import domain.wordpress.2014-01-01.xml --authors=create --skip="image_resize" --url=sub.domain.com

## Regenerate all thumbnails for a specific site in a multisite install

    wp media regenerate --url=sub.domain.com --yes

## Delete all pages

    wp post list --post_type=page --field=ID | xargs wp post delete

and for a specific site in a multisite install:

    WP='wp --url=sub.domain.com'
    $WP post list --post_type=page --field=ID | xargs $WP post delete

## Integrate with Psysh

First, download [Psysh](http://psysh.org/):

    curl psysh.org/psysh > psysh.phar

Then, invoke the shell:

    wp --require=psysh.phar shell