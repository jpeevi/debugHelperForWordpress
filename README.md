# Debug Helper For WordPress

**Debug Helper For WordPress** is a plugin designed to aid developers.
## Requirements

- PHP 8.0 or higher
- WordPress 5.6 or higher
- `WP_DEBUG` must be set to `true` in `wp-config.php`

## Features

- **Dump Methods:**
    - `dump(mixed $variable, bool $dumpType = false, bool $prettyPrint = false): void` — Prints the variable along with its type and allows for pretty-printing.
    - `dumpAndDie(mixed $variable, bool $dumpType = false, bool $prettyPrint = false): void` — Prints the variable, its type, and halts execution, with an option for pretty-printing.
- **Extensible:** Ongoing addition of important debugging tools to assist developers.

## Installation

1. Download the plugin.
2. Upload it to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

To use this plugin, ensure that `WP_DEBUG` is set to `true` in `wp-config.php`.

```
$array = [1,2,3];

dumpAndDie(
  variable:$array,
  dumpType: true,
  prettyPrint: true
);
```
