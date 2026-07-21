# wp user privacy-request

Manages user privacy requests (GDPR personal data export and erasure).

### EXAMPLES

    # List all privacy requests.
    $ wp user privacy-request list
    +----+-------------------+----------------------+-------------------+--------------------+
    | ID | user_email        | action_name          | status            | created_timestamp  |
    +----+-------------------+----------------------+-------------------+--------------------+
    | 1  | bob@example.com   | export_personal_data | request-pending   | 1713779524         |
    +----+-------------------+----------------------+-------------------+--------------------+

    # Create a new data export request.
    $ wp user privacy-request create bob@example.com export_personal_data
    Success: Created privacy request 1.

    # Erase personal data for request 1.
    $ wp user privacy-request erase 1
    Success: Erased personal data for request 1.

    # Export personal data for request 1.
    $ wp user privacy-request export 1
    Success: Exported personal data to: /var/www/html/wp-content/uploads/wp-personal-data-exports/wp-personal-data-export-bob-example-com-1.zip

    # Mark request 1 as complete.
    $ wp user privacy-request complete 1
    Success: Completed 1 of 1 privacy requests.

    # Delete request 1.
    $ wp user privacy-request delete 1
    Success: Deleted 1 of 1 privacy requests.




