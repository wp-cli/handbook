---
layout: doc
title: Documentation Standards
description: Documentation Standards for WP-CLI commands.
category: References
---

We have set some Documentation Standards for WP-CLI commands.

## Examples

### Subcommand

* Blank line should be there before and after for each example.
* Each example should have 3 parts.
    - Description
        + Must start with `#` and a space.
        + Sentence should start with capital letter
        + Comment must end in full-stops, exclamation marks, or question marks.
        + Eg: `# Create database.`
    - Command
        + Must start with `$` and a space. Eg: `$ wp db create`
    - Sample Output
        + Keep exact output. Note spaces and indentation in the output. Exception: If output is very long, it could be truncated to show suitable section only.
        + Eg: `Success: Database created.`
* If possible, keep at least two examples for each command. One showing basic use and another advanced use. More use cases the better.

### Class

* Class could have multiple examples. They must follow all standard regarding examples.
* Only one blank line should be there between examples.

## Command Message

* Message must start with capital letter.
    - Exception: When message starts with special key and is wrapped with quotes. Eg - `'movie' is not registered post type.`
* If single line message, it must end with `.`.
    - Exception: There should be no trailing character in the end when colon `:` is used like this. `Invalid ID: 123`
    - Exception: Message to display in progress bar can omit trailing period. Eg - `Generating comments`
* Filenames and folder names must be wrapped with quotes ( `'` ).
* Roles, sidebar ID, post type key, taxonomy key must be wrapped with quotes.
* Message in the context of ongoing action could end with `...`. Eg - `Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.23.1/wp-cli-0.23.1.phar...`

## Command parameter description

If there is a set of allowed values for a command parameter, we have set special format (mostly similar to YAML) for default value and available options.

```
[--format=<format>]
: Render output in a particular format.
---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
---
```

* Section starts with `---` in the separate line next to the param description.
* In the next line keep default value with `default: value`.
* For options, start with `options:` in the following line.
* Keep value in the following pattern: 2 space, `-`, 1 space, value
* Close section with `---`.
