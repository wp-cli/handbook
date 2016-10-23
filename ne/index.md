---
layout: default
title: वर्डप्रेसको लागि कमाण्ड लाइन इन्टरफेस
---

[WP-CLI](https://wp-cli.org/) कमाण्ड लाइन औजारहरुको संग्रह हो जुन [वर्डप्रेस](https://wordpress.org/) व्यवस्थापन गर्न प्रयोग गरिन्छ । ब्राउजर बिना नै प्लगिन अद्यावधिक गर्न, बहुसाइट कन्फिगर गर्न तथा अन्य धेरै कामको लागि यो प्रयोग गर्न सकिन्छ ।

अद्यावधिक हुन, [टुइटरमा @wpcli](https://twitter.com/wpcli) फलो गर्नुहोस् वा [इमेल न्यूजलेटरको लागि साइन अप गर्नुहोस्](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e) ।

[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Dependency Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "समस्या समाधान गर्न लाग्ने औसत समय") [![Percentage of issues still open](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "खुला मुद्दाहरू प्रतिशतमा")

द्रुत लिंकहरु: [प्रयोग](#section) &#124; [स्थापना](#section-1) &#124; [सहायता](#section-4) &#124; [विस्तार](#section-5) &#124; [योगदान](#section-6) &#124; [श्रेय](#section-8)

## प्रयोग

WP-CLI को लक्ष भनेको वर्डप्रेस व्यवस्थापनमा गर्न सकिने जुनै कार्य गर्नको लागि कमाण्ड लाइन इन्टरफेस प्रदान गर्नु हो । उदाहरण को रुपमा, `wp plugin install --activate` ([डक](https://wp-cli.org/commands/plugin/install/)) ले वर्डप्रेस प्लगिन स्थापना गरि सक्रिय बनाउछ:

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

WP-CLI मा अन्य कमाण्डहरु पनि उपलब्ध छ जुन वर्डप्रेस व्यवस्थापन प्यानलमा हुँदैन । जस्तै, `wp transient delete --all` ([doc](https://wp-cli.org/commands/transient/delete/)) ले सबै ट्रान्जियन्टहरु मेटाउछ:

```
$ wp transient delete --all
Success: 34 transients deleted from the database.
```

WP-CLI प्रयोग गर्नेबारे अरु जान्न, [छिटो सुरु पुस्तिका](https://wp-cli.org/docs/quick-start/) पढ्नुहोस् ।

आधारभूत कुराहरुमा सहज महसुस गर्नु हुन्छ ? थिम तथा प्लगिन ब्यबस्थान गर्न, डाटा आयात निर्यात गर्न, डाटाबेसमा खोज-प्रतिस्थापन गर्न तथा अन्य कार्यको विस्तृत जानकारीको लागि [कमाण्डहरूको पूर्ण सूची](https://wp-cli.org/commands/) मा जानुहोस् ।

## स्थापना

Phar फाइल डाउनलोड गरेर स्थापना गर्ने विधि हाम्रो सिफारिस विधि हो । आवश्यक परेमा दस्तावेजमा [वैकल्पिक स्थापना विधिहरू](https://wp-cli.org/docs/installing/) हेर्नुहोस् ।

स्थापना गर्नु अघि कृपया न्यूनतम आवश्यकताहरू पूरा भएको निश्चित गर्नुहोस्:

- UNIX जस्तै वातावरण (OS X, Linux, FreeBSD, Cygwin); Windows वातावरणमा सीमित समर्थन 
- PHP 5.3.29 वा पछि
- वर्डप्रेस 3.7 वा पछि

आवश्यकताहरु प्रमाणित गरिसकेपछि `wget` वा `curl` प्रयोग गरि [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) फाइल डाउनलोड गर्नुहोस्:

```
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

अब काम गरिरहेको छ कि छैन जांच गर्नुहोस्:

```
$ php wp-cli.phar --info
```

WP-CLI लाई कमाण्ड लाइनबाट `wp` टाइप गरि प्रयोग गर्न कार्यान्वयन योग्य बनाउनु होस् अनि कतै तपाईको PATH मा सार्नुहोस् । जस्तै:

```
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

यदि WP-CLI सफलतापूर्वक स्थापना भएको छ भने `wp --info` कमाण्ड प्रविष्ट गर्दा यस्तो देख्न सक्नुहुनेछ:

```
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

### अद्यावधिक

तपाइँ `wp cli update` ([डक](https://wp-cli.org/commands/cli/update/)) कमाण्डबाट WP-CLI अद्यावधिक गर्न सक्नुहुन्छ, वा स्थापना कदम दोहोराएर ।

केहि खतरा मोलेर जिउन चाहनुहुन्छ? WP-CLI को नवीनतम रात्रि गठन प्रयोग गर्न `wp cli update --nightly` कमाण्ड हान्नुहोस् । रात्रि गठन विकास वातावरणमा प्रयोग गर्न उपयुक्त हुन्छ अनि यसमा नवीनतम तथा महानतम WP-CLI सुविधाहरु सम्मिलित हुन्छ ।

### ट्याब सम्पूर्णता

WP-CLI मा Bash र ZSH को लागि ट्याब सम्पूर्णता लिपि उपलब्ध छ । [wp-completion.bash](https://github.com/wp-cli/wp-cli/raw/master/utils/wp-completion.bash) डाउनलोड गर्नुहोस् अनि `~/.bash_profile` प्रयोग गरि सोर्स गर्नुहोस्:

```
source /FULL/PATH/TO/wp-completion.bash
```

तत्पश्चात `source ~/.bash_profile` कमाण्ड हान्न नबिर्सनुहोस् ।

यदि तपाईं सेलको लागि ZSH प्रयोग गर्नु हुन्छ भने सोर्स गर्नु भन्दा अगि `bashcompinit` लोड गरेर सुरु गर्नु पर्छ । `.zshrc` मा तलको कोड राख्नुहोस्:

```bash
autoload bashcompinit
bashcompinit
source /FULL/PATH/TO/wp-completion.bash
```

## सहायता

सबै नयाँ मुद्दाहरुमा समयमै जवाफ दिन WP-CLI का मर्मतकर्ता तथा परियोजना योगदानकर्ताहरु हरदम तत्पर रहन्छन् । ती स्वयंसेवकहरुको समयको उत्तम उपयोग गर्न कृपया पहिला तलका स्रोतहरूमा जांच गर्नुहोस् तपाईको प्रश्नको उत्तर छ कि भनेर:

- [आम समस्याहरु र त्यसको समाधानहरु](https://wp-cli.org/docs/common-issues/)
- [बग प्रतिवेदनको लागि उत्तम अभ्यासहरू](https://wp-cli.org/docs/bug-reports/)
- [दस्तावेज पोर्टल](https://wp-cli.org/docs/)
- [Github मा खुल्ला तथा बन्द समस्याहरु](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [वर्डप्रेस StackExchange फोरम](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

यदि तपाईंले ती स्रोतहरूमा आफ्नो जवाफ पाउन सक्नुभएन भने [WordPress.org Slack organization](https://make.wordpress.org/chat/) मा `#cli` च्यानलमा सामेल भई प्रश्न सोध्न सक्नुहुन्छ। व्यावसायिक प्रयोगकर्ताहरुले प्रिमियम सहायताको लागि [runcommand](https://runcommand.io/) मा पनि सम्पर्क गर्न सक्नुहुन्छ ।

गिटहब मुद्धा भनेको उन्नति तथा अबस्थित कमाण्डका बगहरुको लागि मात्र हो, साधारण सहायताको लागि हैन । मुद्धा दर्ता गर्नु अगि कृपया [राम्रो अभ्यासहरू](https://wp-cli.org/docs/bug-reports/) हेर्नुहोस् ताकी तपाईंको मुद्धा समयबद्ध ढंगमा सम्बोधन होस् ।

कृपया टुइटरमा सहायता प्रश्न नसोध्नु होला । किनकि १) १४० अक्षरमा सम्बाद गर्न अप्ठ्यारो हुन्छ २) अघिल्ला सम्बादका प्रश्नहरु खोजी गर्न सकिदैन ।

## विस्तार

**कमाण्ड** WP-CLI कार्यक्षमताको एक परमाणु एकाइ हो । `wp plugin install` ([डक](https://wp-cli.org/commands/plugin/install/)) एउटा कमाण्ड हो । `wp plugin activate` ([डक](https://wp-cli.org/commands/plugin/activate/)) अर्को कमाण्ड हो ।

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

WP-CLI मा दर्जनौं कमाण्डहरू छन् । कस्टम WP-CLI कमाण्ड सिर्जना गर्न सजिलो छ । अरु जान्न [कमाण्ड पाकपुस्तिका](https://wp-cli.org/docs/commands-cookbook/) पढ्नुहोस् । कस्टम WP-CLI कमाण्डमा प्रयोग गर्न सकिने सहयोगी प्रकार्यहरु पत्ता लगाउन [आन्तरिक API दस्तावेजहरु](https://wp-cli.org/docs/internal-api/) ब्राउज गर्नुहोस् ।

## योगदान

स्वागत र धन्यवाद!

WP-CLI मा योगदान गर्न देखाउनु भएको तपाईको अग्रसरतालाई हामी कदर गर्छौं । तपाईं र तपाईं वरिपरिको समुदायकै कारणले WP-CLI यस्तो ठूलो परियोजना बनेको हो ।

**योगदान केवल कोडमा मात्र सीमित छैन ।** हामी तपाईंलाई तपाईंको क्षमता अनुसार ठीक लागेको कार्य गरि योगदान गर्न प्रोत्साहन गर्छौं, जस्तै ट्युटोरियल लेखेर, स्थानीय मिटपमा डेमो देखाएर, अन्य प्रयोगकर्ताका प्रश्नहरुको जवाफ दिएर, दस्तावेजहरु संशोधन, आदि ।

कृपया केहि समय लिएर [गहिराईमा यी निर्देशनहरु पढ्नुहोस्](https://wp-cli.org/docs/contributing/) । तिनीहरूलाई पालना गर्नु भएमा यो स्पष्ट हुन्छ कि तपाईं परियोजनाका अन्य योगदानकर्ताको समयको आदर गर्नु हुन्छ । बदलामा तिनीहरु तपाईंको यो आदरको सम्मान गर्दै विश्वको विभिन्न समयक्षेत्रमा बसेर पनि तपाईंसंग काम गर्न कटिबद्ध हुनेछन् ।

## नेतृत्व

WP-CLI मा यी व्यक्तिहरूको नेतृत्व छ:

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - वर्तमान मर्मतकर्ता
* [Cristi Burcă](https://github.com/scribu) - पूर्ववर्ती मर्मतकर्ता
* [Andreas Creten](https://github.com/andreascreten) - संस्थापक

परियोजनाको [प्रशासन](https://wp-cli.org/docs/governance/) बारेमा थप पढ्नुहोस् र [योगदानकर्ताहरुको पूर्ण सूची](https://github.com/wp-cli/wp-cli/contributors) हेर्नुहोस् ।

## श्रेय

[composer.json](composer.json) मा परिभाषित बाहेक हामीले निम्न परियोजनाहरुबाट कोड वा विचारहरु प्रयोग गरेका छौं:

* [Drush](http://drush.ws/) धेरै कुराहरुको लागि
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) `wp shell` को लागि
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) `wp media regenerate` को लागि
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) `wp search-replace` को लागि
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) `wp export` को लागि
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) `wp import` को लागि
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) `wp scaffold plugin-tests` को लागि
