---
layout: default
title: WP_CLI::confirm()
description: "Ask for confirmation before running a destructive operation."
---

<small><a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Input</small>

## WP_CLI::confirm()

Ask for confirmation before running a destructive operation.

***

### Usage

    WP_CLI::confirm( $question, $assoc_args = array() )

<div>
<strong>$question</strong> (string) Question to display before the prompt.<br />
<strong>$assoc_args</strong> (array) Skips prompt if 'yes' is provided.<br />
</div>


***

### Notes

If 'y' is provided to the question, the script execution continues. If
'n' or any other response is provided to the question, script exits.


    # `wp db drop` asks for confirmation before dropping the database.
    
    WP_CLI::confirm( "Are you sure you want to drop the database?", $assoc_args );
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-launch-editor-for-input/">WP_CLI\Utils\launch_editor_for_input()</a></strong> - Launch system's $EDITOR for the user to edit some text.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-flag-value/">WP_CLI\Utils\get_flag_value()</a></strong> - Return the flag value or, if it's not set, the $default value.</li>


<li><strong><a href="/docs/internal-api/wp-cli-read-value/">WP_CLI::read_value()</a></strong> - Read a value, from various formats.</li>


<li><strong><a href="/docs/internal-api/wp-cli-get-config/">WP_CLI::get_config()</a></strong> - Get values of global configuration parameters.</li>



</ul>


