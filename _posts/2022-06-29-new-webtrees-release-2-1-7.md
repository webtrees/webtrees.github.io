---
layout: post
title:  "webtrees 2.1.7 released"
date:   2022-06-20
sitemap:
priority: 0.7
---

webtrees 2.1.7 is now available for download.

There are a number of bug-fixes, including:

* Missing date on _TODO events
* Notes on CHAN events were lost when editing.
* Wrong lines in descendancy chart if children in the wrong order.
* Last-change timestamp logic fails for arabic/persian.
* Ignore 0 _TASK records created by Ages.
* Broken HTML layout in new-media modal.
* HTML error in statistics block.
* Level 1 shared notes wrongly shown as links.
* Wrong sorting for _FSFTID tags.
* Wrong element type for INDI:FACT/EVEN.
* Only delete one-person families when there are no significant facts.
* SEX X breaks the individual list.
* List of media folders not sorted.
* FAM:MARR:TYPE not visible for new records.
* INDI:EDUC:AGNC not visible for new records.
* Trees with all-numeric names break site logs.
* Ignore trailing newlines when editing raw GEDCOM.
* Don't show file format on media list.
* Wrong formatting for place names ending in commas.

There are some new features:

* Can now add/edit NAME:FONE and NAME:ROMN structures.
* When adding new individuals, the panels for each fact remember whether they were expanded or collapsed.
* Support for more media mime types.
* Show the internal error code on the error-check page.
* Allow notes in source citations.
* Allow shared notes in _TODO facts.
* Allow INDI:_NMAR to be added.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.6...2.1.7) for details.
