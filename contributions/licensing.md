# Licensing

WP-CLI is licensed under the [MIT license](https://github.com/wp-cli/wp-cli/blob/master/LICENSE). This document outlines WP-CLI's licensing expectations for third-party code.

## Accepting third-party code into the official repository/organization

All code accepted into repositories under the official [WP-CLI GitHub organization](https://github.com/wp-cli) must be compatible with the MIT license. This ensures that WP-CLI can remain freely usable, modifiable, and distributable by anyone.

## Bundling third-party code

When bundling third-party code directly into a WP-CLI package (i.e., copying code into the repository rather than declaring it as a dependency), the code must:

1. **Be licensed under an MIT-compatible license**
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
3. Use `composer show -t` to view the dependency tree with license information, or install additional tools like `composer/satis` to run `composer licenses` for detailed license auditing

## Why these requirements?

These licensing requirements ensure that:

1. **WP-CLI remains free and open** - Users can use, modify, and distribute WP-CLI without legal concerns
2. **Commercial use is permitted** - Companies can use and integrate WP-CLI into their products
3. **No license conflicts** - All code in the WP-CLI ecosystem is legally compatible
4. **Simplicity for users** - Users don't need to track multiple license requirements

## Questions?

If you have questions about licensing or need clarification on whether a specific license is compatible, please open an issue or contact the [WP-CLI maintainers](https://github.com/orgs/wp-cli/teams/maintainers).
