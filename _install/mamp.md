---
layout: documentation
title:  MAMP
date:   2020-02-09
order:  99
---

[MAMP](MAMP) is a package for Apple computers that allows you
to run web-server software on your local computer.
It contains everything you need to run webtrees.
It works well for local testing and development - or if you only
need an offline/standalone version of webtrees.

The "document root" (the folder where you install webtrees) is usually
`/Applications/MAMP/htdocs`, but you can change it in the MAMP control panel.
The URL for this folder will be `http://localhost:8888`.

You should copy webtrees to this folder.  Many people install to a
sub-folder, such as `/Applications/MAMP/htdocs/webtrees`.
This will have the URL `http://localhost:8888/webtrees`.
This allows you to have several instances of webtrees (or other
applications) installed at the same time.

During setup, you will be asked for your MySQL details.

* Server name - `127.0.0.1`
* Port number - `8889`
* Database user account - `root`
* Database password - `root`
* Database name - Choose a unique name for your database.
webtrees will create it if it does not exist.
`webtrees` would be a good choice for your first database.
* Table prefix - This is needed when you install multiple applications in one database.
Since MAMP allows you to create multiple databases, you should use the default `wt_`.

[MAMP]: https://www.mamp.info
