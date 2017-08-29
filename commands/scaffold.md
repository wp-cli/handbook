# wp scaffold

Generates unit tests, child and \_s themes, registers CPTs and taxonomies.

See references for [Automated Testing](https://make.wordpress.org/core/handbook/testing/automated-testing/), [Theme Unit Test](https://codex.wordpress.org/Theme_Unit_Test), [Plugin Unit Tests](https://make.wordpress.org/cli/handbook/plugin-unit-tests/), [child themes](https://codex.wordpress.org/Child_Themes), the [Underscores starter theme](https://underscores.me/), [custom post types](https://developer.wordpress.org/plugins/post-types/), and [custom taxonomies](https://developer.wordpress.org/plugins/taxonomies/working-with-custom-taxonomies/).

### Examples

    # Generate a new plugin with unit tests
    $ wp scaffold plugin sample-plugin
    Success: Created plugin files.
    Success: Created test files.

    # Generate theme based on _s
    $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
    Success: Created theme 'Sample Theme'.

    # Generate code for post type registration in given theme
    $ wp scaffold post-type movie --label=Movie --theme=simple-life
    Success: Created /var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php
