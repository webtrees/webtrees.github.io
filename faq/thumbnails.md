---
layout: page
title: FAQ - Cannot create thumbnails
---

# FAQ - Cannot create thumbnails #

Creating thumbnail images (i.e. small versions) requires two things.

You can check both using information from the "Server information"
section of the control panel.

Firstly, you need to install a PHP graphics extension.  webtrees can use
either `gd` or `ImageMagick`.

* For `gd`, your server information should include a section `gd`, with an entry `GD support` = `enabled`.

* For `ImageMagick`your server information should include a section `Imagick`, with an entry `ImageMagick supported formats` that includes both `JPEG` and `PNG`.

Secondly, you need sufficient memory.  To decode an image, PHP
requires 4 bytes per pixel.  An image that is 5000 × 4000 pixels will
require 5000 × 4000 × 4 = 80000000 bytes = 80MB.
The rest of the thumbnail script will require approximately 20MB,
so generating this thumbnail will need 80MB + 20MB = 100MB.

Your server's `memory_limit` must be higher than this.
