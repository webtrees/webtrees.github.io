---
layout: post
title:  "webtrees 2.2.5 released"
date:   2026-01-13
sitemap:
priority: 1.0
---

webtrees 2.2.5 is now available for download.

The major fixes are listed below

* Add support for PHP 8.6
* Don't show BURI in chartbox when DEAT is present
* Fix: Interactive table features don't work without pretty urls
* Show names of linked records in pending changes log
* Count individuals (not dates) in statistics
* When adding a child to a family, put it between older and younger children
* Improved support for Legacy GEDCOM dialect
* Bypassing forms with CAPTCHA caused session error.
* Include combining diacritics from non-latin alphabets when normalizing text
* Add CLI commands to create/edit/delete users and trees
* Add more paths to robots.txt
* Compatibility with SQL-Server
* Move the color theme palette to inline CSS
* Remove references to bing maps
* MacFamilyTree generates GEDCOM with duplicate XREFs
* Remove Bing Maps - it closed in June 2025
* Allow _TODO items to contain markdown and links
* Don't renumber XREFs when pending changes exist
* Only use solid icons and upgrade fontawesome package
* Fix install error - pdo_mysql.default_socket not available on Windows
* Use default language for custom welcome text, if the current language is unavailable
* Add EDUC & PROP as extra fields in advanced search
* Do not exlcude names of type 'marriage' in the Family name
* Show socket path as disabled instead of readonly
* Be clear that MariaDB is supported as well as MySQL
* Relationship chart parameters always reset to defaults
* memory_limit = -1 means unlimited
* Fix FAMC label in events of close relatives
* Setup wizard reported memory_limit as zero
* Fix new username/email differs by case from existing
* Fix column name in anniversaries table
* Block robots from more pages

See the [change log](https://github.com/fisharebest/webtrees/compare/2.2.4...2.2.5) for details.
