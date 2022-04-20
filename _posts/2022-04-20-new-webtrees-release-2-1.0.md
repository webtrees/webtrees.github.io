---
layout: post
title:  "webtrees 2.1.0 released"
date:   2022-04-20
sitemap:
priority: 1.0
---

webtrees 2.1.0 is now available for download.

There are two changes relating to the new GEDCOM 7.0 standard.

In GEDCOM 5.5.1, a record/fact may only have one `RESN` tag.
Howerver, there are two types of restriction - displaying and editing.

webtrees 2.0 resolves this conflict by allowing multiple tags.
For example

```
0 @X1@ INDI
1 RESN privacy
1 RESN locked
```

The GEDCOM 7.0 specification says that multiple values should be
combined in a single tag.  For example

```
0 @X1@ INDI
1 RESN privacy, locked
```

webtrees 2.1 now uses this new format. If you were using both
restrictions together, you will need to update your data, as only
the first `RESN` tag will now be used.

Secondly, in GEDCOM 5.5.1, upper and lower case values are equivalent.
For example, these records are treated the same.

```
1 NAME
2 TYPE married
1 NAME
2 TYPE MARRIED
1 NAME
2 TYPE mArRiEd
```

In GEDCOM 7.0, these values must be in upper case.  webtrees 2.1
will continue to support values in upper or lower case - but will
create new values using upper case only.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.0-beta.2...2.1.0) for details.
