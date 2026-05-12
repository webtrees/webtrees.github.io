---
layout: post
title:  "webtrees 2.2.2 released"
date:   2025-07-29
sitemap:
priority: 0.7
---

webtrees 2.2.2 is now available for download.

* Security: fix for XSS vulnerability
* Update: logic for detecting and blocking bad robots/crawlers
* Update: use UUIDv7 instead of UUIDv4
* Add: Support for PHP 8.5
* Add: Armenian translation
* Fix: date input in advanced search
* Fix: memory limitations when creating ZIP files
* Fix: Rename 'Google Webmaster Tools' to 'Google Search Console'
* Fix: delete user sessions when deleting users
* Fix: first week misaligned on calendar widget when 1st of month is a Sunday
* Fix: highlighting current day in calendar widget
* Fix: missing translations of Godparent and Cemetery
* Fix: incorrect URL in Austrian historic events
* Fix: don't use CDN for bootstrap files during setup
* Fix: Postgres compatibility
* Fix: broken links cause error in re-order media page
* Fix: ignore accented letters in branches list
* Fix: searching individuals/families using accented letters
* Fix: typo in French relationships
* Fix: do not automatically populate new _UID fields
* Fix: timestamps for new/edit news/journal articles
* Fix: support more tags from Heredis
* Fix: use SVG icons as defaults in the welcome blocks
* Fix: statistics for birth/death/marriage/divorce should count individuals/families, not events 
* Fix: family submitters should not appear on individual page
* Fix: allow searching by UID/_UID
* Fix: increase indent size for individual numbering
* Fix: system emails sent in wrong language
* Fix: trailing space after empty NOTE tag
* Fix: column widths on research tasks block
* Fix: don't show empty place links
* Fix: wrong default parameters in URL for relationship chart
* Fix: date columns sorting incorrectly in individual/family tables
* Fix: don't close modals when clicking on the backdrop

See the [change log](https://github.com/fisharebest/webtrees/compare/2.2.1...2.2.2) for details.
