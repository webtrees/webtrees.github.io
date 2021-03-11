---
layout: documentation
title:  Manual upgrade
date:   2020-01-31
order:  2
---

## Overview

Essentially, we just need to copy the new files to the server,
overwriting any that are already there.

However, it can take several minutes to copy all the files.
During this time, visitors to your site would get error messages due to
the mix of new and old files.
So we must take the site offline temporarily.

## Before the upgrade

This is a good time to make a backup! You can make a copy of the `data/` folder and of your database.

If you have installed any third-party modules, you should check that these
are compatible with your new version of webtrees.
They may also have upgrades available.

## Upgrade Steps

* Download [webtrees-{{ site.latest_version }}.zip][DOWNLOAD], [webtrees-{{ site.latest_version_20 }}.zip][DOWNLOAD_20] or [webtrees-{{ site.latest_version_17 }}.zip][DOWNLOAD_17] as appropriate.
* Unpack this file on your computer.  You should have a folder called `webtrees`.
* Create a file `data/offline.txt` on the server.
If it contains a message, it will be shown to your users.
If it is empty, a default message will be shown.
The file must have this exact name and location - even if you have chosen a
different data folder in the control panel.
* Upload the contents of the `webtrees` folder to the corresponding folder on your web server.
* Delete the file `data/offline.txt`.

## After the upgrade

If any database upgrades are required, these will happen automatically when
you next visit the site.
For this reason, the first page may take longer than usual to be displayed.

[DOWNLOAD]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version }}/webtrees-{{ site.latest_version }}.zip
[DOWNLOAD_20]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version_20 }}/webtrees-{{ site.latest_version_20 }}.zip
[DOWNLOAD_17]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version_17 }}/webtrees-{{ site.latest_version_17 }}.zip
