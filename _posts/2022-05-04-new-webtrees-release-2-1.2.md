---
layout: post
title:  "webtrees 2.1.2 released"
date:   2022-05-04
sitemap:
priority: 0.7
---

webtrees 2.1.2 is now available for download.

There are a number of bug-fixes, including:

* Fix: wrong name for multi-line notes.
* Fix: _RUFNAME created an additional name record.
* Fix: arrows broken on re-order tabs/menus page.
* Fix: multi-selects only allow the last entry to be removed.
* Fix: exclude family _UID tags from the individual page.
* Fix: autocomplete for placenames broken.
* Fix: PHON/EMAIL/WWW missing from INDI:RESI and FAM:RESI
* Fix: Media objects with large number of media files breaks the page layout.
* Fix: Broken captcha prevents user registration.
* Fix: RESN privacy breaks the page layout
* Fix: Invalid HEAD record for new trees
* Fix: Media type lost when editing files

There are some new features, including:

* TIME can be added to BIRT:DATE and DEAT:DATE.
* Support for some Aldfaer custom tags
* A datafix for _WT_OBJE_SORT tags

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.1...2.1.2) for details.
