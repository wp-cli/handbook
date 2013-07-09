#!/usr/bin/env bash

find_php() {
	read -r -d '' AMP_PATHS <<EOB
/Applications/MAMP/bin/php/*/bin/php
/Applications/xampp/xamppfiles/bin/php
/opt/lampp/bin/php
EOB

	# Special case for *AMP installers, since they normally don't set themselves
	# as the default cli php out of the box.
	for amp_php in $AMP_PATHS; do
		if [[ "$amp_php" == *php5.2* ]]; then
			continue
		fi

		if [ -x $amp_php ]; then
			echo $amp_php
			exit
		fi
	done

	which php || which php-cli || return 1
}

if [ -z "$INSTALL_DIR" ]; then
	INSTALL_DIR=$HOME/.wp-cli
fi

if [ -z "$VERSION" ]; then
	VERSION='@stable'
fi

# Find a PHP binary
if [ -z "$WP_CLI_PHP" ]; then
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

mkdir -p "$INSTALL_DIR"
cd "$INSTALL_DIR"

# install Composer
if [ ! -x composer.phar ]; then
	echo "Installing Composer in $INSTALL_DIR"
	echo "-------------------"
	curl -sS https://getcomposer.org/installer | $WP_CLI_PHP
	if [ $? -gt 0 ]; then
		exit 1
	fi
fi

COMPOSER="$WP_CLI_PHP composer.phar" 

# set up global composer.json file
if [ ! -f composer.json ]; then
	$COMPOSER init --stability dev --no-interaction
	$COMPOSER config bin-dir bin
	$COMPOSER config vendor-dir vendor
fi

command -v bin/wp > /dev/null || {
	echo
	echo "Installing WP-CLI in $INSTALL_DIR"
	echo "-----------------"
	$COMPOSER require --prefer-source wp-cli/wp-cli="$VERSION"
	echo
	echo "WP-CLI files have been succesfully installed."
}

command -v bin/boris > /dev/null || {
	echo
	printf "Trying to install the optional Boris package... "
	$COMPOSER --quiet require --prefer-source 'd11wtq/boris=@stable'
	if [ $? -gt 0 ]; then
		echo "failed."
	else
		echo "done."
	fi
}

cat <<EOB

To test WP-CLI, run:

	$INSTALL_DIR/bin/wp --info

Make sure you have the following line in your .bashrc file:

	# WP-CLI directory
	PATH=$INSTALL_DIR/bin:\$PATH
EOB

if [ "$WP_CLI_PHP" != "$(which php)" ]; then
	cat <<EOB

	export WP_CLI_PHP=$WP_CLI_PHP
EOB
fi
