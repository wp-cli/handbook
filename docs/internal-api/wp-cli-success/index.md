---
layout: default
title: WP_CLI::success()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::success()

Display success message prefixed with &quot;Success: &quot;.

***

### Usage

    WP_CLI::success( $message )

<div>
<strong>$message</strong> (string) Message to write to STDOUT.<br />
<strong>@return</strong> (null) <br /></p>
</div>


***

### Notes

Success message is written to STDOUT.

Typically recommended to inform user of successful script conclusion.


    # wp rewrite flush expects 'rewrite_rules' option to be set after flush.
    flush_rewrite_rules( \WP_CLI\Utils\get_flag_value( $assoc_args, 'hard' ) );
    if ( ! get_option( 'rewrite_rules' ) ) {
        WP_CLI::warning( "Rewrite rules are empty." );
    } else {
        WP_CLI::success( 'Rewrite rules flushed.' );
    }
    



***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-format-items/">WP_CLI\Utils\format_items()</a></strong> - Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-make-progress-bar/">WP_CLI\Utils\make_progress_bar()</a></strong> - Create a progress bar to display percent completion of a given operation.</li>


<li><strong><a href="/docs/internal-api/wp-cli-line/">WP_CLI::line()</a></strong> - Display informational message without prefix, and ignore `--quiet`.</li>


<li><strong><a href="/docs/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Display informational message without prefix.</li>


<li><strong><a href="/docs/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="/docs/internal-api/wp-cli-warning/">WP_CLI::warning()</a></strong> - Display warning message prefixed with &quot;Warning: &quot;.</li>


<li><strong><a href="/docs/internal-api/wp-cli-error/">WP_CLI::error()</a></strong> - Display error message prefixed with &quot;Error: &quot; and exit script.</li>



</ul>


