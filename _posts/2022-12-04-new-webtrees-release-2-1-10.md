---
layout: post
title:  "webtrees 2.1.10 released"
date:   2022-12-04
sitemap:
priority: 0.7
---

webtrees 2.1.10 is now available for download.

It fixes a bug in the auto-upgrade code that exists in 2.1.8 and 2.1.9.
If you are using either of those versions, you need to apply a manual
patch before using the auto-upgrade.
See [here]({% link _upgrade/index.md %}) for details.

Bug fixes

* Robots that request disabled languages and then visit unauthorized pages cause errors in the logs
* Wrong statistic shown for lastEventPlace
* Wrong date order MDY for `en-GB` and `en-AU`.
* Fix validation errors that break various edit pages.
* Fact-level restrictions not matching upper/lower case.

Changes

* webtrees will now use the first `NAME` record for an individual, even it is a married name.
* Block more bad robots and verify others.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.9...2.1.10) for details.
