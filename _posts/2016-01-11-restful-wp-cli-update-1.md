---
layout: post
author: danielbachhuber
title: RESTful WP-CLI - Kickoff
---

And so the journey begins. As with most journeys, I have a mixture of emotions: excitement, anticipation, trepidation, and eagerness. Although the destination may be far away, I know I can get there as long as I consistently take steps in the right direction.

Today marks the formal kickoff of my Kickstarter project, "[A More RESTFul WP-CLI](https://www.kickstarter.com/projects/danielbachhuber/a-more-restful-wp-cli/description)". To celebrate the occasion, I've launched a [project page](/restful/) to document the project's goals and my progress along the journey. I'll keep it updated as I write blog posts, hopefully every couple of weeks.

For the past month or so, the question at the top of my mind has been: what does it mean to "unlock the potential of the WP REST API at the command line"? Or, even more broadly, why is it worthwhile to pursue this project?

These are big questions, and I consider myself fortunate to be able to explore them over the next six months or so. Here's how I've unpacked it so far:

* WP-CLI's goal is to be, quantitatively, the *fastest* way for developers to manage WordPress. For anything you'd want to do with WordPress, using WP-CLI should save you multitudes of time over doing it some other way.
* WP-CLI and WP REST API both offer CRUD interfaces to WordPress resources. `wp post list` is more or less `GET /wp/v2/posts`. But, `wp widget list` doesn't yet have an equivalent in WP REST API.
* Building the WP REST API has been, and will continue to be, an exercise of modeling how WordPress works to a consistent (RESTful) interface. Furthermore, this model is declared in a common language for clients to interpret.
* At some point in the future, WP-CLI will be able to ditch a lot of its internals when it can use the WP REST API as its interface to WordPress. WP-CLI can continue to serve as the fastest way for developers to manage WordPress, offering higher-level meta operations like `generate`, `(push|pull)`, and `clone` in addition to being a seamless command line interface to WordPress internals.
* As WordPress developers write new endpoints for the WP REST API, it will be quite powerful to have those endpoints instantly accessible through the command line, and as accessible as core resources. For instance, where WP-CLI currently has the `wp post *` commands, WP-CLI requires Easy Digital Downloads to produce its own `wp edd *` commands.
* It appears to be supremely possible to deliver this project as a series of improvements to WP-CLI, shipped over one or more versions. Given I like to release new versions every quarter, it will likely be at lease a couple versions.

As I said, a lot to unpack. I'm intending start off by working towards making `wp tag list` work interchangably with local and remote sites, which already raises a few issues:

* It needs to be easier to register WP-CLI commands on the fly. In my prototype command, I [had to](https://github.com/danielbachhuber/wp-rest-cli/commit/f5ec393632fe841aaaecfc664c419ed1bdbcc566#diff-6bd9ca08588aaa4472208db14aae6750R112) `eval()` a dynamically generated class. It would be much nicer to be able to [register an arbitrary function, closure, or method](https://github.com/wp-cli/wp-cli/issues/2204) as a WP-CLI command.
* [tk specify site context]
* [tk authentication, and storing those connection details]

[tk sponsors]
