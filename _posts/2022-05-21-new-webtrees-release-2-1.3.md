---
layout: post
title:  "webtrees 2.1.3 released"
date:   2022-05-21
sitemap:
priority: 1.0
---

webtrees 2.1.3 is now available for download.

There are a number of bug-fixes, including:

* Fix: wrong relationship name for maternal great-grandmothers
* Fix: detect truncated requests caused by sever limitations
* Fix: layout of notes and shared notes
* Fix: notes containing `"` could have their titles corrupted
* Fix: hourglass chart won't run without the spouses parameter
* Fix: family facts missing when adding a new spouse to a family
* Fix: wrong `HUSB`/`WIFE` tag when creating a one-parent family
* Fix: don't show user links to non-admins on individual page
* Fix: wrong label for notes in research tasks
* Fix: name of shared notes with multiple lines
* Fix: `CEME` tag not recognised in burials for close relatives
* Fix: research tasks not showing on 32 bit builds of PHP
* Fix: cannot add `NATI` tag
* Fix: do not show filenames for media files with titles
* Fix: better error handling when email is not configured
* Fix: pending changes in the `HEAD` not handled in the error check
* Fix: privacy feedback broken
* Fix: autocompletion for source-citations
* Fix: not setting any "quick add facts" causes display glitch
* Fix: family sources shown on individual tab.
* Fix: cannot add `ROLE` to source-citations
* Fix: do not warn of upper/lower case mismatches, as these are not relevant until GEDCOM 7.0

There are some new features, including:

* Edit and edit-raw is available for media objects
* webtrees can now email you when a new version is available
* FAM:FACT can be added (as it will be part of GEDCOM 7.0)

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.2...2.1.3) for details.
