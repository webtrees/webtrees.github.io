---
layout: page
title: FAQ - PGV letters with accents are corrupted
---

## Letters with accents have become corrupted, so é becomes Ã©, è becomes Ã¨, and so on.

Modern software uses UTF8 encoding to store letters with accents, foreign scripts, etc.

PhpGedView was created before MySQL supported UTF8.  Therefore many older installations of PhpGedView did not properly encode these characters.

A script is available which can fix the problems in PhpGedView - [download/pgv_export.php](pgv_export.php).

You should fix the data in PhpGedView and then import again.
