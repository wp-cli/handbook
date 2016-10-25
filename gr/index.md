---
layout: default
title: Διεπαφή γραμμής εντολών για το WordPress
---

Το [WP-CLI](https://wp-cli.org/) είναι ένα σύνολο από εργαλεία γραμμής εντολών για τη διαχείριση εγκαταστάσεων [WordPress](https://wordpress.org/). Μπορείτε να ενημερώνετε πρόσθετα, να ρυθμίζετε εγκαταστάσεις πολλαπλών ιστοτόπων και πολλά περισσότερα, χωρίς τη χρήση περιηγητή.

Για να μένετε ενημερωμένοι, ακολουθήστε το [@wpcli στο Twitter](https://twitter.com/wpcli) ή [εγγραφείτε για το ενημερωτικό μας δελτίο](http://wp-cli.us13.list-manage.com/subscribe?u=0615e4d18f213891fc000adfd&id=8c61d7641e).

[![Build Status](https://travis-ci.org/wp-cli/wp-cli.png?branch=master)](https://travis-ci.org/wp-cli/wp-cli) [![Dependency Status](https://gemnasium.com/badges/github.com/wp-cli/wp-cli.svg)](https://gemnasium.com/github.com/wp-cli/wp-cli) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/wp-cli/wp-cli.svg)](http://isitmaintained.com/project/wp-cli/wp-cli "Percentage of issues still open")

Γρήγοροι σύνδεσμοι: [Χρήση](#using) &#124; [Εγκατάσταση](#installing) &#124; [Υποστήριξη](#support) &#124; [Επέκταση](#extending) &#124; [Συνεισφορά](#contributing) &#124; [Ευχαριστίες](#credits)

## Χρήση

Ο σκοπός του WP-CLI είναι η παροχή μίας διεπαφής γραμμής εντολών για κάθε ενέργεια που μπορεί να θέλετε να εκτελέσετε στο διαχειριστικό περιβάλλον του WordPress. Για παράδειγμα, η εντολή `wp plugin install --activate` ([τεκμηρίωση](https://wp-cli.org/commands/plugin/install/)) σας επιτρέπει να εγκαταστήσετε και να ενεργοποιήσετε ένα πρόσθετο WordPress:

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

Το WP-CLI περιλαμβάνει επίσης εντολές για πολλά πράγματα που δεν μπορείτε να κάνετε στο διαχειριστικό περιβάλλον του WordPress. Για παράδειγμα, η εντολή `wp transient delete-all` ([τεκμηρίωση](https://wp-cli.org/commands/transient/delete-all/)) σας επιτρέπει να διαγράψετε ένα ή όλα τα transients:

```bash
$ wp transient delete-all
Success: 34 transients deleted from the database.
```

Για μία πιο ολοκληρωμένη εισαγωγή στη χρήση του WP-CLI, διαβάστε τον [οδηγό γρήγορης εκκίνησης](https://wp-cli.org/docs/quick-start/).

Αισθάνεστε ήδη άνετα με τα βασικά; Προχωρήστε στην [πλήρη λίστα εντολών](https://wp-cli.org/commands/) για λεπτομερείς πληροφορίες για το πως να διαχειρίζεστε τα θέματα και τα πρόσθετα, να εισάγετε και να εξάγετε δεδομένα, να εκτελείτε λειτουργίες εύρεσης-αντικατάστασης στη βάση δεδομένων και πολλά περισσότερα.

## Εγκατάσταση

Μεταφορτώνοντας το αρχείο Phar είναι ο δικός μας προτεινόμενος τρόπος. Εάν χρειάζεται, δείτε επίσης την τεκμηρίωσή μας για [εναλλακτικές μεθόδους εγκατάστασης](https://wp-cli.org/docs/installing/).

Πριν την εγκατάσταση του WP-CLI, παρακαλούμε βεβαιωθείτε ότι το περιβάλλον σας ανταποκρίνεται στις ελάχιστες απαιτήσεις:

- Περιβάλλον UNIX-like (OS X, Linux, FreeBSD, Cygwin), περιορισμένη υποστήριξη σε περιβάλλον Windows
- PHP 5.3.29 ή νεότερη
- WordPress 3.7 ή νεότερο

Μόλις επιβεβαιώσετε τις απαιτήσεις, μεταφορτώστε το αρχείο [wp-cli.phar](https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar) χρησιμοποιώντας την εντολή `wget` ή `curl`:

```bash
$ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Μετά, ελέγξτε ότι δουλεύει:

```bash
$ php wp-cli.phar --info
```

Για να χρησιμοποιήσετε το WP-CLI από τη γραμμή εντολών πληκτρολογώντας `wp`, κάντε το αρχείο εκτελέσιμο και μετακινήστε το κάπου μέσα στο PATH σας. Για παράδειγμα:

```bash
$ chmod +x wp-cli.phar
$ sudo mv wp-cli.phar /usr/local/bin/wp
```

Αν το WP-CLI έχει εγκατασταθεί επιτυχώς, όταν εκτελέσετε `wp --info` θα πρέπει να δείτε κάτι σαν αυτό:

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

### Ενημέρωση

Μπορείτε να ενημερώσετε το WP-CLI με την εντολή `wp cli update` ([τεκμηρίωση](https://wp-cli.org/commands/cli/update/)), ή επαναλαμβάνοντας τα βήματα εγκατάστασης.

Θέλετε να ζείτε τη ζωή στα άκρα; Εκτελέστε `wp cli update --nightly` για να χρησιμοποιήσετε την τελευταία nightly build WP-CLI. Το nightly build είναι αρκετά ασφαλές για να χρησιμοποιηθεί σε δοκιμαστικό περιβάλλον, και πάντα περιλαμβάνει τα τελευταία και καλύτερα χαρακτηριστικά του WP-CLI.

### Συμπληρώσεις Tab

Το WP-CLI έρχεται επίσης με ένα αρχείο για συμπλήρωση tab για το Bash και το ZSH. Απλά μεταφορτώστε το [wp-completion.bash](https://github.com/wp-cli/wp-cli/raw/master/utils/wp-completion.bash) και προσθέστε την παρακάτω γραμμή στο αρχείο `~/.bash_profile`:

```bash
source /FULL/PATH/TO/wp-completion.bash
```

Μην ξεχάσετε να εκτελέσετε την εντολή `source ~/.bash_profile` μετά.

Αν χρησιμοποιείτε zsh για κέλυφος, ίσως χρειαστεί να φορτώσετε και να εκκινήσετε το `bashcompinit` πριν το source. Τοποθετείστε το παρακάτων στο στο αρχείο σας `.zshrc`:

```bash
autoload bashcompinit
bashcompinit
source /FULL/PATH/TO/wp-completion.bash
```

## Υποστήριξη

Τα άτομα που συντηρούν το WP-CLI και συνεισφέρουν σε αυτό, κάνουν ότι καλύτερο μπορούν για να απαντάνε σε όλα τα νέα θέματα εγκαίρως. Για να κάνετε τη βέλτιστη χρήση του εθελοντικού τους χρόνου, παρακαλώ δείτε πρώτα μήπως υπάρχει απάντηση στην ερώτησή σας σε έναν από τους ακόλουθους συνδέσμους:

- [Κοινά προβλήματα και λύσεις τους](https://wp-cli.org/docs/common-issues/)
- [Βέλτιστες πρακτικές για υποβολή αναφοράς σφάλματος](https://wp-cli.org/docs/bug-reports/)
- [Πύλη τεκμηρίωσης](https://wp-cli.org/docs/)
- [Ανοιχτά ή κλειστά θέματα στο Github](https://github.com/wp-cli/wp-cli/issues?utf8=%E2%9C%93&q=is%3Aissue)
- [WordPress StackExchange forums](http://wordpress.stackexchange.com/questions/tagged/wp-cli)

Αν δε μπορείτε να βρείτε απάντηση σε ένα από τις υπάρχουσες πηγές, [δημιουργήστε ένα θέμα](https://github.com/wp-cli/wp-cli/issues/new) με την ερώτησή σας.

Παρακαλώ μη ζητάτε υποστήριξη στο Twitter. Το Twitter δεν είναι αποδεκτός χώρος για υποστήριξη επειδή: 1) είναι δύσκολο να διατηρήσεις συζητήσεις σε κάτω από 140 χαρακτήρες, και 2) το Twitter δεν είναι ένας χώρος όπου κάποιος με την ίδια ερώτηση με εσάς μπορεί να ψάξει για απάντηση σε προηγούμενη συζήτηση.

Αν έχετε λογαριασμό στο WordPress.org, μπορείτε επίσης να συμμετέχετε στο κανάλι `#cli` του [WordPress.org Slack](https://make.wordpress.org/chat/).

## Επέκταση

Μία **εντολή** είναι μια ατομική μονάδα λειτουργικότητας του WP-CLI. Η `wp plugin install` ([τεκμηρίωση](https://wp-cli.org/commands/plugin/install/)) είναι μία εντολή. Η `wp plugin activate` ([τεκμηρίωση](https://wp-cli.org/commands/plugin/activate/)) είναι μία άλλη.

Το WP-CLI υποστηρίζει την καταχώρηση σαν μία εντολή κάθε κλάσης ή συνάρτησης που μπορεί να καλεστεί. Διαβάζει λεπτομέρειες χρήσης από το PHPdoc. Το `WP_CLI::add_command()` ([τεκμηρίωση](https://wp-cli.org/docs/internal-api/wp-cli-add-command/)) χρησιμοποιείται για εσωτερική καταχώρηση εντολής και καταχώρηση από τρίτους.

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

Το WP-CLI έρχεται με ένα πλήθος από εντολές. Είναι πιο εύκολο απ'ότι φαίνεται να δημιουργήσετε μια εντολή WP-CLI. Διαβάστε το [εγχειρίδιο εντολών](https://wp-cli.org/docs/commands-cookbook/) για να μάθετε περισσότερα. Πλοηγηθείτε στην [τεκμηρίωση εσωτερικού API](https://wp-cli.org/docs/internal-api/) για να ανακαλύψετε μια ποικιλία από χρήσιμες συναρτήσεις που μπορείτε να χρησιμοποιήσετε στη δική σας WP-CLI εντολή.

## Συνεισφορά

Καλώς ήρθατε και ευχαριστούμε!

Εκτιμούμε που παίρνετε την πρωτοβουλία να συνεισφέρετε στο WP-CLI. Οφείλετε σας εσάς και στην κοινότητα γύρω σας το γεγονός ότι το WP-CLI είναι ένα τόσο ωραίο έργο.

**Η συνεισφορά δεν περιορίζεται μόνο σε κώδικα.** Σας ενθαρρύνουμε να συνεισφέρετε με όποιον τρόπο θεωρείτε ότι ταιριάζει στις ικανότητές σας, γράφοντας οδηγούς χρήσης, κάνοντας μια παρουσίαση στην τοπική σας ομάδα, βοηθώντας άλλους χρήστες με τις ερωτήσεις τους, ή αναθεωρώντας την τεκμηρίωσή μας.

Παρακαλούμε αφιερώστε λίγο χρόνο για να [διαβάσετε αυτές τις κατευθηντήριες γραμμές σε βάθος](https://wp-cli.org/docs/contributing/). Ακολουθώντας τις, βοηθάει να επικοινωνηθεί ότι σέβεστε το χρόνο των άλλων ατόμων που συνεισφέρουν στο έργο. Με τη σειρά τους, αυτοί θα κάνουν ότι καλύτερο να ανταποδώσουν αυτόν το σεβασμό όταν θα δουλεύουν μαζί σας, σε διάφες ζώνες ώρας και από όλο τον κόσμο.

## Ομάδα

Η βασική ομάδα του WP-CLI αποτελείται από τα ακόλουθα άτομα:

* [Daniel Bachhuber](https://github.com/danielbachhuber/) - συντήρηση (τώρα)
* [Cristi Burcă](https://github.com/scribu) - συντήρηση (παλαιότερα)
* [Andreas Creten](https://github.com/andreascreten) - ιδρυτής

Διαβάστε περισσότερα σχετικά με τη [διακυβέρνηση](https://wp-cli.org/docs/governance/) του έργου και δείτε την [πλήρη λίστα με τα άτομα που έχουν συνεισφέρει](https://github.com/wp-cli/wp-cli/contributors).

## Ευχαριστίες

Εκτός τις βιβλιοθήκες που ορίζονται στο [composer.json](composer.json), έχουμε χρησιμοποιήσει κώδικα ή ιδέες από τα ακόλουθα έργα:

* [Drush](http://drush.ws/) για... πολλά πράγματα
* [wpshell](http://code.trac.wordpress.org/browser/wpshell) για το `wp shell`
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) για το `wp media regenerate`
* [Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) για το `wp search-replace`
* [WordPress-CLI-Exporter](https://github.com/Automattic/WordPress-CLI-Exporter) για το `wp export`
* [WordPress-CLI-Importer](https://github.com/Automattic/WordPress-CLI-Importer) για το `wp import`
* [wordpress-plugin-tests](https://github.com/benbalter/wordpress-plugin-tests/) για το `wp scaffold plugin-tests`
