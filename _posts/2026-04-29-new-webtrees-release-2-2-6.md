---
layout: post
title:  "webtrees 2.2.6 released"
date:   2026-04-29
sitemap:
priority: 1.0
---

webtrees 2.2.6 is now available for download.

It includes fixes for a number of security issues.
Credit to Boris Unckel for reporting these.

The major changes are listed below

* Ensure CLI commands only run from the CLI
* Increase the number of generations available in charts
* The hideshowpassword plugin is abandoned and has been replaced
* Fix double HTTP request when logging out
* Loading indicators now fade in after a second to avoid flashing for fast requests
* Configurable delay for slide show images
* Add error handling for modules that fail to boot
* Update list of bad robots
* HEAD:SUBM missing from GEDCOM export when privacy filters are disabled
* Fix CLI tools cannot access private trees
* Improve searching for Arabic text with diacritics
* Performance - lazy-load privacy restrictions
* Performance - remove unnecessary SQL queries for null users
* Build .ZIP archives on disk instead of in memory to allow larger exports
* Don't compress media files in .ZIP exports to improve performance
* Fix Postgres compatibility for media types
* Fix Markdown in notes in reports breaks formatting 
* Add SQL debug logging for developers
* Add watermarks to images in reports
* Fix name overflow in pedigree reports
* Show progress while deleting data when importing large trees
* Improve styling of the loading indicator
* Minimal theme now supports dark-mode
* Nicer colours for timeline charts
* Fix some webhosts use modified phpinfo()
* Fix compatibility issues with SQL-Server, PostgreSQL and Firebird
* Fix fatal errors if lifespan-chart contains no dates
* GEDCOM import now shows progress when deleting old data
* Update .htaccess for apache 2.4

See the [change log](https://github.com/fisharebest/webtrees/compare/2.2.5...2.2.6) for details.
