---
layout: documentation
title:  Media firewall
date:   2020-01-31
order:  7
---

The “media firewall” was a feature of webtrees 1.0 – 1.3.  It allowed
you to store some of your media files in a “public” folder and some in a
“protected” folder.
The public folder was accessible over the internet.
The protected folder was controlled by webtrees privacy functions.

The public folder was removed in webtrees 1.4, and all media files are
now handled by webtrees.  This was done to improve both privacy and performance.

Before upgrading, you need to move all your media files to the protected folder.
In most cases, you simply need to move `media/…` to `data/media/…`.

There are also other changes, which may be applicable to your site.

* If you had any direct HTML links to your media files (e.g. in a HTML block),
you will need to update the URLs.
Do this after the upgrade, as the URLs change again in webtrees 2.0.

* Previously, the media folder was (optionally) included in the GEDCOM data (e.g. `1 FILE media/my_folder/photo.jpg`).
Now, the media folder is never included (e.g. `1 FILE my_folder/photo.jpg`).
The upgrade process will convert these automatically.

* Previously, media paths could contain a mixture of "/" and "\" separators.
Now, they will only contain "/". 
The upgrade process will convert these automatically.

* GEDCOM data from desktop applications sometimes contains full paths.
e.g. "C:\users\documents\genealogy\my_folder\photo.jpg.
Previously, you needed to specify the number of (lowest level) folders to keep.
Now, you must remove the prefix.  You can do this after the upgrade, by
exporting, and then re-importing your data - and using the “remove media path” option.
