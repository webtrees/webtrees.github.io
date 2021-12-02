---
layout: post
title:  "webtrees 2.1.0-alpha.1 released"
date:   2021-12-02
sitemap:
    priority: 1.0
---

webtrees 2.1.0-alpha.1 is now available for download.

The main change in 2.1 is that webtrees has a much better knowledge of GEDCOM data.
Instead of just tags and labels, webtrees now understands their context and structure.
For example, `INDI:NAME` contains different data to `REPO:NAME`.

This allows us to remove a lot of "special case" code, and the result is much
easier to maintain and develop.

All valid GEDCOM 5.5.1 tags should now be supported.

A number of modules have been created, which provide support for custom tags created by
some popular desktop applications.  This also means that support for your own custom
tags can easily be created.

This change leads to a slight reversal in the control panel.  Instead of specifying
which GEDCOM tags to use/show, we now support all tags, and you would specify which
ones you wish to hide.

The `alpha` status indicates that the internal structure of the code will change
before the final `2.1.0` release.  Module developers are reminded to check for `@deprecated`
comments in the code, and avoid using these classes and functions.


See the [change log](https://github.com/fisharebest/webtrees/compare/2.0...2.1.0-alpha.1) for details.
