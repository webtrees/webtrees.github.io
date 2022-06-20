---
layout: post
title:  "webtrees 2.1.6 released"
date:   2022-06-20
sitemap:
priority: 1.0
---

webtrees 2.1.6 is now available for download.

There are a number of bug-fixes, including:

* Fixes for Slovak, Czech and Hungarian alphabets.
* Adoptions create multiple events of close relatives.
* Display of SOUR:EVEN:ROLE tags.
* Missing EMAIL/WWW/PHON/FAX fields for FAM:EVEN.
* Missing spaces in multiline footnotes in reports.
* Add "Multiple" role for associates - for twins, triplets, etc.
* Browser error when language set to certain languages
* _GODP, _WITN, ADOP not formatted correctly in events of close relatives.
* SOUR:PUBL can now contain multi-line text.
* Error when file extensions longer than 4 characters.
* Unfriendly error when file-upload is empty.
* Improved display of inline sources.
* Wrong error message for FAM records containing too many HUSB/WIFE.
* Add many missing subtags to facts and events.

There are two new features:

* The error checker allows you to hide each type of error.
* Support for more tags created by Aldfaer and Généatique.

There is one privacy-related fix:

* Pending changes were wrongly being shown to visitors.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.4...2.1.5) for details.
