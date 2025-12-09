# How to put the site in maintenance mode

WP-CLI offers a command to enable, disable maintenance mode and check if maintenance mode is
enabled or not.

### Step 1 - Check the status

```
    $ wp maintenance-mode status
    Maintenance mode is not active.
```

### Step 2 - Enable maintenance mode

```
    $ wp maintenance-mode activate
    Enabling Maintenance mode...
    Success: Activated Maintenance mode.
```

### Step 3 - Disable maintenance mode

```
    $ wp maintenance-mode deactivate
    Disabling Maintenance mode...
    Success: Deactivated Maintenance mode.
```
