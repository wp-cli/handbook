#!/usr/bin/env sh

set -e

find_php() {
	AMP_PATHS=<<EOB
/Applications/MAMP/bin/php/php5.3*/bin/php
/Applications/MAMP/bin/php5*/bin/php
/Applications/MAMP/bin/php/php5.[34]*/bin/php
/Applications/xampp/xamppfiles/bin/php;
/opt/lampp/bin/php
EOB

	# Special case for *AMP installers, since they normally don't set themselves
	# as the default cli php out of the box.
	for amp_php in $AMP_PATHS; do
		if [ -x $amp_php ]; then
			echo $amp_php
			exit
		fi
	done

	for cmd in php php-cli; do
		command -v $cmd > /dev/null && {
			echo $cmd
			exit
		}
	done

	exit 1
}

# Find a PHP binary
PHP=`find_php`
if [ $? -eq 0 ]; then
	if [ "$PHP" != 'php' ]; then
		echo "using non-default PHP CLI: $php"
	fi
else
	read -p "path to PHP CLI: " PHP
fi

mkdir -p ~/.composer
cd ~/.composer

# install Composer
if [ ! -x composer.phar ]; then
	curl -sS https://getcomposer.org/installer | $PHP
fi

# set up global composer.json file
if [ ! -f composer.json ]; then
	cat > composer.json <<EOB
{
	"minimum-stability": "dev",
	"config": {
		"vendor-dir": "vendor",
		"bin-dir": "bin"
	},
	"require": {
	}
}
EOB
fi

COMPOSER="$PHP composer.phar"

# install wp-cli
$COMPOSER require wp-cli/wp-cli=dev-master

# try installing Boris
$COMPOSER require d11wtq/boris=dev-master || true

cat <<EOB

WP-CLI files have been succesfully installed.

To test, run:

	~/.composer/bin/wp --info
EOB
