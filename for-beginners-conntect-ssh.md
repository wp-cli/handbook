# SSH Setup for WordPress CLI

This quick start guide will walk you through the process of setting up SSH for the WordPress CLI (WP-CLI) on your server. Using SSH authentication with WP-CLI allows you to securely manage your WordPress installations from the command line.

## Prerequisites

- **WordPress:** Ensure you have a WordPress installation on your server.
- **WP-CLI:** Follow the installation steps from the [WP-CLI Quick Start Guide](#wordpress-cli-wp-cli-quick-start-guide).

## SSH Key Generation

1. **Generate SSH Key Pair:**
   If you don't have an SSH key pair, generate one using the following command:

   ```bash
   ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
   ```

   Follow the prompts to set a location for the key pair (press Enter for the default), and set a passphrase for added security.

2. **Start SSH Agent:**
   Start the SSH agent to manage your keys:

   ```bash
   eval "$(ssh-agent -s)"
   ```

3. **Add SSH Private Key:**
   Add your SSH private key to the SSH agent:

   ```bash
   ssh-add ~/.ssh/id_rsa
   ```

   If you used a different file name for your key pair, replace `id_rsa` with the actual file name.

## WordPress SSH Configuration

1. **Edit `wp-config.php`:**
   Open the `wp-config.php` file of your WordPress installation:

   ```bash
   nano /path/to/your/wordpress/wp-config.php
   ```

2. **Add SSH Configurations:**
   Add the following lines to the `wp-config.php` file, replacing the placeholders with your actual SSH key file paths:

   ```php
   define('FS_METHOD', 'ssh2');
   define('FTP_PUBKEY', '/path/to/your/.ssh/id_rsa.pub');
   define('FTP_PRIKEY', '/path/to/your/.ssh/id_rsa');
   define('FTP_USER', 'your-ssh-username');
   define('FTP_HOST', 'your-server-hostname-or-ip');
   ```

   Save and exit the editor.

## Testing SSH Connection

1. **Test Connection:**
   Test the SSH connection to your server using the following command:

   ```bash
   ssh -T your-ssh-username@your-server-hostname-or-ip
   ```

   Replace `your-ssh-username` and `your-server-hostname-or-ip` with your actual SSH username and server details.

   If prompted, type "yes" to add the server to your list of known hosts.

2. **Verify WP-CLI Connection:**
   Confirm that WP-CLI is configured to use SSH:

   ```bash
   wp core check-update
   ```

   If everything is set up correctly, this command should check for available WordPress updates.

Congratulations! You have successfully set up SSH for the WordPress CLI. You can now securely manage your WordPress installations using WP-CLI from the command line.