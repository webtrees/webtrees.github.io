---
layout: post
title:  "webtrees 2.1.19 released"
date:   2024-03-19
sitemap:
priority: 1.0
---

webtrees 2.1.19 is now available for download.

Fixes:

* Add Link/rel=canonical to genealogy pages and redirects
* Add _CREA tags from Heredis
* Rework setup page for MySQL to highlight distinction between localhost and network
* Cannot disable sublists on individual list page
* Requesting a non-existing surname breaks the individual list
* Do not allow invalid HEAD:DATE to break the statistics
* Update the JS snippet for matomo analytics
* Add more bad bots to the blocker
* Individual list error when there are no individuals without a surname
* Wrong subtags for INDI:BASM
* Update BadBotBlocker
* Alt-text position in fan chart
* Graceful error handling when update server is unavailable
* Use local timezone for changes and error log
* Database agnostic support for GROUP_CONCAT/STRING_AGG
* Setup fails in Postgres when using non-English locales
* Add validation to media-folder parameter
* Localised sorting of location names
* Family non-events for GEDCOM 7
* Setup fails for SQL Server
* Session time not updated
* Validation of old URLs for lifespan chart
* Managers cannot set tree preferences
* Display of "after death" in events
* PHP session ID can be 256 chars
* SQL error in statistics breaks Postgres
* Trim whitespace from search fields in advanced search
* Add support for some TNG tags
* Family event search broken in advanced search
* Copy/paste error when repopulating login form
* Untranslated string in tom-select component
* Forgot-password link in sign-in block broken
* Add support for Geneatiqe _ACT tags

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.18...2.1.19) for details.
