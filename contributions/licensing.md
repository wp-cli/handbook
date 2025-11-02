# Licensing

WP-CLI is licensed under the [MIT license](https://github.com/wp-cli/wp-cli/blob/master/LICENSE). This document outlines WP-CLI's licensing expectations for third-party code.

## Accepting third-party code into the official repository/organization

All code accepted into repositories under the official [WP-CLI GitHub organization](https://github.com/wp-cli) must be compatible with the MIT license. This ensures that WP-CLI can remain freely usable, modifiable, and distributable by anyone.

### Compatible licenses

The following licenses are compatible with MIT and are acceptable for contributions:

* **MIT License** - Preferred, as it matches WP-CLI's license
* **BSD licenses** (2-Clause, 3-Clause) - Compatible permissive licenses
* **Apache License 2.0** - Compatible permissive license
* **ISC License** - Compatible permissive license
* **Public Domain / CC0** - No restrictions on use
* **WTFPL** - Permissive "do what you want" license

### Incompatible licenses

The following license types are **not** compatible with MIT and cannot be accepted:

* **GPL-only licenses** (GPL v2-only, GPL v3-only) - These licenses require derivative works to also be under GPL, which conflicts with MIT's permissive nature
* **Copyleft licenses without permissive exceptions** - Licenses that require derivative works to use the same license
* **Proprietary licenses** - Code that restricts modification or redistribution
* **Non-commercial licenses** - Any license that restricts commercial use

**Important**: While MIT-licensed code *can* be included in GPL projects (like WordPress plugins), GPL code *cannot* be included in MIT-licensed projects like WP-CLI. The compatibility is one-way.

## Bundling third-party code

When bundling third-party code directly into a WP-CLI package (i.e., copying code into the repository rather than declaring it as a dependency), the code must:

1. **Be licensed under an MIT-compatible license** - See the compatible licenses list above
2. **Include the original license file or header** - The third-party code's license terms must be preserved
3. **Maintain copyright notices** - Original copyright notices must remain intact
4. **Be clearly identified** - It should be clear which code is third-party and where it came from

When in doubt about whether to bundle third-party code, consider using it as a dependency through Composer instead.

## Depending on third-party code

Third-party packages declared as dependencies (through Composer or other package managers) must be licensed under MIT-compatible licenses. This applies to both:

* **Direct dependencies** - Packages explicitly listed in `composer.json`
* **Transitive dependencies** - Dependencies of your dependencies

### Checking dependency licenses

Before adding a new dependency:

1. Check the dependency's `LICENSE` file or `composer.json` for license information
2. Verify that all of the dependency's own dependencies are also compatible
3. Use tools like `composer licenses` to audit the full dependency tree

### Dependency license best practices

* **Prefer MIT or other permissive licenses** - These have the fewest restrictions
* **Document major dependencies** - Note any dependencies with licenses other than MIT in your package's README
* **Stay up-to-date** - Dependency licenses can change between versions, so review licenses when updating dependencies
* **When in doubt, ask** - Reach out to [WP-CLI maintainers](https://github.com/orgs/wp-cli/teams/maintainers) if you're unsure about a license

## Why these requirements?

These licensing requirements ensure that:

1. **WP-CLI remains free and open** - Users can use, modify, and distribute WP-CLI without legal concerns
2. **Commercial use is permitted** - Companies can use and integrate WP-CLI into their products
3. **No license conflicts** - All code in the WP-CLI ecosystem is legally compatible
4. **Simplicity for users** - Users don't need to track multiple license requirements

## Questions?

If you have questions about licensing or need clarification on whether a specific license is compatible, please open an issue or contact the [WP-CLI maintainers](https://github.com/orgs/wp-cli/teams/maintainers).
