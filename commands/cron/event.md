# wp cron event

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acron-event+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage WP-Cron events.

### EXAMPLES

    # Schedule a new cron event
    $ wp cron event schedule cron_test
    Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:19:16 GMT.

    # Run all cron events due right now
    $ wp cron event run --due-now
    Success: Executed a total of 2 cron events.

    # Delete the next scheduled cron event
    $ wp cron event delete cron_test
    Success: Deleted 2 instances of the cron event 'cron_test'.

    # List scheduled cron events in JSON
    $ wp cron event list --fields=hook,next_run --format=json
    [{"hook":"wp_version_check","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_plugins","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_themes","next_run":"2016-05-31 10:15:14"}]





### SUBCOMMANDS

<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cron/event/delete/">delete</a></td>
			<td>Delete the next scheduled cron event for the given hook.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cron/event/list/">list</a></td>
			<td>List scheduled cron events.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cron/event/run/">run</a></td>
			<td>Run the next scheduled cron event for the given hook.</td>
		</tr>
		<tr>
			<td><a href="https://developer.wordpress.org/cli/commands/cron/event/schedule/">schedule</a></td>
			<td>Schedule a new cron event.</td>
		</tr>
	</tbody>
</table>
