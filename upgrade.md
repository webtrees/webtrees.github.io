---
layout: page
title: Upgrade from webtrees-1.7 to webtrees-2.0
date: 2020-01-02
---

## Manual Upgrade Steps

1. Backup both your webtrees directory and your MySQL database.
2. Optional: If you wish to gracefully handle visitors during the upgrade, create a file `/data/offline.txt`. If it contains a message, it will be shown to your users.  Otherwise a default message will be shown.
3. Download [webtrees-{{ site.latest_version }}.zip][DOWNLOAD].
4. Unzip the files and upload them to the webtrees directory on your web server.
5. If you had created an `offline.txt` file, delete it now.
6. Because your database connection details were preserved in `config.ini.php` in the `data` directory, your database should be subsequently updated the next time you access your webtrees installation via a web browser.

## Upgrade Notes

There are some key differences between webtrees-1.X and webtrees-2.X to keep in mind when upgrading.

### Base URL detection

In webtrees-1.7, webtrees attempted to detect the URL of the site.  This was not always reliable.  Sometimes, it was not even possible.

In webtrees-2.0, you must specify the URL of your site in the file `/data/config.ini.php`. Add a line using the following format:

`base_url="https://www.example.com/webtrees"`

### Media folders containing `/../`

In webtrees-1.7, media folders could contain `/../`, to specify a folder outside the `/data` folder.

In webtrees-2.0, this is not allowed. Media files and folders must live entirely within your `/data` folder (or the folder you specified in the control panel).

### Symbolic links

In webtrees-1.7, the `/data` folder could contain symbolic links.

In webtrees-2.0, symbolic links are not allowed.

### Sending e-mail

webtrees 2.0 no longer provides the “PHP Mail” option for sending e-mail.
PHP Mail has serious security vulnerabilities, and is no longer supported by
major mail libraries.

You will need to use sendmail (if your server provides it), or an SMTP server.

### robots.txt

In webtrees-1.7, you must create this file yourself, using `robots-example.txt`.

In webtrees-2.0, if you enable [pretty URLs](/faq/urls), it will be generated automatically.

### Redirect old URLs onto new URLs

The URL structure has changed.  Therefore bookmarks and search-engine links will not work.

However, if you enable [pretty URLs](/faq/urls), then webtrees will generate suitable redirects from the old URLs, and any existing bookmarks will continue to work.

For example, the old URL `individual.php?ged=demo&pid=X123` will be redirected to the new URL `trees/demo/individual/X123`.

### Notes tab - visibility and privacy

In webtrees 1.7, setting the access level for the notes tab would implicitly
set a privacy restriction for the notes themselves.  Hiding the tab would also hide
the notes.

In webtrees 2.0, if you disable or restrict access to the notes/media/sources tabs,
then the note/media/source facts will instead be displayed on the “Facts and events” tab.

You should add a privacy restriction for notes as well.

### “Primary” parents

An individual can have multiple parents, for example birth and adopted.

In webtrees-1.7, the birth parents were used on pedigree charts, reports, and other places where only one set of parents could be shown.

In webtrees-2.0, the *first* parents listed on the individual's record will be used. There is a new edit option to re-order the parents.

### Married versus unmarried

In webtrees-1.7, a couple were described as married, *unless* a `_NMR` (not married) fact exists.

In webtrees-2.0, a couple are described as not-married, *unless* a `MARR` (marriage) event exists.

This change allows you to create unmarried couples without relying on a custom tag.

### Media objects can now contain many media files

webtrees-2.0 now allows a media object to contain many media files. For example, if you scan both sides of a document, you can store them together in one media object.

webtrees will use the first media file that contains an image as the thumbnail.  So if your media object contains a video and an image, then the image will be used as the thumbnail.

### User registration

In webtrees-1.7, user registration requests were emailed to the genealogy contact for the tree.  This meant that users could not sign up to sites where all trees are private.  The genealogy contact would then need to ask an administrator to approve the user and set access permissions.

In webtrees-2.0, user registration requests are emailed to the administrator(s).

Similarly, emails for things like forgotten passwords are now sent from the *site*, rather than from a *tree*.

### Primary photo

webtrees must choose just one image for an individual, to use on charts, etc.

In webtrees-1.7, the image was specified using a custom `_PRIMARY Y` tag and other logic.

In webtrees-2.0, webtrees uses the *first* media object containing an image.  There is a new edit option to re-order the media objects.

It is common for images to be linked to the indvidual, when they should be linked  to a fact or event. For example, a birth-certificate should be linked to the birth event, not the individual.

This can cause some inappropriate images to be selected as the "primary image". The control panel now has an option to easily move these images from individuals to facts.

### Custom thumbnails

In webtrees-1.7, you could create a custom thumbnail for a media object. This could be a still image from a video, or a cropped version of a group photo.

You did this by creating a file on the server to replace the default thumbnail. (Note - this was never an officially supported feature, but it was used by many people.)

In webtrees-2.0, you create custom thumbnails by adding a second media file to a media object.  (Media objects can now contain many media files.)

There is a tool in the control panel to help find and import custom thumbnails.

### XREFs

In webtrees-1.X, the prefix of the cross-reference ID (XREF), the unique identifier assigned to every object added to a tree, was different for each object type (e.g., I for individuals, F for families, S for sources, etc.). And there was the ability to customize the XREF prefixes for each tree.

Due to the potential for confusion (I with 1, S with 5, O with 0, etc.), all new objects created in webtrees-2.X will have XREFs beginning with X, regardless of type. (All existing objects will retain their XREFs with the old prefixes unless they are renumbered.)

[DOWNLOAD]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version }}/webtrees-{{ site.latest_version }}.zip
