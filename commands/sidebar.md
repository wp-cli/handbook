# wp sidebar

Lists registered sidebars in WordPress.

## Description

A [sidebar](https://developer.wordpress.org/themes/functionality/sidebars/) is any widgetized area of your theme where widgets can be placed and displayed. Sidebars are typically used for features like:

- Navigation menus
- Recent posts widgets
- Category listings
- Search boxes
- Custom content areas
- Footer content regions

The `wp sidebar` command provides tools to inspect, manage, and query the sidebars registered in your WordPress installation, whether they are active or inactive.

## Subcommands

### wp sidebar list

Lists all registered sidebars on your site.

#### Options

| Option | Description | Type | Default |
|--------|-------------|------|---------|
| `--fields` | Limit the output to specific fields (e.g., `name,id,description`) | string | all |
| `--format` | Render output in a specific format (`table`, `csv`, `json`, `count`) | string | table |
| `--exclude-inactive` | Exclude inactive sidebar areas | boolean | false |
| `--search` | Search sidebars by name | string | none |

#### Common Fields

- **name**: The human-readable name of the sidebar
- **id**: The unique identifier for the sidebar
- **description**: A brief description of the sidebar
- **class**: CSS class assigned to the sidebar
- **before_widget**: HTML markup before each widget in the sidebar
- **after_widget**: HTML markup after each widget in the sidebar
- **before_title**: HTML markup before widget titles
- **after_title**: HTML markup after widget titles

## Examples

### List all sidebars with name and ID

```bash
$ wp sidebar list --fields=name,id
+-----------------+-----------------+
| name            | id              |
+-----------------+-----------------+
| Widget Area     | sidebar-1       |
| Inactive Widgets| wp_inactive_widgets |
+-----------------+-----------------+
```

### Export sidebars as CSV

```bash
$ wp sidebar list --fields=name,id --format=csv
name,id
"Widget Area",sidebar-1
"Inactive Widgets",wp_inactive_widgets
```

### Export sidebars as JSON

```bash
$ wp sidebar list --format=json
[
  {
    "name": "Widget Area",
    "id": "sidebar-1",
    "description": "Main sidebar area",
    "class": "widget-area"
  },
  {
    "name": "Inactive Widgets",
    "id": "wp_inactive_widgets",
    "description": "",
    "class": ""
  }
]
```

### Count total sidebars

```bash
$ wp sidebar list --format=count
2
```

### Display sidebars with descriptions

```bash
$ wp sidebar list --fields=name,description
+--------------------+--------------------------------------+
| name               | description                          |
+--------------------+--------------------------------------+
| Primary Sidebar    | Main sidebar in the page layout      |
| Footer Widgets     | Footer widget area (4 columns)       |
| Inactive Widgets   | Area for unused widgets              |
+--------------------+--------------------------------------+
```

### List sidebars excluding inactive ones

```bash
$ wp sidebar list --fields=name,id --exclude-inactive
+------------------+----------+
| name             | id       |
+------------------+----------+
| Primary Sidebar  | sidebar-1|
| Footer Widgets   | footer-1 |
+------------------+----------+
```

### Search for a specific sidebar

```bash
$ wp sidebar list --search=Footer --fields=name,id
+-----------------+---------+
| name            | id      |
+-----------------+---------+
| Footer Widgets  | footer-1|
+-----------------+---------+
```

### Get sidebar information with HTML markup

```bash
$ wp sidebar list --fields=name,id,before_widget,after_widget --format=json
[
  {
    "name": "Widget Area",
    "id": "sidebar-1",
    "before_widget": "<div id=\"%1$s\" class=\"widget %2$s\">",
    "after_widget": "</div>"
  }
]
```

## Common Use Cases

### Export sidebar structure for backup or documentation

```bash
wp sidebar list --format=json > sidebars_backup.json
```

### Verify sidebar registration in a theme

```bash
wp sidebar list --fields=name,id
```

### Automate widget area setup scripts

```bash
wp sidebar list --format=csv | tail -n +2 | while IFS=',' read -r name id; do
  echo "Processing sidebar: $name ($id)"
done
```

### Integration with other commands

```bash
# List only active sidebars and count them
wp sidebar list --exclude-inactive --format=count
```

## Tips & Best Practices

1. **Use `--format=json`** for programmatic access and scripting
2. **Combine with `--fields`** to reduce output noise and focus on needed information
3. **Verify sidebars exist** before registering widgets with them in custom scripts
4. **Use `--search`** to quickly locate specific sidebars in theme with many registered areas
5. **Export as CSV** for spreadsheet analysis or documentation purposes

## Resources

- [WordPress Sidebars Documentation](https://developer.wordpress.org/themes/functionality/sidebars/)

## Notes

- The `wp_inactive_widgets` sidebar is a special WordPress sidebar where widgets can be placed but won't be displayed on the site
- Sidebar IDs must be unique within a WordPress installation
- Sidebars are typically registered in theme `functions.php` files using `register_sidebar()`
- Different themes may have different sidebar configurations