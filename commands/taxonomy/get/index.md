---
layout: default
title: 'wp taxonomy get'
display_global_parameters: true
---

`wp taxonomy get` - Get a taxonomy

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ataxonomy-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy slug

[\--field=&lt;field&gt;]
: Instead of returning the whole taxonomy, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, yaml. Default: table

### EXAMPLES

    $ wp taxonomy get category
    +---------------+---------------------------------------------------+
    | Field         | Value                                             |
    +---------------+---------------------------------------------------+
    | name          | category                                          |
    | label         | Categories                                        |
    | description   |                                                   |
    | object_type   | ["post"]                                          |
    | show_tagcloud | true                                              |
    | hierarchical  | true                                              |
    | public        | true                                              |
    | labels        | {"name":"Categories","singular_name":"Category"," |
    |               | search_items":"Search Categories","popular_items" |
    |               | :null,"all_items":"All Categories","parent_item": |
    |               | "Parent Category","parent_item_colon":"Parent Cat |
    |               | egory:","edit_item":"Edit Category","view_item":" |
    |               | View Category","update_item":"Update Category","a |
    |               | dd_new_item":"Add New Category","new_item_name":" |
    |               | New Category Name","separate_items_with_commas":n |
    |               | ull,"add_or_remove_items":null,"choose_from_most_ |
    |               | used":null,"not_found":"No categories found.","no |
    |               | _terms":"No categories","items_list_navigation":" |
    |               | Categories list navigation","items_list":"Categor |
    |               | ies list","menu_name":"Categories","name_admin_ba |
    |               | r":"category"}                                    |
    | cap           | {"manage_terms":"manage_categories","edit_terms": |
    |               | "manage_categories","delete_terms":"manage_catego |
    |               | ries","assign_terms":"edit_posts"}                |
    +---------------+---------------------------------------------------+

    $ wp taxonomy get post_tag --field=cap
    {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}



