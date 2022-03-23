---
layout: post
title:  "webtrees 2.0.22 released"
date:   2022-03-23
sitemap:
    priority: 1.0
---

webtrees 2.0.22 is now available for download.

Release 2.0.21 incldued a file by mistake:
`vendor/egulias/email-validator/src/Validation/MessageIDValidation.php`

The presence of this file causes a fatal error when sending email.

If you installed 2.0.21 and get a fatal error, blank page or 500 error, then just delete this file.

Since we upgrade by uploading new files onto an existing installation, we cannot
simply remove it from the release.  Instead, we create a empty file in this location
which neutralizes it.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.21...2.0.22) for details.
