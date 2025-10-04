---
layout: page
title: FAQ - missing spaces in names
date: 2019-12-31
---

## There are no spaces between the given names and surnames

This is because the software that created your GEDCOM file did
not include the space.

For example, it created `1 NAME John Paul/Smith/` instead of
`1 NAME John Paul /Smith/`.

webtrees cannot automatically add spaces because languages such
as Chinese do not use spaces between words or names.  Also,
webtrees tries to avoid altering you data unless you explicitly
ask it to do so.

But webtrees does include a utility to insert these spaces.
From the control panel, choose **Family trees, *your family tree*, Data fixes**.
Then select **Fix name slashes and spaces**.
If that option is not listed look at control panel, Modules, All modules,
**Fix name slashes and spaces** and check is is enabled.
