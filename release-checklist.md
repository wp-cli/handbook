# Release Checklist

This page describes the list of activities that developers must perform to produce a new release of WP-CLI.

## Major/minor releases

### Writing the release post

See prior release posts for a format to follow.

### Regenerate command and internal API docs

Command and internal API docs need to be regenerated before every major release, because they're meant to correlate with the release.

To regenerate:

    git clone git@github.com:wp-cli/handbook.git
    cd handbook
    wp handbook gen-all

### Verify automated tests

Make sure the [automated test suite](https://github.com/wp-cli/automated-tests) is running correctly and passed. This represents the final build quality sanity check.

### Updating WP-CLI

Create a branch called `release-x-x-x` to prepare the release PR.

Make sure that the contents of [VERSION](https://github.com/wp-cli/wp-cli/blob/master/VERSION) are changed to latest.

Also update the WP-CLI version mention in the project's `README.md` ([ref](https://github.com/wp-cli/wp-cli/issues/3647)).

### Locking php-cli-tools version

php-cli-tools is sometimes set to `dev-master` during the development cycle. During the WP-CLI release process, `composer.json` should be locked to a specific version. php-cli-tools may need a new version tagged as well.

### Updating the contributor list

From the `wp-cli/wp-cli` project repo, use `utils/contrib-list.php` to generate a list of release contributors:

    GITHUB_TOKEN=<token> wp --require=utils/contrib-list.php contrib-list --format=markdown

This script identifies pull request creators from `wp-cli/wp-cli`, `wp-cli/handbook`, and all bundled WP-CLI commands (e.g. `wp-cli/*-command`).

For `wp-cli/wp-cli` and `wp-cli/handbook`, the script uses the currently open release milestone.

For all bundled WP-CLI commands, the script uses all closed milestones since the last WP-CLI release (as identified by the version present in the `composer.lock` file). If a command was newly bundled since last release, contributors to that command will need to be manually added to the list.

The script will also produce a total contributor and pull request count you can use in the release post.

### Updating the Phar build

1) Create a PR from the `release-x-x-x` branch and merge it. This will trigger the `wp-cli-release.*` builds.

2) Create a git tag and push it.

3) Create a stable [Phar build](https://github.com/wp-cli/builds/tree/gh-pages/phar):

    cd wp-cli/builds/phar
    cp wp-cli-release.phar wp-cli.phar
    md5 -q wp-cli.phar > wp-cli.phar.md5
    shasum -a 512 wp-cli.phar | cut -d ' ' -f 1 > wp-cli.phar.sha512

4) Sign the release with GPG. See <https://github.com/wp-cli/wp-cli/issues/2121>:

    gpg --output wp-cli.phar.gpg --default-key releases@wp-cli.org --sign wp-cli.phar
    gpg --output wp-cli.phar.asc --default-key releases@wp-cli.org --detach-sig --armor wp-cli.phar

> Note: The GPG key for `releases@wp-cli.org` has to be shared amongst maintainers.

5) Perform one last sanity check on the Phar by ensuring it displays its information

    php wp-cli.phar --info

6) Commit the Phar and its hashes to the builds repo

    git status
    git add .
    git commit -m "Update stable to v1.x.0"

7) Create a release on Github: <https://github.com/wp-cli/wp-cli/releases>. Make sure to upload the Phar from the builds directory.

    cp wp-cli.phar wp-cli-1.x.0.phar
    cp wp-cli.phar.gpg wp-cli-1.x.0.phar.gpg
    cp wp-cli.phar.asc wp-cli-1.x.0.phar.asc
    cp wp-cli.phar.md5 wp-cli-1.x.0.phar.md5
    cp wp-cli.phar.sha512 wp-cli-1.x.0.phar.sha512

### Verify Phar release artifact

Using some existing WP-CLI install, update to the latest release to verify the Phar release artifact works as expected.

    $ wp cli update
    You have version 1.4.0-alpha-88450b8. Would you like to update to 1.4.0? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v1.4.0/wp-cli-1.4.0.phar...
    md5 hash verified: 179fc8dacbfe3ebc2d00ba57a333c982
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 1.4.0.
    $ wp @daniel option get home
    https://danielbachhuber.com

This represents a final sanity check that the Phar isn't corrupt in some way.

### Updating the Debian and RPM builds

Both builds are produced by automated systems:

* [wp-cli/deb-build](https://github.com/wp-cli/deb-build)
* [wp-cli/rpm-build](https://github.com/wp-cli/rpm-build)

In either case, a script is run on Travis to produce the build, then the build artifact is pushed to the [wp-cli/builds](https://github.com/wp-cli/builds) repo.

To generate a new build, trigger a Travis build on the repo (either by restarting an existing build or making some non-functional change).

### Updating the Homebrew formula

WP-CLI's Homebrew formula is automatically updated with the [Homebrew updater application](https://github.com/BePsvPT/homebrew-updater). See [Homebrew/homebrew-php/pull/4195#issuecomment-305442172](https://github.com/Homebrew/homebrew-php/pull/4195#issuecomment-305442172).

If the updater application doesn't work for some reason, a pull request must be submitted to the Homebrew repo. This involves:

* Updating the url and sha256 here: https://github.com/Homebrew/homebrew-php/blob/master/Formula/wp-cli.rb#L8-L9
* Making the commit with format "wp-cli 1.x.0"

To generate the sha256 (replace `x` with the minor version):

    wget https://github.com/wp-cli/wp-cli/archive/v1.x.0.tar.gz
    shasum -a 256 v1.x.0.tar.gz

See <https://github.com/Homebrew/homebrew-php/pull/1687#issuecomment-98408399> and <https://github.com/Homebrew/homebrew-php/pull/3398#issuecomment-235896016> for background.

### Updating the website

See <https://github.com/wp-cli/wp-cli.github.com#readme>

The current WP-CLI version will also need to be updated on the [roadmap](https://wp-cli.org/docs/roadmap/).

Please also tag a release of the website, so it's easy to correlate versions of the website.

### Announcing

In addition to publishing the release post, a new release is announced in a few different ways:

* WP-CLI Twitter account (with some scheduled follow-up tweets).
* `/announce` slash command in the `#cli` Slack room.

### Bumping WP-CLI version again

After all of the release steps are complete, make sure to bump [VERSION](https://github.com/wp-cli/wp-cli/blob/master/VERSION) again.

For instance, if the release version was `0.24.0`, the version should be bumped to `0.25.0-alpha`. Doing so ensure `wp cli update --nightly` works as expected.

## Patch releases

Creating a patch release (e.g. 1.4.x) is bit different of a process than creating a major or minor release. At a high-level, here are the steps involved:

1) Create a new release branch from the last tagged patch release:

    $ git checkout v1.4.0
    Note: checking out 'v1.4.0'
    You are in 'detached HEAD' state. You can look around, make experimental
    changes and commit them, and you can discard any commits you make in this
    state without impacting any branches by performing another checkout.
    $ git checkout -b release-1-4-1
    Switched to a new branch 'release-1-4-1'

2) Cherry-pick existing commits and package versions to the new release branch.

Because patch releases should just be used for bug fixes, you should first fix the bug on master, and then cherry-pick the fix to the release branch. It's up to your discretion as to whether you cherry-pick the commits directly to the release branch *or* create a feature branch and pull request against the release branch.

If the bug existed in a package, you'll need to create a point release above the last bundled version for the package and update `composer.lock` to load that point release.

3) Update `VERSION` on the release branch to the new release version.

4) Travis deploys `release-*` branches to the wp-cli/builds repo. Move the generated `wp-cli-release.phar*` files (Phar plus hashes) to `wp-cli.phar*`.

5) Follow all of the other relevant major/minor release steps.
