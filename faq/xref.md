---
layout: page
title: FAQ - XREFs
permalink: faq/xref
---

# How can I show the GEDCOM IDs (XREFs) in webtrees? #

A (very) few applications, such as PhpGedView, show the XREF in brackets after the name. webtrees does not do this. This is a deliberate design decision, and common to most family history software products.

* XREFs are 20 character fields. We would need to design every page with enough space for `(I1234567890123456789)` after the name. This places unnecessary restrictions on the page layout.

* XREFs are not unique. If you have 3 family trees on your site, you will have 3 `I1` records.

* XREFs are written in latin characters, and many languages do not use the latin alphabet. It also causes layout problems with right-to-left languages.

* XREfs contain easily confused characters, `S`/`5`, `O`/`0`, `I`/`1`, etc.

* XREFs change when records or trees are merged.

* We plan to move away from GEDCOM for internal data storage, and therefore need to break the link with GEDCOM identifiers.

In webtrees 1.7, there are still a few admin/edit screens where XREFs are used. These will be removed in webtrees 1.8.
