---
layout: default
title: Interface en ligne de commande pour WordPress
---

[WP-CLI](https://wp-cli.org/) est un ensemble d'outil en ligne de commande pour gérer vos installations [WordPress](https://wordpress.org/). Vous pouvez mettre à jour les extensions, configurer des installations multi-site et beaucoup plus sans avoir recours à un navigateur web.

Pour rester à jour, suivez [@wpcli sur Twitter](https://twitter.com/wpcli) ou [inscrivez-vous à notre lettre d'information par email](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e).

[![Statut du build](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Statut des dépendances](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Temps moyen pour traiter un ticket](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Temps moyen pour traiter un ticket") [![Pourcentage de tickets encore ouverts](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Pourcentage de tickets encore ouverts")

Liens rapides: [Utilisation](#utilisation) &#124; [Installation](#installation) &#124; [Support](#support) &#124; [Étendre](#tendre) &#124; [Contribuer](#contribuer) &#124; [Crédits](#crdits)

## Utilisation

L'objectif de WP-CLI est de fournir une interface en ligne de commande pour toute action qu'il serait utile de faire dans l'administration WordPress. Par exemple, `wp plugin install --activate` ([doc](https://wp-cli.org/commands/plugin/install/)) vous permet d'installer et activer une extension WordPress :

```bash
$ wp plugin install rest-api --activate
Installing WordPress REST API (Version 2) (2.0-beta13)
Downloading install package from https://downloads.wordpress.org/plugin/rest-api.2.0-beta13.zip...
Unpacking the package...
Installing the plugin...
Plugin installed successfully.
Activating 'rest-api'...
Success: Plugin 'rest-api' activated.
```

WP-CLI inclut aussi des commandes pour d'autres choses que vous ne pouvez pas faire dans l'administration WordPress. Par exemple, `wp transient delete-all` ([doc](https://wp-cli.org/commands/transient/delete-all/)) permet de supprimer un ou tous les "transients" :

```bash
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

Pour une introduction plus complète sur l'utilisation de WP-CLI, lisez le [Guide de démarrage rapide (en)](https://wp-cli.org/docs/quick-start/).

Vous vous sentez déjà à l'aise avec les bases ? Allez voir la [liste complète des commandes (en)](https://wp-cli.org/commands/) pour avoir des informations détaillées sur la gestion des thèmes et extensions, l'import/export de donnée, l'exécution de rechercher/remplacer dans la base de données et bien plus.

## Installation

Télécharger le Phar est la méthode d'installation que nous recommandons. Si vous avez besoin, vous pouvez aussi consulter notre documentation sur [autres méthodes d'installation (en)](https://wp-cli.org/docs/installing/).

Avant d'installer WP-CLI, veuillez vous assurer que votre environnement réponds aux exigences minimales :

- Environnement de type UNIX (OS X, Linux, FreeBSD, Cygwin); le support est limité sur les environnements Windows
- PHP 5.3.29 ou plus récent
- WordPress 3.7 ou plus récent

Une fois que vous avez vérifier ces exigences, téléchargez le fichier [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) en utilisant `wget` ou `curl` :

```bash
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Ensuite, vérifiez que tout fonctionne :

```bash
$ php wp-cli.phar --info
```

Pour utiliser WP-CLI à partir de la ligne de commande en tapant `wp`, rendez le fichier exécutable et déplacez le quelque part dans votre `PATH`. Par exemple :

```bash
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

Si WP-CLI a été installé correctement, vous devez voir quelque chose comme ça quand vous exécutez `wp --info`:

```bash
$ wp --info
PHP binary:    /usr/bin/php5
PHP version:    5.5.9-1ubuntu4.14
php.ini used:   /etc/php5/cli/php.ini
WP-CLI root dir:        /home/wp-cli/.wp-cli
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version: 0.24.1
```

### Mise à jour

Vous pouvez mettre à jour WP-CLI avec la commande `wp cli update` ([doc](https://wp-cli.org/commands/cli/update/)), ou en répétant les étapes d'installation.

Vous voulez vivre dangereusement ? Exécutez `wp cli update --nightly` pour installer les derniers nightly build de WP-CLI. Un nightly build est relativement stable pour être utilisé dans votre environnement de développement et inclut toujours les fonctionnalités de WP-CLI les plus récentes.

### Tab completions

WP-CLI contient des scripts d'autocomplétion pour Bash et ZSH. Il suffit de télécharger [wp-completion.bash](https://raw.githubusercontent.com/wp-cli/wp-cli/master/utils/wp-completion.bash) et de l'importer dans votre fichier `~/.bash_profile`:

```bash
source /FULL/PATH/TO/wp-completion.bash
```

Si vous voulez l'utiliser directement sans redémarrer votre session de terminal, n'oubliez pas de lancer `source ~/.bash_profile`.

Si vous utiliser le shell zsh, vous devrez probablement charger et démarrer `bashcompinit` avant d'utiliser la commande `source`. Ajouter ces lignes dans votre fichier `.zshrc`:

```bash
autoload bashcompinit
bashcompinit
source /FULL/PATH/TO/wp-completion.bash
```

## Support

Les mainteneurs de WP-CLI et les contributeurs du projet font de leur mieux pour répondre à tous les nouveaux tickets en temps opportun. Pour utiliser au mieux leur temps bénévole, merci de vérifier s'il n'existe pas déjà une réponse à votre question dans l'une des ressources suivantes :

- [Problèmes courants et leur correction (en)](https://wp-cli.org/docs/common-issues/)
- [Bonnes pratiques pour soumettre un rapport de bug (en)](https://wp-cli.org/docs/bug-reports/)
- [Documentation (en)](https://wp-cli.org/docs/)
- [Tickets ouvert ou fermés sur Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [Forum StackExchange WordPress](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

Si vous n'arrivez pas à trouver une réponse en utilisant un de ces liens, rejoignez le canal `#cli` sur [l'organisation Slack WordPress.org](https://make.wordpress.org/chat/) pour voir si un membre de la communauté peut avoir une réponse pour vous. Les professionnels doivent savoir que [runcommand](https://runcommand.io/) fournit du support premium.

Les tickets Github, permettent de suivre l'évolution des bugs et améliorations sur les commandes existantes. Ils ne sont pas utilisés pour faire du support. Avant de soumettre un nouveau rapport de bug, merci de passer en revue [nos bonnes pratiques](https://wp-cli.org/docs/bug-reports/) pour vous assurer que votre ticket les respectent.

Merci de ne pas demander du support sur Twitter. Twitter n'est pas un endroit convenable pour faire du support : 1) c'est compliqué d'avoir une conversation en moins de 140 caractères et 2) Twitter n'est pas un endroit ou quelqu'un avec la même question peut chercher et obtenir une réponse avant de la poser à nouveau.

Souvenez-vous, libre != gratuit; la licence open source vous donne la liberté d'utiliser et modifier, mais pas au dépend du temps d'autres personnes. Merci d'être respectueux et de définir vos attentes en conséquence.

## Étendre

Une **commande** est une unité atomique de fonctionnalité WP-CLI. `wp plugin install` ([doc](https://wp-cli.org/commands/plugin/install/)) est une commande. `wp plugin activate` ([doc](https://wp-cli.org/commands/plugin/activate/)) en est une autre.

WP-CLI permet d'enregister n'importe quelle classe, fonction ou closure comme une commande. Les informations d'utilisation sont lues à partir du bloc PHPdoc de la fonction de rappel. `WP_CLI::add_command()` ([doc](https://wp-cli.org/docs/internal-api/wp-cli-add-command/)) est utilisé aussi bien pour l'enregistrement des commandes interne ou externe.

```php
/**
 * Delete an option from the database.
 *
 * Returns an error if the option didn't exist.
 *
 * ## OPTIONS
 *
 * <key>
 * : Key for the option.
 *
 * ## EXAMPLES
 *
 *     $ wp option delete my_option
 *     Success: Deleted 'my_option' option.
 */
$delete_option_cmd = function( $args ) {
    list( $key ) = $args;

    if ( ! delete_option( $key ) ) {
        WP_CLI::error( "Could not delete '$key' option. Does it exist?" );
    } else {
        WP_CLI::success( "Deleted '$key' option." );
    }
};
WP_CLI::add_command( 'option delete', $delete_option_cmd );
```

WP-CLI est livré avec des douzaines de commandes. Il est plus facile qu'il n'y parait de créer vos propres commandes WP-CLI. Lisez le [commands cookbook](https://wp-cli.org/docs/commands-cookbook/) pour en apprendre d'avantage. Parcourez la [documentation sur l'API interne](http://wp-cli.org/docs/internal-api/) pour découvrir une variété de fonctions utiles que vous pouvez utiliser dans votre commande WP-CLI personnalisée.

## Contribuer

Bienvenue et merci !

Nous apprécions que vous preniez l'iniative de contribuer à WP-CLI. C'est grâce à vous et à la communauté autour de vous que WP-CLI est un project aussi important.

**Contribuer n'est pas limité uniquement à l'écriture de code.** Nous vous encourageons à contribuer de la façon qui vous correspond le mieux, en écrivant des didactitiels, en faisant des démonstrations dans votre groupe d'utilisateur local, à aider les autres avec leurs questions de support, ou en relisant notre documentation.

Merci de prendre un moment pour [lire le guide du contributeur en profondeur](https://wp-cli.org/docs/contributing/). Suivre ces règles aide à communiquer avec le respect du temps des autres contributeurs du projet. En retour, ils feront de leur mieux pour travailler avec ce même respect, à travers les fuseaux horaires et dans le monde lorsque vous en aurez besoin.

## Leadership

WP-CLI est dirigié par ces personnes :

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - mainteneur actuel
* [Cristi Burcă](https://github.com/scribu) - mainteneur précédent
* [Andreas Creten](https://github.com/andreascreten) - créateur

Pour en savoir plus sur la [gouvernance (en)](https://wp-cli.org/docs/governance/) du projet et voir la [liste complète des contributeurs](https://github.com/wp-cli/wp-cli/contributors).

## Crédits

Derrière les librairies définies dans le fichier [composer.json](composer.json), nous avons utilisé du code et des idées venant des projets suivants :

* [Drush](http://drush.ws/) pour... pas mal de choses
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) pour `wp shell`
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) pour `wp media regenerate`
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) pour `wp search-replace`
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) pour `wp export`
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) pour `wp import`
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) pour `wp scaffold plugin-tests`
