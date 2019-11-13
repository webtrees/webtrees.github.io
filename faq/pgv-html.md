---
layout: page
title: FAQ - PGV HTML
---

# FAQ - Embedded HTML no longer appears processed before display #

PhpGedView stores HTML code in an encoded form.  For example, `<` and `>` encoded as `&amp;lt;` and `&amp;gt;`.  webtrees stores HTML code in its original form.

Your options are:

* Use webtrees to edit embedded HTML to restore the encoded tag delimiters
* Go into the underlying database and replace the encoded tag delimiter with the original character. This will avoid changing date stamps in items like news articles and be accomplished globally using a tool like phpMyAdmin.
