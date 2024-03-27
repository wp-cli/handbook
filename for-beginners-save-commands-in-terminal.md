# Saving Commands in Terminal

Saving commands can save you time and reduce the likelihood of errors, especially for complex or frequently executed tasks.

### Using Shell Aliases

1. **Open Your Shell Configuration File:**
   Open the configuration file for your shell (e.g., `~/.bashrc` for Bash) using a text editor:

   ```bash
   nano ~/.bashrc
   ```

2. **Create an Alias:**
   Add a new alias to the file. For example, to create an alias for a WordPress CLI update command:

   ```bash
   alias wpupdate='wp core update --path=/path/to/your/wordpress'
   ```

   Save and exit the editor.

3. **Reload Shell Configuration:**
   Reload the shell configuration for the changes to take effect:

   ```bash
   source ~/.bashrc
   ```

4. **Use the Alias:**
   Now you can use your alias like a regular command:

   ```bash
   wpupdate
   ```

### Using Shell Functions

1. **Open Your Shell Configuration File:**
   Open the configuration file for your shell.

2. **Create a Shell Function:**
   Add a new shell function to the file. For example:

   ```bash
   function wpupdate() {
       wp core update --path=/path/to/your/wordpress
   }
   ```

   Save and exit the editor.

3. **Reload Shell Configuration:**
   Reload the shell configuration for the changes to take effect.

4. **Use the Function:**
   Now you can use your shell function:

   ```bash
   wpupdate
   ```