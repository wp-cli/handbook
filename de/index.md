---
layout: default
title: Kommandozeilen-Interface für WordPress
---

[WP-CLI](https://wp-cli.org/) ist eine Sammlung von Kommandozeilen-Tools zur Verwaltung von [WordPress](https://wordpress.org/) Installationen. Du kannst Plugins aktualisieren, Multisite Installationen konfigurieren und vieles mehr, ohne einen Browser zu verwenden.

Um stets auf dem Laufenden zu bleiben, folge [@wpcli auf Twitter](https://twitter.com/wpcli) oder [abonniere den Newsletter](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e).

[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Abhängigkeiten Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Durchschnittliche Zeit bis zur Lösung eines Issues](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Durchschnittliche Zeit bis zur Lösung eines Issues") [![Prozentsatz noch offener Issues](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Prozentsatz noch offener Issues")

<div style="
	border: 1px solid #7AD03A;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	padding-left: 10px;
	padding-right: 10px;
">
	<p><strong>A more RESTful WP-CLI</strong> versucht das Potenzial der WP REST API auf der Kommandozeile auszuschöpfen. Das Projekt wird unterstützt von Pressed, Chris Lema, Human Made, Pagely, Pantheon und vielen mehr. <a href="https://wp-cli.org/restful/">Mehr erfahren &rarr;</a></p>
</div>

Quick links: [Benutzung](#benutzung) &#124; [Installation](#installation) &#124; [Support](#support) &#124; [Erweitern](#erweitern) &#124; [Mitwirken](#mitwirken) &#124; [Credits](#credits)

## Benutzung

Das Ziel von WP-CLI ist es, für jede Aktion ein Kommandozeilen-Interface zur Verfügung zu stellen, die man auch über den Adminbereich ausführen kann. Mit `wp plugin install --activate` ([doc](https://wp-cli.org/commands/plugin/install/)) kann man zum Beispiel ein WordPress Plugin installieren und aktivieren:

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

WP-CLI enthält auch Befehle für viele Dinge, die man im Adminbereich nicht tun kann. Mit `wp transient delete-all` ([doc](https://wp-cli.org/commands/transient/delete-all/)) kannst du z.B. bestimmte oder alle Transients löschen:

```
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

Für eine umfassendere Einführung in die Benutzung von WP-CLI, lies am besten den [Quick Start guide](https://wp-cli.org/docs/quick-start/).

Bereits genug von den Basics? Sieh dir die [komplette Liste an Befehlen](https://wp-cli.org/commands/) an für detailliertere Informationen zur Verwaltung von Themes und Plugins, Datenimport und -export, Suchen/Ersetzen-Operationen in der Datenbank und mehr.

## Installation

Das Herunterladen der Phar Datei ist unsere empfohlene Installationsweise. Falls nötig, gibt es auch eine Dokumentation zu [alternativen Installationsmethoden](https://wp-cli.org/docs/installing/).

Bevor du WP-CLI installierst, stell bitte sicher, dass dein System die Mindestanforderungen erfüllt:

- UNIX-ähnliche Umgebung (OS X, Linux, FreeBSD, Cygwin); eingeschränkter Support in Windows-Umgebungen
- PHP 5.3.29 oder höher
- WordPress 3.7 oder höher

Wenn du das erledigt hast, lade die [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) Datei mittels `wget` oder `curl` herunter:

```
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Prüfe als nächstes, ob es funktioniert:

```
$ php wp-cli.phar --info
```

Um WP-CLI auf der Kommandozeile durch blosses Tippen von `wp` zu nutzen, mache die Datei ausführbar und verschiebe es irgendwo hin innerhalb deines PATH. Zum Beispiel:

```
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

Wenn WP-CLI erfolgreich installiert wurde, solltest du bei der Ausführung von `wp --info` etwas wie hier sehen:

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

### Aktualisieren

Du kannst WP-CLI mittels `wp cli update` ([doc](https://wp-cli.org/commands/cli/update/)) aktualisieren oder indem du die obigen Installationsschritte wiederholst.

Lebst du gerne gefährlich? Führe `wp cli update --nightly` aus um den aktuellsten Nightly Build von WP-CLI zu nutzen. Der Nightly Build ist mehr oder weniger stabil genug für die Nutzung in deiner Entwicklungsumgebung und enthält jeweils die neusten und besten Features von WP-CLI.

### Tab-Vervollständigung

Für WP-CLI gibt es auch ein Skript zur Autovervollständigung von Befehlen für Bash und ZSH. Lade einfach [wp-completion.bash](https://github.com/wp-cli/wp-cli/raw/master/utils/wp-completion.bash) herunter und referenziere es in der `~/.bash_profile` Datei:

```
source /FULL/PATH/TO/wp-completion.bash
```

Vergiss nicht, danach `source ~/.bash_profile` auszuführen.

## Support

Die Betreuer und Mitwirkenden hinter WP-CLI tun ihr bestes um schnellstmöglich auf neue Issues zu antworten. Um ihre Arbeit zu erleichtern, prüfe zunächst ob es bereits an einem dieser Orte eine Antwort auf deine Frage gibt:

- [Gängige Fehler und deren Lösungen](https://wp-cli.org/docs/common-issues/)
- [Best Practices beim Erstellen eines Bug Reports](https://wp-cli.org/docs/bug-reports/)
- [Dokumentationsportal](https://wp-cli.org/docs/)
- [Offene oder geschlossene Issues auf Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [WordPress StackExchange Foren](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

Wenn du deine Antwort auf keiner dieser Seiten finden kannst, [erstelle ein Issue](https://github.com/wp-cli/wp-cli/issues/new) mit deiner Frage.

Falls du einen WordPress.org Account hast, ziehe in Erwägung dem `#cli` Channel des [WordPress.org Slack Teams](https://make.wordpress.org/chat/) beizutreten.

## Erweitern

Ein **Befehl** ist die atomare Einheit der WP-CLI Funktionalität. `wp plugin install` ([doc](https://wp-cli.org/commands/plugin/install/)) ist ein solcher Befehl. `wp plugin activate` ([doc](https://wp-cli.org/commands/plugin/activate/)) ein anderer.

WP-CLI enthält Dutzende Befehle. Es ist auch sehr einfach eigene Befehle zu erstellen. Lies dazu das [Commands Cookbook](https://wp-cli.org/docs/commands-cookbook/) um mehr zu erfahren. Stöbere in der [internen API-Dokumentation](https://wp-cli.org/docs/internal-api/) um eine Vielzahl hilfreicher Funktionen zu entdecken, welche du in deinem eigenen WP-CLI Befehl nutzen kannst.

## Mitwirken

Willkommen und danke!

Wir schätzen es sehr, dass du interessiert bist an WP-CLI mitzuwirken. Nur wegen dir und der Community um dich herum ist WP-CLI so ein tolles Projekt.

**Mitwirken beschränkt sich nicht nur aufs Programmieren.** Wir möchten dich dazu ermutigen, das beizutragen, was du am besten kannst. Sei es durch das Schreiben von Tutorials, das Vorstellen von WP-CLI an einem lokalen Meetup, anderen Nutzern bei ihren Supportfragen zu helfen oder unsere Dokumentation zu pflegen.

Nimm dir bitte einen Moment Zeit um [unsere Guidelines in Ruhe durchzulesen](https://wp-cli.org/docs/contributing/). Das Einhalten dieser Guidelines zeigt, dass du die Zeit respektierst, welche andere in dieses Projekt investieren. Im Gegensatz werden andere Betreuer rund um den Globus diesen Respekt erwidern.

## Projektleitung

WP-CLI wird von folgenden Personen geleitet:

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - aktueller Betreuer
* [Cristi Burcă](https://github.com/scribu) - vorheriger Betreuer
* [Andreas Creten](https://github.com/andreascreten) - Gründer

Lies mehr über die [Projektstruktur](https://wp-cli.org/docs/governance/) und schau dir die [komplette Liste von Mitwirkenden](https://github.com/wp-cli/wp-cli/contributors) an.

## Credits

Neben den Bibliotheken, die in der [composer.json](composer.json) Datei erwähnt werden, nutzen wir Code oder Ideen von folgenden Projekten:

* [Drush](http://drush.ws/) für... viele Dinge
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) für `wp shell`
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) für `wp media regenerate`
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) für `wp search-replace`
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) für `wp export`
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) für `wp import`
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) für `wp scaffold plugin-tests`
