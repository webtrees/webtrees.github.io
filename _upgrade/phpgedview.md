---
layout: documentation
title:  Upgrade from phpGedView
date:   2020-01-31
order:  6
---

webtrees {{ site.latest_version_17 }} contains a tool to migrate data
and settings from phpGedView.  This process does not change anything
in phpGedView, and it does not require a working installation - you only
need the database and the `index/` folder.

## Requirements

* The phpGedView database must be on the same server as the webtrees database.
* The phpGedView `index/` folder must be on the same server as the webtrees files.
* The webtrees database account must have permission to access the phpGedView database.
* phpGedView needs to be version 4.2.3 or higher.
* All pending changes in phpGedView must be accepted, as pending edits will not be transfered.
* All existing phpGedView users must have an email address, and it must be unique to that user (phpGedView allows users to delete their email address, or have the same email address as other users).
* The transfer process overwrites usernames and passwords.  After the transfer is complete, you will need to log in with your old phpGedView account.  If you do not know this, see the [FAQ]({% link faq/password.md %}).

## Limitations

The transfer cannot move media files, and you will need to do this manually.
This is usually moving `media/` to `data/media/`,


Due to differences in internal data formats, the following settings are not transferred:

* Custom privacy restrictions
* Block configuration
* FAQs
* HTML blocks

The [FAQ]({% link faq/index.md %}) contains a section on the transfer wizard.

## After the transfer

You should review your configuration and privacy settings, as these will
work slightly differently to phpGedView.

