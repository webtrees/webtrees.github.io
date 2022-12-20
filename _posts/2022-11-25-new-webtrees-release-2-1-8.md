---
layout: post
title:  "webtrees 2.1.8 released"
date:   2022-11-27
sitemap:
priority: 0.7
---

webtrees 2.1.8 is now available for download.

Bug-fixes:

* Not all images were shown on the slideshow
* Should not save empty names, containing only "//"
* Error when generating 405 responses for robots
* Add verification for more search robots
* GOV IDs can be 14 characters, not 12
* `INDI:_MILI` is a fact, not an event
* `FAM:NCHI` is not valid in GEDCOM 5.5.1, only GEDCOM 7.0
* Wrong sub-tags for `ORDN`
* Strict-type errors with PHP 8
* Folder names not sorted in auto-complete
* Notes containing links wrongly described as shared notes
* Remove config options for full-sources and level-2 sources - these are now part of the tag configuration
* `SOUR:PUBL`, `SOUR:TITL` and `SOUR:AUTH` should allow multi-line text
* Error when adding new individuals without any facts
* Various compatibility errors with SQL-Server
* Wrong element type for `INDI:NAME:ROMN`
* `INDI:NAME:ROMN` and `INDI:NAME:FONE` not populated from subtags, like `INDI:NAME`
* Fix inconsistent spacing around footers
* Fix error when failed upload of geographic data
* Wrong order of surnames in surname list
* Re-order children can fail if broken links exist
* Checkboxes initialised in wrong state
* Private shared notes shown on some public pages
* Wrong plural rules for Farsi
* Allow empty slugs in URLs
* Various HTML errors
* Fact delete confirmation dialog malformed
* Deleted research tasks shown on home page

Changes:

* Add logging of searches
* Add fullscreen mode for maps
* Add fullscreen mode for the interactive tree
* Add edit links for location in place-hierarchy
* Allow notes to be added to research tasks
* 404 image placeholders now include an error message in the headers
* Improve support for `_RUFNAME`
* Add compatibility with PHP 8.2
* Support more custom tags from Aldfaer, RootsMagic, MyHeritage and ProGen
* Update google-analytics module to support latest version
* Allow note/source/media when creating new individuals
* The statistics charts were removed from the individual/family lists as they use Google charts, and hence Google tracking
* Validate more robots; NeevaBot, IonCrawl and Amazonbot
* Block more bad robots; Amazonbot, SEOkicks, SiteKiosk, netEstate
* Handle LS and PS characters, as created by geni.com

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.7...2.1.8) for details.
