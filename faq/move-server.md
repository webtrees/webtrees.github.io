---
layout: page
title: FAQ - move to a new server
date: 2019-12-31
---

## How to move webtrees to a new server

1. On the old server, go to: `Control panel`, `Website`, `Website preferences` and review the settings:
    * If `Website URL` contains a value, then make certain that this URL will be correct on the new server.
    * If `Data folder` is not set to `data/` then make certain that this folder will be correct on the new server.

2. On the old server, go to: `Control panel`, `Website`, `Sign-in and registration` and review the settings:
    * If `Sign-in URL` contains a value, then make certain that this URL will be correct on the new server.

3. Install the same version of webtrees on the new server.  Also install any custom modules/themes.

5. Log out of the new server.

6. Copy your database to the new server.  You can use phpMyAdmin to create a `mysqldump.sql` file.

7. Copy the contents of your `/data/` folder (excluding `config.ini.php`) to the new server.

8. On the new server, set the correct values for `Website URL` and `Data folder`.

9. Complete!  You can log in to the new server.
