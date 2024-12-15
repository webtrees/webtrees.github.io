---
layout: documentation
title:  Performance
date:   2020-05-07
order:  4
---

## Performance

webtrees is a complex and demanding application.  There are a few things you can do to reduce the
CPU and memory requirements.

### PHP interpreter setup

As a language, PHP originally was designed to interpret a web page "from the top" each time it is accessed.
Unfortunately, a typical Webtrees installation contains ~8500 PHP files; a typical request loads ~3500 of them.
Checking these files for changes causes server load and takes time, let alone re-opening and re-interpreting them.

To fix this, set up PHP-FPM. Install the "opcache" module (sometimes called "zend-opcache").
Set the following configuration options in `/etc/php//#.#/fpm/php.ini`:

* zend_extension=opcache

* opcache.enable=1
* opcache.revalidate_freq=60
* opcache.revalidate_path=0

... and in `…/pool.d/www.conf`:

* pm = ondemand
* pm.process_idle_timeout = 1800s

These options teach your PHP interpreter to re-check for changed files once a minute instead of on every request.
They allow idle servers to hang around for half an hour, instead of the default ten seconds.

Caution: each PHP server requires ~130 MBytes of memory when it's caching the Webtrees site.
Monitor the server to ensure that it's not swapping (much).

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

## Watermarks

Watermarks discourage visitors from downloading public images on your site,
and hot-linking to them.

Adding watermarks to thumbnail images is resource intensive.
If you do not need watermarks, you can disable this feature in the preferences
for each tree.
