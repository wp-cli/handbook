# Default doctor diagnostic checks

Although it's power comes from its [ability to be customized](https://make.wordpress.org/cli/handbook/doctor-customize-config/), `wp doctor` includes a number of default diagnostic checks considered to be recommendations for production websites.

Use `wp doctor list` to view these default checks:

<table>

<thead>

<tr>

<th>name</th>

<th>description</th>

</tr>

</thead>

<tbody>

<tr>

<td>autoload-options-size</td>

<td>Warns when autoloaded options size exceeds threshold of 900 kb.</td>

</tr>

<tr>

<td>constant-savequeries-falsy</td>

<td>Confirms expected state of the SAVEQUERIES constant.</td>

</tr>

<tr>

<td>constant-wp-debug-falsy</td>

<td>Confirms expected state of the WP_DEBUG constant.</td>

</tr>

<tr>

<td>core-update</td>

<td>Errors when new WordPress minor release is available; warns for major release.</td>

</tr>

<tr>

<td>core-verify-checksums</td>

<td>Verifies WordPress files against published checksums; errors on failure.</td>

</tr>

<tr>

<td>cron-count</td>

<td>Errors when there's an excess of 50 total cron jobs registered.</td>

</tr>

<tr>

<td>cron-duplicates</td>

<td>Errors when there's an excess of 10 duplicate cron jobs registered.</td>

</tr>

<tr>

<td>file-eval</td>

<td>Checks files on the filesystem for regex pattern `eval\(.*base64_decode\(.*`.</td>

</tr>

<tr>

<td>option-blog-public</td>

<td>Confirms the expected value of the 'blog_public' option.</td>

</tr>

<tr>

<td>plugin-active-count</td>

<td>Warns when there are greater than 80 plugins activated.</td>

</tr>

<tr>

<td>plugin-deactivated</td>

<td>Warns when greater than 40% of plugins are deactivated.</td>

</tr>

<tr>

<td>plugin-update</td>

<td>Warns when there are plugin updates available.</td>

</tr>

<tr>

<td>theme-update</td>

<td>Warns when there are theme updates available.</td>

</tr>

</tbody>

</table>

To explain these further:

*   Autoloaded options are options that are automatically loaded in every request to WordPress. A size exceeding the recommended threshold could be a symptom of a larger problem.
*   Because `SAVEQUERIES` causes WordPress to save a backtrace for every SQL query, which is an expensive operation, using `SAVEQUERIES` in production is discouraged.
*   WordPress minor versions are typically security releases that should be applied immediately.

If you [create a custom `doctor.yml` config file](https://make.wordpress.org/cli/handbook/doctor-customize-config/), you can use `wp doctor list --config=<file>` to view the diagnostic checks listed in the file.
