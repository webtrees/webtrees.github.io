---
layout: documentation
title: Upgrading
order: 4
---

# Upgrading

Upgrading webtrees is quick and easy. It is strongly recommended that you upgrade your installation whenever a new version is made available. Even minor webtrees version updates usually contain a significant number of bug fixes as well as interface improvements and program enhancements.

## Automatic Upgrade

webtrees has an automatic upgrade facility. An administrator upon logging in will receive notification when a new version is available and an option to start the automatic upgrade. If for some reason the automatic upgrade fails then a manual upgrade should be performed.

## Manual Upgrade

1. Now would be a good time to make a [backup](backup).
2. Download the latest version of webtrees available from [github.com](https://github.com/fisharebest/webtrees/releases/latest).
3. While you are in the middle of uploading the new files, a visitor to your site would encounter a mixture of new and old files. This could cause unpredictable behavior or errors. To prevent this, create a file `data/offline.txt`. While this file exists, visitors will see a temporary message. If the file contains a message, it will be shown to your users. Otherwise a default "site unavailable - come back later" message will be shown.
4. Unzip the .ZIP file, and upload the files to your web server, overwriting the existing files.
5. Delete the file `data/offline.txt`.

### Note for Macintosh Users

Step 4 assumes you are using a copy tool that **merges** directories rather than replaces them. (**Merge** is standard behavior on Windows and Linux.) If you use the Macintosh Finder or other similar tool to perform Step 4, it will **replace** your existing configuration, media, and other directories with the empty/default ones from the installation package. This would be very bad (but you did take a backup in Step 1, didn't you!). Further details and recommendations for suitable tools can be found by searching [google.com](https://www.google.com/#hl=en&q=merge+replace+directories+mac+finder).

If you have any problems or questions, help is available on the [forum](http://www.webtrees.net/index.php/en/forum).
