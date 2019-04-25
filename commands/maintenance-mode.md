# wp maintenance-mode

Activates, deactivates or checks the status of the maintenance mode of a site.

### EXAMPLES

    # Activate Maintenance mode.
    $ wp maintenance-mode activate
    Enabling Maintenance mode...
    Success: Activated Maintenance mode.

    # Deactivate Maintenance mode.
    $ wp maintenance-mode deactivate
    Disabling Maintenance mode...
    Success: Deactivated Maintenance mode.

    # Display Maintenance mode status.
    $ wp maintenance-mode status
    Maintenance mode is active.

    # Get Maintenance mode status for scripting purpose.
    $ wp maintenance-mode is-active
    $ echo $?
    1


