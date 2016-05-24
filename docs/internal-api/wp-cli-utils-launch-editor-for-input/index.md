---
layout: default
title: WP_CLI\Utils\launch_editor_for_input()
description: "Launch system's $EDITOR for the user to edit some text."
---

<a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Input

## WP_CLI\Utils\launch_editor_for_input()

Launch system's $EDITOR for the user to edit some text.

***

### Usage

    WP_CLI\Utils\launch_editor_for_input( $input, $filename = WP-CLI )

<div>
<strong>string</strong> () $content  Some form of text to edit (e.g. post content)<br />
<strong>@return</strong> (string|bool) text, if file is saved from editor; false, if no change to file.<br /></p>
</div>


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-get-flag-value/">WP_CLI\Utils\get_flag_value()</a></strong> - Return the flag value or, if it's not set, the $default value.</li>


<li><strong><a href="/docs/internal-api/wp-cli-confirm/">WP_CLI::confirm()</a></strong> - Ask for confirmation before running a destructive operation.</li>


<li><strong><a href="/docs/internal-api/wp-cli-read-value/">WP_CLI::read_value()</a></strong> - Read a value, from various formats.</li>



</ul>


