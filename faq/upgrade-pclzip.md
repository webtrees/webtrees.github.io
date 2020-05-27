---
layout: page
title: "FAQ - The upgrade fails with the error “PCLZIP_ERR_BAD_FORMAT (-10) : Unable to find End of Central Dir Record signature”"
date: 2019-12-31
---

## The upgrade fails with the error “PCLZIP_ERR_BAD_FORMAT (-10) : Unable to find End of Central Dir Record signature”

This error occurs when you are upgrading *from* webtrees <= 1.7.16.

The new release is downloaded from the github server.  This server was updated, and
now sends responses in lower case.

As a result, webtrees cannot understand the response.

You have two options.

1) Apply the [patch](https://github.com/fisharebest/webtrees/commit/3bd4111244f5c168957c240a88cec8da69221538)
This is a one-line (line `58`) edit of file `/app/file.php`.  You must replace `L` with `[Ll]`.

2) You can [upgrade manually]({% link _upgrade/manual.md %}).
