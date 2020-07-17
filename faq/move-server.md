---
layout: page
title: FAQ - move to a new server
date: 2019-12-31
---

## How to move webtrees to a new server

1. On the old server, go to: `Control panel`, `Website`, `Website preferences` and review the settings:
    * If `Data folder` is not set to `data/` then make certain that this folder will be correct on the new server.

2. Install the same version of webtrees on the new server.  Also install any custom modules/themes.

3. Log out of the new server.

4. Copy your database to the new server.  You can use phpMyAdmin to create a `mysqldump.sql` file.

5. Copy the contents of your `/data/` folder (excluding `config.ini.php`) to the new server.

6. On the new server, set the correct value for `Data folder`.

7. Complete!  You can log in to the new server.
