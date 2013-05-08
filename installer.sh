#!/usr/bin/env sh

set -e

# check that PHP is available
command -v php > /dev/null || {
	echo "can't find PHP binary" >&2
	exit 1
}

mkdir -p ~/.composer
cd ~/.composer

# install Composer
if [ ! -x composer.phar ]; then
	curl -sS https://getcomposer.org/installer | php
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

COMPOSER="php composer.phar"

# install wp-cli
$COMPOSER require wp-cli/wp-cli=dev-master

# try installing Boris
$COMPOSER require d11wtq/boris=dev-master || true

cat <<EOB

WP-CLI files have been succesfully installed.

To test, run:

	~/.composer/bin/wp --info
EOB
