---
layout: post
title:  "webtrees 2.2.6 released"
date:   2026-99-99
sitemap:
priority: 1.0
---

webtrees 2.2.6 is now available for download.

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

A few of these changes have been backported to the 2.1 branch to create webtrees 2.1.27.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.2.5...2.2.6) for details.
