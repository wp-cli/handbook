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

	which php || which php-cli || return 1
}

if [ -z $INSTALL_DIR ]; then
	INSTALL_DIR=$HOME/.composer
fi

if [ -z $VERSION ]; then
	VERSION='dev-master'
fi

# Abort install if wp-cli is already installed via ./utils/dev-build
where=$(which wp 2>/dev/null)
if [ $? -eq 0 ]; then
	if [ "$INSTALL_DIR/bin/wp" != "$where" ]; then
		echo "warning: the \`wp\` command is already available elsewhere: $where" 1>&2
		read -p "this installation will not overwrite it. continue? [y/n] " -n 1 -r
		echo
		if [[ ! $REPLY =~ ^[Yy]$ ]]
		then
			exit 1
		fi
	fi
fi

# Find a PHP binary
if [ -z $WP_CLI_PHP ]; then
	WP_CLI_PHP=`find_php`
	if [ $? -gt 0 ]; then
		read -p "path to PHP binary: " WP_CLI_PHP
	fi
else
	command -v $WP_CLI_PHP > /dev/null || {
		echo "invalid PHP binary: $WP_CLI_PHP" 1>&2
		exit 1
	}
fi

mkdir -p $INSTALL_DIR
cd $INSTALL_DIR

# install Composer
if [ ! -x composer.phar ]; then
	curl -sS https://getcomposer.org/installer | $WP_CLI_PHP
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

COMPOSER="$WP_CLI_PHP composer.phar" 

command -v bin/wp > /dev/null || {
	echo
	echo "Installing the main WP-CLI package..."
	echo "-------------------------------------"
	$COMPOSER require wp-cli/wp-cli="$VERSION"
}

command -v bin/boris > /dev/null || {
	echo
	echo "Installing the Boris package..."
	echo "-------------------------------"
	$COMPOSER --no-ansi require d11wtq/boris=dev-master || true
}

cat <<EOB

WP-CLI files have been succesfully installed.

To test, run:

	$INSTALL_DIR/bin/wp --info

EOB

if [ "$WP_CLI_PHP" != "$(which php)" ]; then
	echo "using non-default PHP binary: $WP_CLI_PHP"
fi
