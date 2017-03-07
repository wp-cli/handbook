### Who runs things?

[andreascreten](https://github.com/andreascreten), [danielbachhuber](https://github.com/danielbachhuber), and [scribu](https://github.com/scribu) are currently the three people with administrator access to the following properties:

* [wp-cli](https://github.com/wp-cli) github organization
* [wpcli](https://twitter.com/wpcli) twitter account
* [wp-cli-commits](https://groups.google.com/forum/?fromgroups#!forum/wp-cli-commits) mailing list
* [Cloudflare](https://www.cloudflare.com/) CDN account

### Who controls the wp-cli.org site?

The `wp-cli.org` domain currently owned by [andreascreten](https://github.com/andreascreten).

The entire site is hosted on Github Pages, using Cloudflare for SSL:

| **URL**                          | **Repository**                | **Branch** | **Updates**
|:---------------------------------|:------------------------------|:-----------|:------------
| http://wp-cli.org/               | [wp-cli/wp-cli.github.com][1] | master     | manual
| http://wp-cli.org/package-index/ | [wp-cli/package-index][2]     | gh-pages   | cron job hosted on separate server (owned by daniel)
| http://wp-cli.org/builds/        | [wp-cli/builds][3]            | gh-pages   | automatically by Travis CI

[1]: http://github.com/wp-cli/wp-cli.github.com
[2]: http://github.com/wp-cli/package-index
[3]: http://github.com/wp-cli/builds

If you [subscribe for email updates](https://make.wordpress.org/cli/subscribe/), your email address is registered with WordPress.com through Automattic's Jetpack plugin.

### Why are some contributors [members](https://github.com/orgs/wp-cli/people) of the wp-cli organization?

Because they have demonstrated, over a period of time, that they are capable and invested in moving the project forward:

* contributing to the wp-cli codebase
* promoting wp-cli (speaking at WordCamps, writing blog posts etc.)
* helping other users and/or contributors
