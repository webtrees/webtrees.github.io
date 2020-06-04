---
layout: post
title:  "webtrees 2.0.5 released"
date:   2020-06-04
sitemap:
    priority: 1.0
---

webtrees 2.0.5 is now available for download.

Changes in the Bootstrap and Datatables libraries caused problems with some of
our icons and buttons.  We have created a workaround for the icons, but need
to wait for the next release of Bootstrap.

The performance of the GEDCOM import function has been significantly improved
by inserting multiple rows in a single SQL statement.

The performance of the GEDCOM export function has been significantly improved.
Slow exports were preventing the automatic upgrades from working for some sites
with very large trees.

Nicknames are no longer copied automatically into the full-name field.
If you want nicknames to appear as part of the full-name, you will need
to add them yourself, inside double-quotes. e.g. `John "Chalky" /White/`

We now have an Urdu translation.

Notes for developers:

* The class `FunctionsExport`has been deprecated and replaced with `GedcomExportService`.

Fixes for many other minor issues. See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.4...2.0.5) for details.
