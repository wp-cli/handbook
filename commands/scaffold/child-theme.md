# wp scaffold child-theme

Generate child theme based on an existing theme.

Creates a child theme folder with `functions.php` and `style.css` files.

### OPTIONS

&lt;slug&gt;
: The slug for the new child theme.

\--parent_theme=&lt;slug&gt;
: What to put in the 'Template:' header in 'style.css'.

[\--theme_name=&lt;title&gt;]
: What to put in the 'Theme Name:' header in 'style.css'.

[\--author=&lt;full-name&gt;]
: What to put in the 'Author:' header in 'style.css'.

[\--author_uri=&lt;uri&gt;]
: What to put in the 'Author URI:' header in 'style.css'.

[\--theme_uri=&lt;uri&gt;]
: What to put in the 'Theme URI:' header in 'style.css'.

[\--activate]
: Activate the newly created child theme.

[\--enable-network]
: Enable the newly created child theme for the entire network.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a 'sample-theme' child theme based on TwentySixteen
    $ wp scaffold child-theme sample-theme --parent_theme=twentysixteen
    Success: Created '/var/www/example.com/public_html/wp-content/themes/sample-theme'.


