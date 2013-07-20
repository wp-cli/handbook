---
layout: default
title: 'wp core init-tests'
---

`wp core init-tests` - Set up the official test suite using the current WordPress instance.

### OPTIONS

	<path>
			The directory in which to download the testing suite files. (Optional)

	--dbname=<dbname>
			Set the database name. **WARNING**: The database will be whipped every time
you run the tests.

	--dbuser=<dbuser>
			Set the database user.

	--dbpass=<dbpass>
			Set the database user password.

### EXAMPLE

	wp core init-tests ~/svn/wp-tests --dbname=wp_test --dbuser=wp_test


