---
layout: page
title: FAQ - missing spaces in names
permalink: /faq/name-spaces
---

# FAQ - There are no spaces between the given names and surnames #

This is because the software that created your GEDCOM file did
not include the space.

For example, it created `1 NAME John Paul/Smith/` instead of
`1 NAME John Paul /Smith/`.

webtrees cannot automatically add spaces because languages such
as Chinese do not use spaces between words or names.  Also,
webtrees tries to avoid altering you data unless you explicitly
ask it to do so.

But webtrees does include a utility to insert these spaces.
From the control panel, choose Modules, Module Administration,
Batch update, Add missing slashes and spaces.
