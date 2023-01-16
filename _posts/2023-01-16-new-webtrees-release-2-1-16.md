---
layout: post
title:  "webtrees 2.1.16 released"
date:   2023-01-16
sitemap:
priority: 1.0
---

webtrees 2.1.16 is now available for download.

Fixes:

* Concurrent edits for different record types could create duplicate XREFs
* Add MegaIndex and Seekport to the bad-bot list
* Compatibility issue with SQL-Server
* Compatibility issue with PostgreSQL
* Missing HUSB:AGE on divorce events
* Family residence lable not translated
* Numeric surnames break individual list
* Wrong order for ADDR subtags
* Place names not sorted correctly for some languages

Changes:

* Initial support for GEDCOM 7 `INDI:NO` and `FAM:NO` tags
* Show timestamps for last check-for-update
* Performance tweak when creating first XREF in a new tree
* Slideshow pauses when the tab/window is hidden

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.15...2.1.16) for details.
