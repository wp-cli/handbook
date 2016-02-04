---
layout: default
title: A more RESTful WP-CLI
---

## A more RESTful WP-CLI

*Landing page last updated: 4 February, 2016*

WP-CLI's mission is to be, quantitatively, the *fastest* interface for developers to manage WordPress. "A more RESTful WP-CLI" is a [Kickstarter-backed](https://www.kickstarter.com/projects/danielbachhuber/a-more-restful-wp-cli/description) project to unlock the potential of the [WordPress REST API](http://v2.wp-api.org/) at the command line. This funding supports 283 hours of [Daniel Bachhuber](http://danielbachhuber.com/)'s time towards making improvements to WP-CLI and the WP REST API.

Wait a second, what does it mean to "unlock the potential of the WP REST API at the command line"? Pragmatically, it means any endpoints registered in plugins or themes will be *automagically* accessible as WP-CLI commands. For instance, if you were to register an endpoint for `GET /my-plugin/v1/product/<id>`, this endpoint will also be accessible on the command line as (more or less) `wp @prod product get <id>`. You can check out the work to date at [danielbachhuber/wp-rest-cli](https://github.com/danielbachhuber/wp-rest-cli)

However, this project is also a multi-faceted exploration of what it means for WP-CLI to be the fastest way to manage WordPress, in a world backed by the WP REST API.

Quick links: [Achievements](#achievements) - [Budget](#budget) - [Supporters](#supporters)

***

## Achievements

Blog posts:

* [RESTful WP-CLI - No rest for the weary](/blog/restful-wp-cli-update-2.html) - 4 February, 2016
* [RESTful WP-CLI - The journey begins](/blog/restful-wp-cli-update-1.html) - 12 January, 2016

Releases:

* [WP REST API Version 2.0 Beta 10 "Chief Wiggum"](https://make.wordpress.org/core/2016/01/11/wp-rest-api-version-2-0-beta-10-with-security-releases/) - 11 January, 2016
* [WP-CLI Version 0.22.0 released](/blog/version-0.22.0.html) - 7 January, 2016

***

## Budget

Here's a breakdown of how the project's 283 total hours have been used to date:

| Activity      | WP-CLI                   | WP-API                  |
|---------------|--------------------------|-------------------------|
| Development   | 26.45                    | 52.25                   |
| Support       | 3.28                     | 10.39                   |
| Documentation | 0.42                     | 0.67                    |
| Blogging      | 6.30                     | 0                       |
| Meetings      | 0                        | 3.72                    |
| Admin         | 0.77                     | 0                       |
| **Total**     | 37.22 (of 150 budgeted)  | 67.03 (of 83 budgeted)  |

Note: time spent fulfilling the Kickstarter rewards is tracked separately.

***

## Supporters

This project is made possible thanks to the backing of many generous organizations and individuals.

### Platinum

<table style="table-layout:fixed">
	<tbody>
	<tr>
		<td style="text-align:center;">
			<a href="https://pressed.net/"><img src="/assets/img/restful/platinum/pressed.png"></a>
		</td>
	</tr>
	<tr>
		<td>
		<a href="https://www.pressed.net/">Pressed</a> offers white-label, fully managed, WordPress hosting, built on Amazon’s cloud infrastructure. Launch your own managed WordPress hosting brand and let us handle all the maintenance, updates, customer support and billing while building a new recurring revenue stream for your business.
		</td>
	</tr>
	</tbody>
</table>

### Gold

<table style="table-layout:fixed">
	<thead>
	<tr>
		<th style="width:50%"><a href="https://chrislema.com/"><img src="/assets/img/restful/gold/chrislema.png"></a></th>
		<th style="width:50%"><a href="https://hmn.md/"><img src="/assets/img/restful/gold/humanmade.svg"></a></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><a href="https://chrislema.com/">Chris Lema</a> is the CTO &amp; Chief Strategist at Crowd Favorite. He’s also a WordPress evangelist, public speaker &amp; advisor to product companies.</td>
		<td><a href="https://hmn.md/">Human Made</a> is a leading WordPress Development, Hosting and Consultancy Firm with a global team covering Europe, The USA, and Asia/Australia.</td>
	</tr>
	</tbody>
</table>

<table style="table-layout:fixed">
	<thead>
	<tr>
		<th style="width:50%"><a href="https://pagely.com"><img src="/assets/img/restful/gold/pagely.png"></a></th>
		<th style="width:50%"><a href="https://pantheon.io"><img src="/assets/img/restful/gold/pantheon.png"></a></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><a href="https://pagely.com">Pagely®</a> is the World’s first and most scalable WordPress Hosting platform: We help the biggest brands scale and secure WordPress.</td>
		<td><a href="https://pantheon.io">Pantheon</a> is a website management platform used to build, launch, and run awesome Drupal &amp; WordPress websites.</td>
	</tr>
	</tbody>
</table>

### Silver

<table style="table-layout:fixed">
	<tbody>
		<tr>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="https://www.godaddy.com/pro"><img title="GoDaddy Pro" src="/assets/img/restful/silver/godaddy.png"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="http://madewithlove.be/"><img title="madewithlove" style="max-height: 80px;" src="/assets/img/restful/silver/madewithlove.png"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="https://jetpack.me/"><img title="Jetpack" src="/assets/img/restful/silver/jetpack.png"></a></td>
		</tr>
		<tr>
			<td style="width:33%;text-align:center;vertical-align:middle;padding-top:20px;padding-bottom:20px;"><a href="https://roots.io/"><img title="Roots" style="max-height: 80px;" src="/assets/img/restful/silver/roots.svg"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;padding-top:20px;padding-bottom:20px;"><a href="https://siteground.com"><img title="SiteGround" src="/assets/img/restful/silver/siteground.svg"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;padding-top:20px;padding-bottom:20px;"><a href="http://themeisle.com"><img title="ThemeIsle" src="/assets/img/restful/silver/themeisle.png"></a></td>
		</tr>
		<tr>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="https://wpengine.com"><img title="WP Engine" src="/assets/img/restful/silver/wpengine.png"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="http://versionpress.net"><img title="VersionPress" src="/assets/img/restful/silver/versionpress.png"></a></td>
			<td style="width:33%;text-align:center;vertical-align:middle;"><a href="https://yoast.com/"><img title="Yoast" src="/assets/img/restful/silver/yoast.png"></a></td>
		</tr>
	</tbody>
</table>

### Individual

Aaron Jorbin, Aki Björklund, Anu Gupta, Bjørn Ensover Johansen, Brian Krogsgard, Bronson Quick, Chuck Reynolds, Corey McKrill, Daniel Hüsken, Dave McDonald, Dave Wardle, Eli Silverman, Felix Arntz, Howard Jacobson, Japh Thomson, Jason Resnick, Jeremy Felt, Justin Kopepasah, Kailey Lampert, Kevin Cristiano, Max Cutler, Mike Little, Mike Waggoner, Nate Wright, Pippin Williamson, Quasel, Ralf Hortt, Richard Aber, Richard Wiggins, Ryan Duff, Scott Kingsley Clark, Shinichi Nishikawa, Sven Hofmann, Takayuki Miyauchi, Tom McFarlin, rtCamp
