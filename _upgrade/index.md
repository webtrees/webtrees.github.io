---
layout: page
title: Upgrading webtrees
permalink: upgrade/
date:  2020-01-31
---

There are two ways to upgrade webtrees -
[manual]({% link _upgrade/manual.md %}) and
[automatic]({% link _upgrade/automatic.md %}).

If you are currently using a version of webtrees listed below,
there are some additional instructions.

## webtrees 2.0.8

webtrees 2.0.8 contains a bug in the auto-upgrade code.  It was quickly
withdrawn, but a few users have installed it.  To use the automatic
upgrade you need to edit two files.

Firstly, edit `app/Factories/FilesystemFactory.php` and change line 40
from `'/../../..'` to `'/../..'`.  This fixes the bug.

Secondaly, edit `app/Webtrees.php` and change line 101 from
`'2.0.8'` to `'2.0.7'`.  This will enable the automatic upgrade.

## webtrees 1.7.10 – {{ site.latest_version_17 }}

There are several important [differences]({% link _upgrade/2.0.md %})
between webtrees 1.7 and webtrees 2.0.
You should read them before upgrading, as you may need to make changes
to your settings, your server configuration, or your workflow.

There is currently no automatic upgrade from webtrees 1.7 to webtrees 2.0,
so you will need to follow the instructions for a
[manual]({% link _upgrade/manual.md %}) upgrade.

## webtrees 1.4.0 – 1.7.9

You cannot upgrade directly to webtrees {{ site.latest_version}}.
Instead, you must first upgrade to webtrees {{ site.latest_version_17 }}.

## webtrees 1.0.0 – 1.3.2

You need to disable the [“media firewall”]({% link _upgrade/media-firewall.md %}).
Then you should upgrade to webtrees {{ site.latest_version_17 }}.

## phpGedView

There is a [migration wizard]({% link _upgrade/phpgedview.md %}) built into webtrees {{ site.latest_version_17 }}.
You should install this version, and then upgrade to webtrees {{ site.latest_version}}.
Note that you do not need to have a functioning phpGedView installation.
You need only the database and the `index/` folder.

