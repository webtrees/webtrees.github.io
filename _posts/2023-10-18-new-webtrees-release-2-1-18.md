---
layout: post
title:  "webtrees 2.1.18 released"
date:   2023-07-14
sitemap:
priority: 0.7
---

webtrees 2.1.19 is now available for download.

Fixes:

* Multi-tree search for sites with many trees
* Individual list - selection of individuals broken in several ways
* Add missing `INDI:ADOP:FAMC:ADOP` tag
* Show missing years as an ellipsis in lifespans
* Case-insensitive searching with PostgreSQL
* Add missing `SOUR:DATA:EVEN:PLAC:_GOV` tag
* Add missing `HEAD:SCHMA:TAG` tag
* Events BCE break some statistics
* Error if `base_url` is not defined
* Relationship name reversed for `INDI:ASSO` facts
* Wrong label for `INDI:NAME:_MARNM` in Geneatique definitions
* `RESN` values not working when combined with `LOCKED`
* Map layers icon overlaps some dropdown menus

Changes:

* Add Basque transation
* Block more bad robots, including LLM crawlers such as ChatGPT
* Add support for PHP 8.3 and 8.4
* Add 1931 Census of Canada
* Add `rel=nofollow` to contact links
* Show married names on death report
* Add burial date to burial report
* 
* The folder /public/ can now be defined as the document_root in your webserver configuration.

See the [change log](https://github.com/fisharebest/webtrees/compare/2.1.17...2.1.18) for details.
