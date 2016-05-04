---
layout: doc
title: Integrated tools
description: Plugins, wrappers, and other projects that integrate with WP-CLI in some form.
category: References
quick_links:
  - Plugins
  - Wrappers
  - Editor plugins
  - Vagrant boxes
  - Misc
---

The following is a list of projects that integrate with WP-CLI in some form. For installable WP-CLI packages, please see the [package index](/package-index/).

## Plugins

The following table is an alphabetical list of known commands defined in WordPress plugins:

| **Command**           | **WordPress plugin**
|:----------------------|:---------------------------------------------------------------
| acf                   | [Advanced Custom Fields wp-cli](https://github.com/hoppinger/advanced-custom-fields-wpcli)
| amt                   | [Add-Meta-Tags command line interface](http://www.codetrax.org/projects/wp-add-meta-tags/wiki/Command_Line_Interface)
| any-ipsum             | [Any Ipsum](https://wordpress.org/plugins/any-ipsum/)
| backup                | [BackUpWordPress](http://wordpress.org/extend/plugins/backupwordpress/)
| backupbuddy           | [BackupBuddy](http://getbackupbuddy.com/)
| backwpup              | [BackWPup](https://marketpress.de/product/backwpup-pro/)
| blog-dupe             | [blog-duplicator](https://github.com/trepmal/blog-duplicator)
| camptix               | [CampTix](https://github.com/Automattic/camptix)
| check-content         | [CheckContent](https://github.com/mattclegg/wp-cli_check-content)
| co-authors-plus       | [Co-Authors Plus](https://github.com/automattic/co-authors-plus)
| composer              | [Composer](http://wordpress.org/plugins/composer)
| config                | [WP-CFM](https://wordpress.org/plugins/wp-cfm/)
| crontrol              | [WP-Crontrol](http://wordpress.org/plugins/wp-crontrol/)
| csv                   | [Advanced CSV Importer](https://wordpress.org/plugins/advanced-csv-importer/)
| deploy                | [wp-deploy-flow](https://github.com/demental/wp-deploy-flow)
| developer             | [Developer](http://wordpress.org/plugins/developer/)
| dreamobjects          | [DreamObjects](http://wordpress.org/extend/plugins/dreamobjects/)
| edd                   | [Easy Digital Downloads](https://easydigitaldownloads.com/docs/wp-cli-commands/)
| elasticpress          | [ElasticPress](https://github.com/10up/ElasticPress)
| google-sitemap        | [Google Sitemap Generator CLI](https://github.com/wp-cli/google-sitemap-generator-cli)
| image-gen             | [Image Gen](https://github.com/trepmal/image-gen/)
| import_sidebar        | [Widget Import Export](https://github.com/cftp/widget-importer)
| itelic                | [Licensing for Exchange](https://github.com/iron-bound-designs/exchange-addon-licensing)
| jekyll-export         | [WordPress to Jekyll Exporter](https://github.com/benbalter/wordpress-to-jekyll-exporter/)
| jetpack               | [Jetpack by WordPress.com](http://wordpress.org/plugins/jetpack/)
| liveblog              | [Liveblog](http://wordpress.org/plugins/liveblog/)
| mainwp                | [MainWP](http://docs.mainwp.com/wp-cli-commands/)
| migrate               | [WP Migrate DB CLI Interface](https://github.com/duncanjbrown/WP-CLI-Migrate/)
| migratedb             | [WP Migrate DB Pro](https://deliciousbrains.com/wp-migrate-db-pro/doc/cli-addon/)
| more-plugin-info      | [More Plugin Info](http://wordpress.org/plugins/more-plugin-info/)
| multi-device          | [Multi Device Switcher](https://wordpress.org/plugins/multi-device-switcher/)
| nginx                 | [Nginx Cache Controller](http://wordpress.org/plugins/nginx-champuru/)
| p2-by-email           | [P2 By Email](https://github.com/humanmade/P2-By-Email)
| p2-resolved-posts     | [P2 Resolved Posts](http://wordpress.org/plugins/p2-resolved-posts/)
| p2p                   | [Posts 2 Posts](http://wordpress.org/plugins/posts-to-posts/)
| pdf-light-viewer      | [PDF Light Viewer](https://github.com/antongorodezkiy/pdf-light-viewer)
| post-gen              | [Post Gen](https://github.com/trepmal/post-gen/)
| rest-api-toolbox      | [REST API Toolbox](https://github.com/petenelson/wp-rest-api-toolbox)
| revisions             | [wp-revisions-cli](https://github.com/trepmal/wp-revisions-cli/)
| revision-strike       | [Revision Strike](https://wordpress.org/plugins/revision-strike/)
| safe-redirect-manager | [Safe Redirect Manager](https://github.com/tlovett1/Safe-Redirect-Manager)
| scheduled-unsticky    | [Scheduled Unsticky](http://wordpress.org/plugins/scheduled-unsticky/)
| site duplicate        | [MultiSite Clone Duplicator](http://wordpress.org/plugins/multisite-clone-duplicator/)
| stream                | [WP Stream](http://wordpress.org/plugins/stream/)
| super-cache           | [WP Super Cache CLI](https://github.com/wp-cli/wp-super-cache-cli)
| supportpress          | [SupportFlow](https://github.com/SupportFlow/supportflow)
| thinkup               | [Thinkup Import WP CLI Commands](https://github.com/taras/wp-cli-thinkup-import)
| total-cache           | [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
| usergen               | [Generate random users](https://github.com/alessandrotesoro/wp-usergen-cli)
| Unsplash              | [Import images from Unsplash into your Media Library](https://github.com/A5hleyRich/wp-cli-unsplash-command)

If you implement a WP-CLI command in one of your plugins, please list it here.

## Wrappers

* [Chef WP-CLI](https://github.com/francescolaffi/chef-wp-cli) - WP provisioning using Chef
* [node-wp-cli](https://github.com/gtg092x/node-wp-cli) - Node JS wrapper for WP-CLI
* [Puppet WP-CLI](https://github.com/rmccue/puppet-wp) - WP provisioning using Puppet
* [wpcli gem](https://github.com/hasanen/wpcli) - run WP-CLI commands from Ruby
* [wplib](https://github.com/szepeviktor/wplib) - shell scripts for managing multiple sites
* [wpcli helpers](https://github.com/kartonnade/wp_cli_helpers) - a bundle of time saver aliases and functions for the shell
* [cPanel-wp-management](https://github.com/MarioKnight/cPanel-wp-management) - shell scripts designed to loop through all accounts on cPanel servers
* [Plesk WordPress Toolkit](https://www.plesk.com/features-automation/wordpress-toolkit/) - WordPress installations management UI backed by WP-CLI

## Editor plugins

* Vim - [https://github.com/dsawardekar/wordpress.vim](https://github.com/dsawardekar/wordpress.vim)
* Netbeans - [https://github.com/junichi11/netbeans-wordpress-plugin](https://github.com/junichi11/netbeans-wordpress-plugin)
* Netbeans - [http://plugins.netbeans.org/plugin/46542/php-wordpress-blog-cms](http://plugins.netbeans.org/plugin/46542/php-wordpress-blog-cms)

## Vagrant boxes

* [Trellis](https://github.com/roots/trellis)
* [Varying Vagrant Vagrants](https://github.com/10up/varying-vagrant-vagrants)
* [VCCW](http://vccw.cc/)

## Misc

* [Bedrock](https://github.com/roots/bedrock) - WP base stack
* [EasyEngine](https://github.com/rtCamp/easyengine/) - Hosting control panel
* [WordPress Development Flow](https://github.com/cityindex/wordpress-development-flow) - retired
* [WP-CLI GUI](http://wpcligui.com/) - a GUI to assist with installing WP using WP-CLI
* [WP-API Oauth](https://github.com/WP-API/OAuth1) - WP REST API - OAuth 1.0a Server
