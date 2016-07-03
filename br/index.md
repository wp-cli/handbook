---
layout: default
title: Interface para linha de comando em WordPress
---

[WP-CLI](https://wp-cli.org/) é um conjunto de linhas de comando para gerenciar instalações [WordPress](https://wordpress.org/). Você pode atualizar plugins, configurar instalações multisite e muito mais, sem utilizar um navegador web.

Para manter-se atualizado, siga [@wpcli no Twitter](https://twitter.com/wpcli) ou [inscreva-se em nossa newsletter](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e).

[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Dependency Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Tempo médio para resolver um issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Percentual de issues ainda abertos")

<div style="
	border: 1px solid #7AD03A;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	padding-left: 10px;
	padding-right: 10px;
">

	<p>O projeto <strong>"WP-CLI mais <i>RESTful</i>"</strong> visa proporcionar todo o potencial da linha de comando para a WP REST API e é apoiado por Pressed, Chris Lema, Human Made, Pagely, Pantheon e muitos outros. <a href="https://wp-cli.org/restful/">Saiba mais &rarr;</a></p>
</div>

Links rápidos: [Usando](#usando) &#124; [Instalando](#instalando) &#124; [Suporte](#suporte) &#124; [Extendendo](#extendendo) &#124; [Contribuindo](#contribuindo) &#124; [Creditos](#creditos)

## Usando

O objetivo da WP-CLI é fornecer uma interface em linha de comando para qualquer ação que você queira executar na administração do WordPress. Por exemplo `wp plugin install --activate` ([doc](https://wp-cli.org/commands/plugin/install/)) permite a instação e ativação de um plugin WordPress:

```
$ wp plugin install rest-api --activate
Installing WordPress REST API (Version 2) (2.0-beta13)
Downloading install package from https://downloads.wordpress.org/plugin/rest-api.2.0-beta13.zip...
Unpacking the package...
Installing the plugin...
Plugin installed successfully.
Activating 'rest-api'...
Success: Plugin 'rest-api' activated.
```

WP-CLI também inclui muitos comandos para ações que não são possíveis através da administração do WordPress. Por exemplo, `wp transient delete-all` ([doc](https://wp-cli.org/commands/transient/delete-all/)) permite deletar uma ou todas as transientes:

```
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

Para uma introdução mais completa sobre como usar a WP-CLI, leia o [Guia rápido](https://wp-cli.org/docs/quick-start/).

Já se sente confortável com o básico? Vá para a [lista completa de comandos](https://wp-cli.org/commands/) para obter informações detalhadas na gestão de temas e plugins, importação e exportação de dados, operações de busca e substituição  no banco de dados e muito mais.

## Installing

Downloading the Phar file is our recommended installation method. Should you need, see also our documentation on [alternative installation methods](https://wp-cli.org/docs/installing/).

Before installing WP-CLI, please make sure your environment meets the minimum requirements:

- UNIX-like environment (OS X, Linux, FreeBSD, Cygwin); limited support in Windows environment
- PHP 5.3.29 or later
- WordPress 3.7 or later

Once you've verified requirements, download the [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) file using `wget` or `curl`:

```
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Next, check if it is working:

```
$ php wp-cli.phar --info
```

To use WP-CLI from the command line by typing `wp`, make the file executable and move it to somewhere in your PATH. For example:

```
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

If WP-CLI was installed successfully, you should see something like this when you run `wp --info`:

```
$ wp --info
PHP binary:    /usr/bin/php5
PHP version:    5.5.9-1ubuntu4.14
php.ini used:   /etc/php5/cli/php.ini
WP-CLI root dir:        /home/wp-cli/.wp-cli
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version: 0.23.0
```

You can update WP-CLI with `wp cli update` ([doc](https://wp-cli.org/commands/cli/update/)), or by repeating the installation steps.

Want to live life on the edge? Run `wp cli update --nightly` to use the latest nightly build of WP-CLI. The nightly build is more or less stable enough for you to use in your development environment, and always includes the latest and greatest WP-CLI features.

## Support

WP-CLI's maintainers and project contributors do their best to respond to all new issues in a timely manner. To make the best use of their volunteered time, please first see if there may be an answer to your question in one of the following resources:

- [Common issues and their fixes](https://wp-cli.org/docs/common-issues/)
- [Best practices for submitting a bug report](https://wp-cli.org/docs/bug-reports/)
- [Documentation portal](https://wp-cli.org/docs/)
- [Open or closed issues on Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [WordPress StackExchange forums](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

If you can't find your answer in one of those existing resources, feel free to [create an issue](https://github.com/wp-cli/wp-cli/issues/new) with your question.

If you have a WordPress.org account, you may also consider joining the `#cli` channel on the [WordPress.org Slack organization](https://make.wordpress.org/chat/).

## Extending

A **command** is an atomic unit of WP-CLI functionality. `wp plugin install` ([doc](https://wp-cli.org/commands/plugin/install/)) is one command. `wp plugin activate` ([doc](https://wp-cli.org/commands/plugin/activate/)) is another.

WP-CLI comes with dozens of commands. It's easier than it looks to create a custom WP-CLI command. Read the [commands cookbook](https://wp-cli.org/docs/commands-cookbook/) to learn more. Browse the [internal API docs](https://wp-cli.org/docs/internal-api/) to discover a variety of helpful functions you can use in your custom WP-CLI command.

## Contributing

Welcome and thanks!

We appreciate you taking the initiative to contribute to WP-CLI. It’s because of you, and the community around you, that WP-CLI is such a great project.

**Contributing isn’t limited to just code.** We encourage you to contribute in the way that best fits your abilities, by writing tutorials, giving a demo at your local meetup, helping other users with their support questions, or revising our documentation.

Please take a moment to [read these guidelines at depth](https://wp-cli.org/docs/contributing/). Following them helps to communicate that you respect the time of the other contributors to the project. In turn, they’ll do their best to reciprocate that respect when working with you, across timezones and around the world.

## Leadership

WP-CLI is led by these individuals:

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - current maintainer
* [Cristi Burcă](https://github.com/scribu) - previous maintainer
* [Andreas Creten](https://github.com/andreascreten) - founder

Read more about the project's [governance](https://wp-cli.org/docs/governance/) and view a [complete list of contributors](https://github.com/wp-cli/wp-cli/contributors).

## Credits

Besides the libraries defined in [composer.json](composer.json), we have used code or ideas from the following projects:

* [Drush](http://drush.ws/) for... a lot of things
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) for `wp shell`
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) for `wp media regenerate`
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) for `wp search-replace`
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) for `wp export`
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) for `wp import`
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) for `wp scaffold plugin-tests`
