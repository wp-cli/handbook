---
layout: doc
title: Release checklist
description: Tasks performed during the process of tagging a release.
category: Contributing
---

This page describes the list of activities that developers must perform to produce a new release of WP-CLI.

### Updating WP-CLI

Make sure that the contents of [VERSION](https://github.com/wp-cli/wp-cli/blob/master/VERSION) are changed to latest.

### Locking php-cli-tools version

php-cli-tools is set to `dev-master` during the development cycle. During the WP-CLI release process, `composer.json` should be locked to a specific version. php-cli-tools may need a new version tagged as well.

### Updating the contributor list

Use `./utils/contrib-list` to see new contributors. Update the `.mailmap` file so that the names match their github handles.

When done, use `sort .mailmap -f -u -o .mailmap` to only add new contributors.

### Updating the Phar build

1) Create a git tag and push it.

2) Create a stable [Phar build](https://github.com/wp-cli/builds/tree/gh-pages/phar):

    cd wp-cli-builds/phar
    cp wp-cli-nightly.phar wp-cli.phar
    md5 -q wp-cli.phar > wp-cli.phar.md5
    shasum -a 512 wp-cli.phar | cut -d ' ' -f 1 > wp-cli.phar.sha512

3) Sign the release with GPG. See <https://github.com/wp-cli/wp-cli/issues/2121>

    gpg --output wp-cli.phar.gpg --sign wp-cli.phar

4) Create a release on Github: <https://github.com/wp-cli/wp-cli/releases>. Make sure to upload the Phar from the builds directory.

### Updating the Debian build

1) Run this script: <https://github.com/wp-cli/wp-cli/blob/master/utils/wp-cli-updatedeb.sh>

2) Symlink the latest deb: `ln -sfv php-wpcli_${VERSION}_all.deb php-wpcli_latest_all.deb`

3) Commit file to builds repo

### Updating the Homebrew formula

A pull request must be submitted to the Homebrew repo. See <https://github.com/Homebrew/homebrew-php/pull/1687#issuecomment-98408399> for background.

### Updating the website

See <https://github.com/wp-cli/wp-cli.github.com#readme>

### Writing the release post

Use `./utils/contrib-list -l` to generate the list of contributors.
