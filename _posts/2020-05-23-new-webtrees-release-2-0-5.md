---
layout: post
title:  "webtrees 2.0.5 released"
date:   2020-05-23
sitemap:
    priority: 1.0
---

webtrees 2.0.5 is now available for download.

Internally, we have changed how we represent the structure of GEDCOM elements.
The same tag can have different meanings in different contexts.  For example,
`INDI:TITL` is a different thing to `SOUR:TITL`.  There was lots of complicated
code to keep track of these.  These text labels have been replaced with objects
that encapsulate the exact meaning of each one.

It also allows custom tags to be defined by modules.

Changes in the bootstrap and datatables libraries caused problems with some of
our icons and buttons.

The performance of the GEDCOM export function has been significantly improved.
Slow exports were preventing the automatic upgrades from working for some sites
with very large trees.

We now have an Urdu translation.

Notes for developers:

* The class `FunctionsExport`has been deprecated and replaced with `GedcomExportService`.
* The functions `Fact::getTag()` and `Fact::setTag()` have been deprecated.
Facts are now immutable.  Use `Fact::tag()` instead.

Fixes for many other minor issues. See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.4...2.0.5) for details.
