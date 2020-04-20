---
layout: post
title:  "webtrees 2.0.2 released"
date:   2020-02-01
sitemap:
    priority: 1.0
---

webtrees 2.0.2 is now available for download.

The “Batch update” module is replaced by a series of “Data-fix” modules.
These can now do more complex updates, such as modifying several linked
records at the same time.  They should also avoid timeouts on large systems.

There is a new translation, into Kurdish.

There is a new Census definition, for Slovakia 1869.

There is a new historic-event module, for Czech history.

Pretty URLs are updated to work better with non-latin characters.

HTTP security headers are now added by default, as most users are not
able to set these in their web-server configuration.

Fixes for over 50 reported issues. [CHANGELOG](https://github.com/fisharebest/webtrees/compare/2.0.1...2.0.2)
