---
layout: post
title:  "webtrees 2.0.7 released"
date:   2020-07-27
sitemap:
    priority: 0.7
---

webtrees 2.0.7 is now available for download.

Screen items that expand/collapse have been made more consistent.
This includes notes, source citations and the names panel on the individual page.

There is a new data-fix, which will convert name sub-tags such as `_MARNM`
to the standard GEDCOM 5.5.1 format.

The geographic data section of the control panel has been simplified.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.6...2.0.7)
for a complete list of updates and bug-fixes.

Notes for developers:

* The class `Config` has been deprecated.  It will be replaced with GEDCOM element objects in 2.1.0
* The functions `Fact::getTag()` and `Fact::setTag()` have been deprecated.
Facts are now immutable.  Use `Fact::tag()` instead.

