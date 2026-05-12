---
layout: page
title: FAQ - How do nicknames work
date: 2022-02-05
---

## How do nicknames work?

In GEDCOM 5.5, nicknames were included in the `NAME` field, and
were surrounded by quotation marks.  e.g.

```
1 NAME Martin "Chalky" /White/
```

In GEDCOM 5.5.1, nicknames were moved to a `NICK` subfield.  e.g.

```
1 NAME Martin /White/
2 GIVN Martin
2 NICK Chalky
2 SURN White
```

Note that in the 5.5.1 specification, the nickname is **only**
included in a `NICK` subfield.  It is not included in the `NAME field.

webtrees recognises both formats.  When the 5.5 format is encountered,
the quotation marks are replaced with the appropriate quotation
marks for the current language.

## How do I include nicknames in the display name for the individual?

You need to include the nickname in the `NAME` field.
Including it in the `NICK` field is optional, but recommended.
For example,

```
1 NAME Martin "Chalky" /White/
2 GIVN Martin
2 NICK Chalky
2 SURN White
```

## Why doesn’t webtrees automatically copy the nickname into the display name?

In webtrees 1.x, the nickname was automatically inserted into the
display name,  before the surname.

In webtrees 2.0, this was removed.  The logic fails for many languages
and is not always appropriate.

* Some names are written surname first, and it is wrong to add the nickname before the surname.  For example, `Professor /Papp/ László "nickname"`
* Some nicknames are diminutive forms of one of the given names, and should be added after that name.  For example, `Edward "Eddie" George /Jones/`
* Some nicknames are only used by the immediate family, and it would be inappropriate to use them as part of the individual’s name.
* In some eastern naming conventions, it is not possible to fit a name into the `NPFX GIVN SPFX SURN SPFX` format, and the nickname field is used to capture other name parts.
