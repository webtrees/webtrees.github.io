---
layout: page
title: FAQ - Upgrade modules
date: 2024-12-29
---

There are many [third-party modules]({% link download/modules.md %})
available for webtrees.

In general, these modules only work with specific versions of webtrees.
Sometimes there are changes to the core code and the module needs updating
to work with the new version.

When a new version of webtrees is available, you should check your modules’
websites to see if they are compatible with the new version.  You may need
to wait a few days or weeks for the module author to verify that it works
with the latest version, or update it.

If you have upgraded webtrees without checking/upgrading your modules,
your site may show fatal errors.  To recover from this you will need
to disable the modules that cause errors.  To do this, rename the
folder from `modules-v4/xxx` to `modules-v4/xxx.disabled`.
