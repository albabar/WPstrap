## WordPress BootStrap (WPstrap)
An WordPress boilerplate for initializing new WP projects.

###Nice URL with builtin PHP server
Now supports Nice URL with builtin PHP server. No need to have a real web server for development. Which makes it more portable.
Start server:
```bash
sh serve.sh
```

###Multiple Environment Support
It's a pain with WordPress and Version control systems to sync the database credentials based on different environments. Now this package supports multiple environments. Just create a php file with `env.` suffix inside configs folder and WordPress will pick the ENV. Like if you create a file called `env.local.php` WP will automatically pick `local` environment and will use the database credentials from this file. To have a staging ENV create a file called `env.staging.php`. **This folder should have only one `env.` prefixed file.**

A sample file (`sample.env.php`) already has been included as a template for the env files.

###Linear and cleaner folder structure.
We have now three folders, two of the are `WordPress` and `content`. `WordPress` directory contains the core WP files. These files supposed to be never touched except WordPress update.
The `content` folder will hold all our custom codes like themes and plugins.


Feel free to tweak the files to fit your need. Suggestions are welcome.

####Contact Me
You can follow me on [Twitter (@iBabar)](https://twitter.com/iBabar). I'm also available via my [blog](http://www.babar.im/blog).
See ya!
