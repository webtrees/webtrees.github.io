---
layout: post
title:  "webtrees 2.1.5 released"
date:   2022-06-04
sitemap:
priority: 1.0
---

webtrees 2.1.5 is now available for download.

There are a number of bug-fixes, including:

* GEDCOM-L allows `_LOC:EVEN:PLAC:_LOC`
* Styling error in stories
* Styling error for empty chart boxes
* Missing `CAUS`/`AGNC`/`RELI` subtags on `FAM:MARR`
* Detect integer overflow on 32bit systems
* Data entry of recording dates: `SOUR:DATA:DATE`
* Cannot search for media objects by filename
* Links from geographic data go to wrong tree
* Untranslated text for close button
* Family sources shown on individual facts tab
* Long words in user-generated text can break page layout
* Formatting of notes with line-breaks
* GOV IDs can be upper or lower case
* FAM:CHAN should not appear on individual facts page
* Inline media references converted with wrong level for `TITL`

There are three new features:

* Support for tags created by Aldfaer, Legacy and GEDCOM 7
* New column in module list for data-fixes
* 1950 US census

There is one security fix:

* GEDCOM imports containing errors and HTML displayed unescaped.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.4...2.1.5) for details.
