#!/bin/bash

# Installs the 4 non-bundled packages in `bin/packages`. To be run before using the `wp handbook` commands.

WP_CLI_PACKAGES_DIR=bin/packages WP_CLI_CONFIG_PATH=/dev/null wp package install wp-cli/admin-command
WP_CLI_PACKAGES_DIR=bin/packages WP_CLI_CONFIG_PATH=/dev/null wp package install wp-cli/find-command
WP_CLI_PACKAGES_DIR=bin/packages WP_CLI_CONFIG_PATH=/dev/null wp package install wp-cli/profile-command
WP_CLI_PACKAGES_DIR=bin/packages WP_CLI_CONFIG_PATH=/dev/null wp package install wp-cli/dist-archive-command
