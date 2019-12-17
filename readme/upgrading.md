---
layout: page
title: Upgrading
---

# Upgrading

Upgrading **webtrees** is quick and easy. It is strongly recommended that you upgrade your installation whenever a new version is made available. Even minor **webtrees** version updates usually contain a significant number of bug fixes as well as interface improvements and program enhancements. The Administration page of your **webtrees** installation will display a notification whenever a new version is available.

If you are not in the habit of making regular backups, now would be a good time!

## Automatic upgrades

**webtrees** 1.5.1 and later has the ability to upgrade itself automatically. If an upgrade is available, then the next time you log in as an administrator, you will be redirected to the upgrade wizard.

The upgrade wizard relies on the following server features.

- The ability to fetch remote files over HTTPS. In your PHP Information page, the entry for **Registered Stream Socket Transports** needs to include **ssl**.
- The ability to overwrite local files. This means that the webserver must execute scripts with the same account that owns them. This is generally known as **CGI** mode or similar. If your webserver executes scripts as an anonymous user, it will not have permission to update files. This is generally known as **Apache** mode or similar. In your PHP Information page, this setting is called **Server API**.

If these are unavailable, you'll be prompted to perform a manual upgrade.

Note that due to a bug in 1.6.0 and 1.6.1, a small fix needs to be applied before the upgrade wizard will work. See the [forum](https://www.webtrees.net/index.php/en/forum/2-open-discussion/29939-webtrees-1-6-2-released) for details.

## Manual upgrades

1. If you are upgrading from 1.3.2 (or earlier), and you have used the media firewall, then please read the [Media Firewall](../administration-guide/media-firewall) page before upgrading.
2. If your webserver runs PHP 5.2, then you should install **webtrees** 1.4.6, rather than 1.7.14.
3. Download **webtrees-1.7.14.zip** from <https://github.com/fisharebest/webtrees/releases/download/1.7.14/webtrees-1.7.14.zip>
4. While you are in the middle of uploading the new files, a visitor to your site would encounter a mixture of new and old files. This could cause unpredictable behaviour or errors. To prevent this, create the file **data/offline.txt**. While this file exists, visitors will see a "site unavailable - come back later" message.
5. Unzip **webtrees-1.7.14.zip**, and upload the files to your web server, overwriting the existing files.
6. Delete the file **data/offline.txt**

_NOTE for Macintosh users. Step 5 assumes you are using a copy tool that **merges** directories rather than **replaces** them. (Merge is standard behaviour on Windows and Linux.) If you use the Macintosh Finder or other similar tool to perform this step, it will **replace** your /data (configuration and media firewall files), /media folder and images, and other directories with the empty/default ones from the installation. This would be very bad (but you did make a backup in step 1, didn't you!). Further details and recommendations for suitable tools can be found by searching [google.com](https://www.google.com/#hl=en&q=merge+replace+directories+mac+finder). You may also wish to review a detailed, recommended Mac OS X upgrade procedure contained in [a forum post on this topic](http://webtrees.net/index.php/en/forum/27-help-for-ver-1-3-latest-release/26798)._

_NOTE for anyone using custom code (modules, themes, etc.). If you are using any custom modules or themes, then you should upgrade these at the same time. Old modules and themes are unlikely to work with newer versions of **webtrees** as the programming interface changes regularly. If you have many any local modifications to the code, remember to make them again in your new code._

If you have any problems or questions, help is available on the [webtrees forum](http://www.webtrees.net/index.php/en/forum). 
