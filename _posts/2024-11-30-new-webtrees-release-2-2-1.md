---
layout: post
title:  "webtrees 2.2.1 released"
date:   2024-11-30
sitemap:
priority: 1.0
---

webtrees 2.2.1 is now available for download.

* Fix: collapsed borders on data tables
* Fix: #5063 - Don't set the place when selecting a census date/place
* Fix: #5042 - watermarked images cropped incorrectly
* Fix: #5053 - wrong canonical formatting for PLAC:FORM
* Replace English word 'gender' with 'sex'
* Fix: surnames on family lists not linked
* Fix: sortable column alignment - workaround for DataTables #306
* Fix: #5063 - Bug: Census Place disappears temporarily when choosing Census Date from the Census dropdown
* Fix: #5059 surnames should link to indivdiual list, not family list
* Fix: automatically expand notes option fails to expand notes
* Fix: #5061 - some subtags not removed from links to private records


It raises the minimum supported PHP version to 8.3 which allows us to use a newer version of a graphics library, which fixes image autorotation issues.
