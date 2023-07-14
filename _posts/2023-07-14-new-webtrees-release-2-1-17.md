---
layout: post
title:  "webtrees 2.1.17 released"
date:   2023-07-14
sitemap:
priority: 1.0
---

webtrees 2.1.17 is now available for download.

Fixes:

* Married name parameter lost when navigating individual lists
* Events BCE can break some statistics
* Cannot send email if base_url is undefined
* Relationship names reverese for INDI:ASSO
* Wrong label for _MARNM
* Some combinations of multiple-restrictions not working
* Cannot create new location from edit page
* Cannot add PLAC:_GOV on edit forms
* Menu items with accents not sorted correctly
* Redirect legacy URLs with missing ged parameter
* Location edit form when working in full-screen
* Clicking ancestor in pedigree map not working
* Footer overlaps content when showing some maps
* Width of tables in markdown
* Wrong ISO code for Portugal
* Remove the legacy OS historic map module
* Wrong URLs generated when using ugly URLs.
* Fix edit form for add-spouse-to-individual
* Media not included in total record count statistics
* Cannot export GEDCOM if the HEAD record was deleted

Changes:

* Add translation into Basque
* Add Awario, ByteSpider and YisouSpider to list of bad bots
* Add validation for Seznam and Microsoftpreview bots
* Only show age-difference for events (not facts) that occur after death
* Add Curacao and Saint Bethelemy to the country lists
* Add new statistics for individiuals/families with sources percentage
* Missing HEAD:CHAR now assumed to be UTF8, for GEDCOM 7 compatibility

Internally, there are some changes to reduce the dependencies on
the Laravel libraries, and improve compatibility with different databases.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.16...2.1.17) for details.
