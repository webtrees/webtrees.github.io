---
layout: post
title:  "webtrees 2.0.17 released"
date:   2021-10-10
sitemap:
    priority: 0.7
---

webtrees 2.0.17 is now available for download.  There are a few bug fixes
and additional census defintions, however this is mostly a security-fix release.
 
* Uploaded SVG files can contain javascript.
* Uploaded HTML files can contain javascript.
* XSS vulnerability in add note/source modal dialog.
* No validation on redirect URL after completing various actions.
* No rate limit for password reset, registration and contact forms.
* An admin can delete core files from the /data folder.
* XSS vulnerability in tree titles in control panel.
* User credentials are echoed in the URL when the registration form has errors.
* The password reset form allows you to determine if a user account exists.

Thanks to the team at https://huntr.dev for finding and reporting these vulnerabilities.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.0.16...2.0.17) for details.
