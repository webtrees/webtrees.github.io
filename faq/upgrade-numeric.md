---
layout: page
title: FAQ - The upgrade fails with the error “A non well formed numeric value encountered”
---

## The upgrade fails with the error “A non well formed numeric value encountered”

This error occurs when you are upgrading *from* webtrees <= 1.7.10 on a server running PHP >= 7.1.

webtrees <= 1.7.10 uses a .ZIP library which is not compatibible with PHP 7.1.
This causes the automatic upgrade upgrade to fail.

You have three options.

1) If your web host allows you to choose a version of PHP via a control panel, temporarily change
to PHP 7.0

2) If you can update the PHP.INI file on your server, change the setting for `memory_limit` so that
it contains just digits.  e.g. change `48M` to `48000000`.  You may need to restart PHP or web
services on your server for this to take effect.  You also need to remove the memory limit setting
in the webtrees control panel (Website preferences, Memory limit).
Leave this blank so that it uses the server’s default.

3) You can upgrade manually.  Download the latest webtrees.zip.  Unzip it on your desktop computer,
and then upload the files to the server using FTP.
