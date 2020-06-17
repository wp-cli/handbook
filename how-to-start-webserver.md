# How to start the webserver

You can use the command `wp server` to launches PHP's built-in web server for a specific WordPress installation. By default, the webserver will start using the localhost and default port 8080 but, you can change them using the `--host` and `--port` options.

### Step 1 - Start the web server using the default settings

```
    $ wp server
    PHP 7.2.24-0ubuntu0.18.04.4 Development Server started at Thu Jun  4 17:40:13 2020
    Listening on http://localhost:8080
    Document root is ../wpdemo.test
    Press Ctrl-C to quit.
```

The command above starts the server using the default settings. We can now open our browser
and visit the link http://localhost:8080 to access our WordPress installation.

### Step 2 - Start the web server using different settings

If you want to specify a different port number or host, you can pass them to the following flags:
`--port` and `--host`

```
    $ wp server --port=9090 --host=192.168.0.4
```

The command above will start the webserver and listen for requests on http://192.168.0.4:9090
you can open the browser and visit the page to access your WordPress installation.
