---
layout: documentation
title:  Performance
date:   2020-05-07
order:  3
---

## Performance

webtrees is a complex and demanding application.  There are a few things you can do to reduce the
CPU and memory requirements.

## “Is dead” calculations

To protect the data of living individuals, webtrees must calculate whether every individual is living or dead.
This process can be slow, as we may need to check dates of children, spouses, grandchildren, grandparents, etc.

You can eliminate these calculations by ensuring that every dead individual has a Death event.
In GEDCOM format, all you need is `1 DEAT Y`.

There is a “Data fix” option in the control panel which will add `1 DEAT Y` to many (but not all) individuals
whose death can be inferred from dates of close relatives.

## Public media objects

A media object will be private if it is linked to one or more private individuals.
It is common to have an image linked to many individuals, such as a coat-of-arms or a photograph of a church.

To calculate the privacy of these media objects, webtrees must calculate the privacy status linked record.

If you know that these images will always be public , then you can add an explicit privacy restriction
to that record: "Privacy: show to visitors".

## Thumbnail images

webtrees can use two different PHP extensions to create thumbnail images - GD and ImageMagick.
ImageMagick is much faster than GD, so you should install it if you can.
See the FAQ entry for [thumbnails](https://webtrees.net/faq/thumbnails/)
