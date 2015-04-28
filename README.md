These files comprise wp-cli.org. However, all command documentation is dynamically generated from the PHPDoc for each command. If you'd like to suggest command documentation changes, please submit a pull request against the [primary repo](https://github.com/wp-cli/wp-cli). Command documentation changes are deployed to the website with each release.

### Setup

1. Install [Composer](http://getcomposer.org/).

2. Install dev dependencies with `composer install --dev`

3. Build:

```bash
vendor/bin/phake
```

### Preview locally

1. [Install Bundler gem](http://jekyllrb.com/docs/installation/): `gem install bundler`.
2. [Install dependencies](http://jekyllrb.com/docs/installation/): `bundle install`
3. Run `jekyll serve --watch`
