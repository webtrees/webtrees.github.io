---
layout: page
title: FAQ - iconv() Wrong charset, conversion from 'utf-8' to 'utf-16be' is not allowed
permalink: faq/synology-iconv
---

# FAQ - iconv() Wrong charset, conversion from 'utf-8' to 'utf-16be' is not allowed #

Synology servers disable various PHP modules, even though they should be enabled by default.

This includes `iconv` which is required by webtrees.

The control panel / administration interface for the Synology Box contains an option to
enable PHP modules.  Find and enable `iconv`.  Restart the webserver.
