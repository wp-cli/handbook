---
layout: default
title: WP_CLI::get_config()
description: "Get values of global configuration parameters."
---

<a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Input

## WP_CLI::get_config()

Get values of global configuration parameters.

***

### Usage

    WP_CLI::get_config( $key = null )

<div>
<strong>$key</strong> (string) Get value for a specific global configuration parameter.<br />
<strong>@return</strong> (mixed) <br />
</div>


***

### Notes

Provides access to `--path=<path>`, `--url=<url>`, and other values of
the [global configuration parameters](https://wp-cli.org/config/).


    WP_CLI::log( 'The --url=<url> value is: ' . WP_CLI::get_config( 'url' ) );
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-launch-editor-for-input/">WP_CLI\Utils\launch_editor_for_input()</a></strong> - Launch system's $EDITOR for the user to edit some text.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-flag-value/">WP_CLI\Utils\get_flag_value()</a></strong> - Return the flag value or, if it's not set, the $default value.</li>


<li><strong><a href="/docs/internal-api/wp-cli-confirm/">WP_CLI::confirm()</a></strong> - Ask for confirmation before running a destructive operation.</li>


<li><strong><a href="/docs/internal-api/wp-cli-read-value/">WP_CLI::read_value()</a></strong> - Read a value, from various formats.</li>



</ul>


