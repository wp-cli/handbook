---
layout: default
title: Command line interface for WordPress
---

[WP-CLI](https://wp-cli.org/) は [WordPress](https://wordpress.org/) を管理するためのコマンドラインツールです。
プラグインのアップデートやマルチサイトのセットアップなどの多くのことをブラウザ無しで行うことができます。

最新情報を得たい人は、[@wpcli on Twitter](https://twitter.com/wpcli) をフォローするか、[メーリングリストにサインアップ](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e)してください。

[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Dependency Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Percentage of issues still open")

<div style="
	border: 1px solid #7AD03A;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	padding-left: 10px;
	padding-right: 10px;
">
	<p><strong>A more RESTful WP-CLI</strong> は、コマンドラインによって WP REST API のポテンシャルを解放します。このプロジェクトは Pressed、Chris Lema、Human Made、Pagely、Pantheon、その他大勢の人たちによって支援されています。<a href="https://wp-cli.org/restful/">さらに詳しく &rarr;</a></p>
</div>

Quick links: [使い方](#section) &#124; [インストール方法](#section-1) &#124; [サポート](#section-4) &#124; [拡張](#section-5) &#124; [貢献](#section-6) &#124; [クレジット](#section-8)

## 使い方

WP-CLI のゴールは、みなさんが WordPress の管理画面でやりたいと思うことをコマンドラインで提供することです。
たとえば、`wp plugin install --activate` ([ドキュメント](https://wp-cli.org/commands/plugin/install/)) は、プラグインをインストールし有効化します。

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

さらに WP-CLI は、WordPress の管理画面ではできない多くのことが可能です。たとえば、`wp transient delete-all` ([doc](https://wp-cli.org/commands/transient/delete-all/)) は、Transient に保存されているすべてのデータを削除することを可能にしています。

```
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

WP-CLI の使い方に関するさらに詳しい情報は、[クイックスタートガイド](https://wp-cli.org/docs/quick-start/)を読んでください。

もし、すでに基本的なことを理解しているなら、[コマンドリスト](https://wp-cli.org/ja/commands/)にジャンプして、テーマやプラグインの管理、データのインポートやエクスポート、データベースの操作などについての詳細をみてください。

## インストール方法

Phar ファイルをダウンロードする方法が、私たちが推奨するインストール方法です。必要なら[上級者向けインストール方法](https://wp-cli.org/docs/installing/)(英語)を見てください。

WP-CLI をインストールする前に、動作環境を確認してください。

- UNIX 系の環境 (OS X, Linux, FreeBSD, Cygwin); Windows では一部の機能に制限があります。
- PHP 5.3.29 またはそれ以降のバージョン
- WordPress 3.7 またはそれ以降のバージョン

動作条件を再度確認してから、`wget`または`curl`を使用して [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) をダウンロードしてください。

```
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

次に、それが動作しているかを確認してください。

```
$ php wp-cli.phar --info
```

WP-CLI コマンドを`wp`で実行するには、それに実行権限があることと環境変数`PATH`に登録されていることが必要です。

```
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

もし、WP-CLI のインストールが成功していれば、`wp --info`を実行したら以下のように出力されるはずです。

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

## アップデート

WP-CLI をアップデートするには、`wp cli update` ([doc](https://wp-cli.org/commands/cli/update/)) を実行するか、上述のインストール方法を再度行う必要があります。

もっととんがった生き方をしたい？ `wp cli update --nightly` を実行すれば、最新の開発者向けバージョンの WP-CLI を使用することができます。開発者向けバージョンは、あなたの開発環境で使用するのに十分な信頼性があり、つねに最新の機能を使用することができます。

## タブ補完

WP-CL には、Bash 及び ZSH 用のタブ補完用のスクリプトがあります。 [wp-completion.bash](https://raw.githubusercontent.com/wp-cli/wp-cli/master/utils/wp-completion.bash) をダウンロードして、`~/.bash_profile` から読み込んでください。

```
source /FULL/PATH/TO/wp-completion.bash
```

`source ~/.bash_profile` を実行するのを忘れないでください。

## サポート

WP-CLI のメンテナーとプロジェクトの貢献者たちは、新しい Issue に対して、より迅速に返信したいと思っています。これらのボランティアの時間を節約するために、過去に同じ質問に対する回答がないかを確認してください。

- [Common issues and their fixes](https://wp-cli.org/docs/common-issues/)
- [Best practices for submitting a bug report](https://wp-cli.org/docs/bug-reports/)
- [Documentation portal](https://wp-cli.org/docs/)
- [Open or closed issues on Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [WordPress StackExchange forums](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

もしこれらのリソースから回答を見つけられなかった場合、ご自由にあなたの質問を[Issueを書いてください](https://github.com/wp-cli/wp-cli/issues/new)。

もしあなたが WordPress.org のアカウントを持っているなら、[WordPress.org Slack organization](https://make.wordpress.org/chat/) の`#cli`チャンネルに参加することもできます。

## 拡張

それぞれの **コマンド** は、WP-CLI の関数の一つとして定義されています。`wp plugin install` ([doc](https://wp-cli.org/commands/plugin/install/)) はそのうちのひとつであり、`wp plugin activate` ([doc](https://wp-cli.org/commands/plugin/activate/)) は別のもうひとつです。

WP-CLI では、様々な実行可能なクラス、関数、クロージャをコマンドとして実行することが可能です。コマンドとして実行されるために必要な情報は、PHPdoc によって記述します。 `WP_CLI::add_command()` ([doc](https://wp-cli.org/docs/internal-api/wp-cli-add-command/)) は、内部コマンド及びサードパーティコマンドの登録に使用されています。

```
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

WP-CLI は、多くのコマンドにより構成されており、カスタムコマンドを作ることは意外と簡単です。[commands cookbook](https://wp-cli.org/docs/commands-cookbook/)を読んでください。

## 貢献

ようこそ、そしてありがとう！

私たちは、みなさんが率先して貢献してくれることに感謝しています。あなたやあなたのまわりのコミュニティによって、WP-CLIはすばらしいプロジェクトになります。

**貢献は単にコードだけではありません。** 私たちは、チュートリアルを書く、地元のミートアップでデモを行う、ユーザーの質問への回答、ドキュメントの改訂など、あなたの日々の活動に応じた貢献をお願いしています。

すこしだけ時間を使って[ガイドラインをよく読んでください](https://wp-cli.org/docs/contributing/)。ここに書かれていることに従うことで、本プロジェクトの他の貢献者たちとのコミュニケーションを円滑にすることができます。彼らは、世界をまたがってあなたと一緒に働くことに、最大限の敬意を払う努力をします。

### プロジェクトリーダー

WP-CLIは以下の個人によってリードされています。

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - 現在のメンテナー
* [Cristi Burcă](https://github.com/scribu) - 前メンテナー
* [Andreas Creten](https://github.com/andreascreten) - 創始者

プロジェクトの[ガバナンス](https://wp-cli.org/docs/governance/)と[完全な貢献者リスト](https://github.com/wp-cli/wp-cli/contributors)も読んでください。

## クレジット

[composer.json](composer.json) に記載されているライブラリに依存しており、以下のプロジェクトからコードやアイディアを得ています。

* [Drush](http://drush.ws/) for... a lot of things
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) for `wp shell`
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) for `wp media regenerate`
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) for `wp search-replace`
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) for `wp export`
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) for `wp import`
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) for `wp scaffold plugin-tests`
