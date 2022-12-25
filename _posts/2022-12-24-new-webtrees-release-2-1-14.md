---
layout: post
title:  "webtrees 2.1.14 released"
date:   2022-12-24
sitemap:
priority: 0.7
---

webtrees 2.1.14 is now available for download.

Fixes:

* Change family members removes all children.
* Email notifications for new releases of webtrees sent in the wrong language.
* Cannot enter empty row into census-assistant.
* Adding XDEBUG parameters during setup causes the `base_url` to be wrongly detected.
* Incorrect collation rules for surnames on the individual list.
* Missing totals in tag-cloud lists.
* Expand/collapse edit fields wrongly connected.
* Old entries in wt_names table cause errors in the individual list.

Updates and new features:

* Read-only `NAME` records are styled as disabled, to encourage users to use `GVIN`/`SURN` fields.
* Missing API keys for map-providers now gives a helpful message.
* Editing an empty `NAME` record will now initialise it from the `GIVN`/`SURN` parts.
* Block more bad robots: DataForSeoBot, wp_is_mobile.
* More compatibility updates for SQL-Server.
* Data from edit fields in modal windows are now formatted the same as full-page editors.
* Statistics for common surnames now uses the same logic as the individual list.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.13...2.1.14) for details.
