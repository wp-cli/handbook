---
layout: default
title: WordPress için Komut Satırı Arayüzü
---

[WP-CLI](https://wp-cli.org/) [WordPress](https://wordpress.org/) kurulumlarını yönetmek için komutlar sunan bir komut satırı aracıdır. Eklenti güncellemesi, multisite kurulumların yapılandırılması ve daha birçok şeyi web tarayıcısına ihtiyaç duymadan gerçekleştirebilirsiniz.


Güncel kalmak için [@wpcli Twitter](https://twitter.com/wpcli) hesabını takip edebilir ya da  [eposta bültenine abone olabilirsiniz](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e).


[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Dependency Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Percentage of issues still open")



Bağlantılar: [Kullanım](#kullanm) &#124; [Kurulum](#kurulum) &#124; [Destek](#destek) &#124; [Genişletmek](#geniletmek) &#124; [Katkıda Bulunmak](#katkda-bulunmak) &#124; [Katkıda Bulunanlar](#katkda-bulunanlar)

## Kullanım

WP-CLI, WordPress yönetim panelinden gerçekleştirebileceğiniz tüm işlemler için komut-satırı arabirimi sunmayı amaçlar. Örneğin `wp plugin install --activate` ([belge](https://wp-cli.org/commands/plugin/install/)) bir WordPress eklentisini kurmanızı ve aktifleştirmenizi sağlar:


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

WP-CLI ayrıca WordPress yönetim panelinden gerçekleştiremeyeceğiniz komutları da barındırır. Örneğin, `wp transient delete --all` ([belge](https://wp-cli.org/commands/transient/delete/)) bir veya daha fazla transient'i silmenizi sağlar:


```bash
$ wp transient delete --all
Success: 34 transients deleted from the database.
```

WP-CLI kullanımı hakkında detaylı bilgi için, [Hızlı Giriş belgesini](https://wp-cli.org/docs/quick-start/) okuyun.

Temel şeyleri zaten biliyorum diyorsanız, direkt [komutlara](https://wp-cli.org/commands/) dalıp  tema ve eklenti yönetimi, veri aktarımı, veritabanı bul-değiştir işlemi ve dahası hakkında detaylı bilgiye ulaşabilirsiniz. 


## Kurulum

Phar dosyasını indirerek kurmanızı öneririz. İhtiyacınız olursa, [alternatif kurulum yöntemlerine](https://wp-cli.org/docs/installing/) kurulum dökümanından ulaşabilirsiniz.
 

Lütfen WP-CLI'i kurmadan önce minimum ortam gereksinimlerin karşılandığından emin olunuz:

- UNIX-benzeri işletim sistemi (OS X, Linux, FreeBSD, Cygwin); Windows kısıtlı desteklenir
- PHP 5.3.29 veya daha üst sürüm
- WordPress 3.7 veya daha üst sürüm

Gerensinimleri karşıladıktan sonra, [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) dosyasını `wget` veya `curl` ile indirin:

```bash
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Sonra, çalışıp çalışmadığını kontrol edin:

```bash
$ php wp-cli.phar --info
```

WP-CLI'e komut satırından `wp` yazarak erişebilmek için dosyayı çalıştırılabilir hale getirin ve PATH'de tanımlı olan bir yere taşıyın. Örneğin:

```bash
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

Eğer kurulum başarılı bir şekilde tamamlandıysa, `wp --info` komutunu çalıştırdığınızda buna benzer birşey göreceksiniz:

```bash
$ wp --info
PHP binary:    /usr/bin/php5
PHP version:    5.5.9-1ubuntu4.14
php.ini used:   /etc/php5/cli/php.ini
WP-CLI root dir:        /home/wp-cli/.wp-cli
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
WP-CLI project config:
WP-CLI version: 0.25.0
```


### Güncelleme

WP-CLI'i  `wp cli update` komutu ([belge](https://wp-cli.org/commands/cli/update/)) ile veya kurulum adımlarını tekrarlayarak güncelleyebilirsiniz.

Sınırda yaşamayı seviyor musunuz?  `wp cli update --nightly` komutu ile nightly build sürümüne güncelleyebilirsiniz. Geliştirme ortamınız için nightly build sürümler daha çok yada az stabil olabilir ve her zaman en son ve yeni WP-CLI özelliklerini içerir.

### Sekme tamamlama

WP-CLI ayrıca, Bash ve ZSH için sekme tamamlama scripti sunar. Yapmanız gereken sadece [wp-completion.bash](https://raw.githubusercontent.com/wp-cli/wp-cli/master/utils/wp-completion.bash) dosyasını indirmek ve kaynak olarak `~/.bash_profile` dosyanıza tanımlamak:



```bash
source /FULL/PATH/TO/wp-completion.bash
```

Ekledikten sonra `source ~/.bash_profile` komutunu çalıştırmayı unutmayın.

Shell için zsh kullanıyorsanız, kaynak olarak tanımlamadan önce `bashcompinit` i yükleyip çalıştırmanız gerekebilir. Aşağıdaki kodları `.zshrc` dosyanıza ekleyin:

```bash
autoload bashcompinit
bashcompinit
source /FULL/PATH/TO/wp-completion.bash
```



## Destek

WP-CLI bakımcıları ve katılımcıları tüm yeni gelen soruları cevaplamak için ellerinden geleni yapmaktadır. Onların zamanını verimli kullanmak adına, lütfen öncelikle sorunuzun cevabını aşağıdaki kaynaklarda arayın:


- [Ortak sorunlar ve çözümleri](https://wp-cli.org/docs/common-issues/)
- [Dökümantasyon](https://wp-cli.org/docs/)
- [Github üzerindeki açık veya kapalı konular](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [runcommand Excerpts](https://runcommand.io/excerpts/)
- [WordPress StackExchange forumları](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

Eğer bu kaynaklarda sorularınıza cevap bulamazsanız, [WordPress.org Slack organizasyonu](https://make.wordpress.org/chat/) üzerinden `#cli` kanalına katılın, topluluk üyelerinden birisi yardımcı olabilir. Profesyonel kullanıcılar, premium destek için ayrıca [runcommand](https://runcommand.io/) 'ı düşünebilirler.

Github konuları mevcut komutlar için yenilik ve hata takibi icin kullanılmaktadır, genel destek için değildir. Hata bildirimi göndermeden önce, sorununuz zamanında ele alınması için lütfen [hata bildirimi yöntemini](ttps://wp-cli.org/docs/bug-reports/) gözden geçirin.

Lütfen Twitter üzerinden destek soruları sormayın. Twitter destek için iyi bir yer değildir çünkü: 1) Yazışmaları 140 karakterin altında tutmak zor, ve 2) Twitter sizinle aynı soruna sahip birisinin önceki cevabı arayarak bulabileceği bir yer değil.


Unutmayın, özgür != ücretsiz; açık kaynak lisansı size özgürce kullanma ve değiştirme hakkı verir, başkalarının zamanını değil. Lütfen buna saygı duyun ve beklentilerinizi buna göre ayarlayın.



## Genişletmek

**Komutlar** WP-CLI'nin atomik birimleridir. `wp plugin install` ([belge](https://wp-cli.org/commands/plugin/install/)) bir komuttur.  `wp plugin activate` ([belge](https://wp-cli.org/commands/plugin/activate/)) başka bir komuttur.

WP-CLI çağrılabilen herhangi bir sınıfı, fonksiyonu yada anonim fonksiyonu komut olarak kaydetmeyi destekler. Kullanım detaylarını callback'in PHP dökümanından (PHPdoc) okur. `WP_CLI::add_command()` ([belge](https://wp-cli.org/docs/internal-api/wp-cli-add-command/)) dahili ve üçüncü-parti komutların kaydedilmesi için kullanılmaktadır.

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


WP-CLI onlarca komutla hazır olarak gelir. Özel bir WP-CLI komutu oluşturmak görünenden daha kolaydir. Detaylar için [komutlar belgesine](https://wp-cli.org/docs/commands-cookbook/) bakabilirsiniz. [Dahili API dökümantasyonunu](https://wp-cli.org/docs/internal-api/) gözden geçirerek kendi WP-CLI komutunuzda kullanabileceğiniz faydalı foksyionları keşfedebilirsiniz.


## Katkıda Bulunmak

Hoşgeldiniz ve teşekkürler!

WP-CLI'e katkıda bulunmak istediğiniz için teşekkür ederiz. WP-CLI siz ve sizin gibi topluluk üyeleri sayesinde bu kadar büyük bir proje olmayı başarabildi.

**Katkıda bulunmak sadece kod yazmakla sınırlı değildir.** kendinize yeteneklerinize uygun olacak şekilde; tanıtım yazıları yazarak, yerel etkinliklerde demo göstererek, başkalarının sorunlarına yardımcı olarak veya dökümantasyonumuzu gözden geçirerek katkıda bulunabilirsiniz.


Lütfen bir dakikanızı ayırıp [dökümanı detaylıca okuyun](https://wp-cli.org/docs/contributing/). Bunları takip ederek, katkıda bulunan diğer katılımcıların ayırdığı zamana saygı gösteriniz. Buna karşılık, onlar da aynı saygıyı sizinle çalışırken göstereceklerdir (zaman farkı gözetmeksizin, dünya genelinde).


## Yönetim
WP-CLI bu kişiler tarafından yönetiliyor:

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - şimdiki bakımcı
* [Cristi Burcă](https://github.com/scribu) - eski bakımcı
* [Andreas Creten](https://github.com/andreascreten) - kurucu


Projenin [yönetimi](https://wp-cli.org/docs/governance/) hakkında bilgi edinebilir ve [katkıda bulunanların tam listesini](https://github.com/wp-cli/wp-cli/contributors) görüntüleyebilirsiniz.

## Katkıda Bulunanlar

[composer.json](composer.json) dosyasında tanımlanan kütüphanelerin yanında, aşağıdaki projeleri de kod veya fikir için kullandık:

* [Drush](http://drush.ws/) birçok şey içın
* [wpshell](http://code.trac.wordpress.org/browser/wpshell)  `wp shell` komutu için
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/)  `wp media regenerate` komutu için
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) `wp search-replace` komutu içın
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) `wp export` komutu içın
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) `wp import` komutu içın
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) `wp scaffold plugin-tests` komutu için
