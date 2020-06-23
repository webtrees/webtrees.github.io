---
layout: page
title: FAQ - Cannot create thumbnails
date: 2020-01-12
---

## Cannot create thumbnails

Creating thumbnail images (i.e. small versions) requires three things.

You can check these using information from the “Server information” section of the control panel.

Firstly, your server need to have a PHP graphics extension.
webtrees can use either `gd` or `ImageMagick`.

* For `gd`, your server information should include a section `gd`, with an entry `GD support` = `enabled`.

* For `ImageMagick`your server information should include a section `Imagick`, with an entry `ImageMagick supported formats` that includes both `JPEG` and `PNG`.

Secondly, you need sufficient memory.
To process an image, GD requires 4 bytes-per-pixel and Imagick requires 10 bytes-per-pixel.
An image that is 5000×4000 pixels will require 5000×4000×4 = 80MB (GD) or 5000×4000×10 = 200MB (Imagick).
The rest of the script requires approximately 20MB.

So generating a thumbnail of a 5000×4000 pixel image will require 100MB (GD) or 220MB (Imagick).

Your server's `memory_limit` must be higher than this.

Thirdly, you need to have sufficient CPU power/time. 
Image manipulation requires a lot of server resources.
It has been observed that `gd` can be 30 times slower than `ImageMagick`.
For this reason, `ImageMagick` is recommended.
However, if you have very large images, and low memory limits, then you will need to use `gd`.
