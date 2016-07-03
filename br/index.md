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

WP-CLI também inclui muitos comandos para ações que não são possíveis através da administração do WordPress. Por exemplo, `wp transient delete-all` ([doc](https://wp-cli.org/commands/transient/delete-all/)) permite deletar uma ou todas as <abbr title='Dados transitórios'>transients</abbr>:

```
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

Para uma introdução mais completa sobre como usar a WP-CLI, leia o [Guia rápido](https://wp-cli.org/docs/quick-start/).

Já se sente confortável com o básico? Vá para a [lista completa de comandos](https://wp-cli.org/commands/) para obter informações detalhadas na gestão de temas e plugins, importação e exportação de dados, operações de busca e substituição  no banco de dados e muito mais.

## Instalando

Realizar o download do arquivo Phar é o método de instalação que recomendamos. Caso precise, nossa documentação para [métodos alternativos de instação](https://wp-cli.org/docs/installing/).

Antes instalar a WP-CLI, certifique-se que seu ambiente possua os requesitos mínimos:

- Ambiente UNIX-like (OS X, Linux, FreeBSD, Cygwin); suporte limitado para ambientes Windows
- PHP 5.3.29 ou superior
- WordPress 3.7 ou superior

Após verificar os requesitos, faça o download do arquivo [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) usando `wget` ou `curl`:

```
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Em seguida, verifique se está funcionando:

```
$ php wp-cli.phar --info
```

Digite `wp` para utilizar WP-CLI a partir da linha de comando, torne o arquivo executável e mova-o para algum diretório presente em sua variável de ambiente PATH. For example:

```
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

Se WP-CLI foi instalado com sucesso, ao executar `wp --info` você deverá ver algo como:

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

WP-CLI pode ser atualizado com `wp cli update` ([doc](https://wp-cli.org/commands/cli/update/)), ou repetindo os passos da instalação.

Quer viver a vida no limite? Execute `wp cli update --nightly` para usar a última compilação de desenvolvimento da WP-CLI. Essa versão é bastante estável para utilizar em seu ambiente de desenvolvimento, e sempre inclui as melhores e mais atuais funcionalidades da WP-CLI.

## Suporte

Os colaboradores do projeto WP-CLI fazem seu melhor para rsponder a todos os problemas assim que possível. Para que possamos fazer melhor uso do tempo dos voluntários, verifique se já existe uma resposta para sua pergunta em umas das fontes abaixo:

- [Problemas comuns e suas respostas](https://wp-cli.org/docs/common-issues/)
- [Melhores práticas para informar um problema](https://wp-cli.org/docs/bug-reports/)
- [Portal de documentação](https://wp-cli.org/docs/)
- [Problemas abertos ou fechados no Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [Forum WordPress no StackExchange](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

Caso não encontre uma resposta na fontes existentes, fique a vontade para [abrir um <abbr title='Problemas ou erros'>issues<abbr>](https://github.com/wp-cli/wp-cli/issues/new) com sua pergunta.

Se você possui uma conta WordPress.org, considere se inscrever no canal `#cli` no [Slack do WordPress.org](https://make.wordpress.org/chat/).

## Extendento

Um **commando** é uma unidade singular de uma funcionalidade WP-CLI. `wp plugin install` ([doc](https://wp-cli.org/commands/plugin/install/)) é um comando. `wp plugin activate` ([doc](https://wp-cli.org/commands/plugin/activate/)) é outro.

WP-CLI vem com muitos comandos. Criar um comando personalizado para WP-CLi é mais fácil do que parece. Leia o [livro de receitas de comandos](https://wp-cli.org/docs/commands-cookbook/) para aprender mais. Procure a [documentação de API interna](https://wp-cli.org/docs/internal-api/) para descobrir a variedade de funcionalidades úteis que você pode utilizar no seu comando personalizado para WP-CLI.

## Contribuindo

Seja bem vindo e obrigado!

Nós agradecemos sua iniciativa em contribuir com a WP-CLI. É por sua causa e a comunidade a sua volta, que a WP-CLI se tornou um grande projeto.

**Contribuição não está limitado a somente código.** Te encorajamos a contribuir da maneira que melhor se encaixe em suas habilidades, escrevendo tutoriais, com demonstrações em palestras locais, ajudar outros usuários respondendo suas perguntas no suporte, ou revisando nossa documentação.

De uma olhada com atenção [nesse guia](https://wp-cli.org/docs/contributing/). Seguindo esses passos você estará respeitando o tempo dos outros colaboradoes. Por sua vez, eles farão o melhor para retribuir esse respeito no trabalho com você, nos diferentes fusos horários e em todo o mundo.

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
