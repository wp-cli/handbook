#!/usr/bin/env bash

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

COMPOSER_DIR=$HOME/.composer

# Abort install if wp-cli is already installed via ./utils/dev-build
where=$(which wp)
if [ $? -eq 0 ]; then
	if [ "$COMPOSER_DIR/bin/wp" != "$where" ]; then
		echo "the \`wp\` command is already available elsewhere: $where" 1>&2
		echo "installation aborted" 1>&2
		exit 1
	fi
fi

set -e

# Find a PHP binary
PHP=`find_php`
if [ $? -eq 0 ]; then
	if [ "$PHP" != 'php' ]; then
		echo "using non-default PHP CLI: $php"
	fi
else
	read -p "path to PHP CLI: " PHP
fi

mkdir -p $COMPOSER_DIR
cd $COMPOSER_DIR

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
