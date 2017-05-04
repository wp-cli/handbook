# wp cron test

Test the WP Cron spawning system and report back its status.

This command tests the spawning system by performing the following steps:

* Checks to see if the `DISABLE_WP_CRON` constant is set; errors if true
because WP-Cron is disabled.
* Checks to see if the `ALTERNATE_WP_CRON` constant is set; warns if true.
* Attempts to spawn WP-Cron over HTTP; warns if non 200 response code is
returned.

### EXAMPLES

    # Cron test runs successfully.
    $ wp cron test
    Success: WP-Cron spawning is working as expected.


