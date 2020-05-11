---
layout: post
title:  "webtrees 2.0.4 released"
date:   2020-05-18
sitemap:
    priority: 1.0
---

webtrees 2.0.4 is now available for download.

Session handling has been redesigned to reduce the number of writes
to the session table in the database.  This should help performance.

On the media page, audio and video files can now be viewed using
embeded media players.

Postgres compatibility issues have been fixed.

There is a new census-assistant definition for US 1950

Historic event modules have been added for Austrian users.

When you use XREF links in shared notes (e.g. `@X123@`), these will
now be converted to a named link to the record.

When you have pretty URLs enabled, webtrees will now recognise
almost all URLs from webtrees 1.x and phpGedView, including charts,
lists and reports.

Notes for developers:

* The class `Location` has been renamed `PlaceLocation`.  A new/different class `Location` has been added to represent `_LOC` records in a GEDCOM file.
* the `getAgeXxx()` functions have been deprecated and replaced with a new class `Age`.
* the `Builder::whereContains()` function has been deprecated and should be replaced with `LIKE` queries.
* the `GedcomRecord::getInstance()` and `rowMapper()` functions have
deprecated and replaced with factory objects.

Deprecated functions may trigger warnings on development versions
of webtrees, but not on stable releases.

Fixes for many other minor issues. See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.3...2.0.4) for details.
