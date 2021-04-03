---
layout: documentation
title:  Server Requirements
date:   2020-02-09
order:  1
---

## PHP Requirements

webtrees {{ site.latest_version }} requires PHP 7.3 — 8.0.

webtrees {{ site.latest_version_20 }} requires PHP 7.1 — 7.4.

webtrees {{ site.latest_version_17 }} requires PHP 5.3 — 7.0.
Note that this version of webtrees only supports MySQL, and is
no longer supported.

## Database Requirements

webtrees uses the [Laravel Database](https://laravel.com/docs/8.x/database) component to provide support for these
popular database engines.

* MySQL - version 5.7 or higher
* MariaDB - version 10.3 or higher
* PostgreSQL - version 9.6 or higher
* SQLite - version 3.8.8 or higher
* SQL-Server - 2017 or higher

MySQL/MariaDB is recommended for production servers.
webtrees uses MySQL’s collation features to search and sort names correctly
in different languages.

PostgreSQL and SQL-Server are largely untested, but should work.

SQLite is fine for small sites, but does not scale well with many concurrent users.

## Web-server requirements

You will need approximately 100MB of disk space for webtrees files - plus whatever
is needed for your media and GEDCOM files.

webtrees supports “pretty URLs”, using web-server rewrite rules.
You should not enable this until after the setup is complete.
Otherwise the setup wizard may not be able to detect the base URL.
