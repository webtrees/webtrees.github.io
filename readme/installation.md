---
layout: page
title: Installation
---

# Installation

Installing **webtrees** takes only a few minutes. All you need is a webserver with PHP and MySQL. Almost every web hosting service provides these.

If you have command-line access to your server, and administrator privileges, you can also [install webtrees using any RPM package manager](https://wiki.webtrees.net/en/Installation_using_RPM).

## Download and install the application files

- Download the latest version of **webtrees** from <http://launchpad.net/webtrees>
- Unzip the files and upload them to an empty folder on your web server.
- Open your web browser and type the URL for your **webtrees** site (for example, <http://www.yourserver.com/webtrees>) into the address bar.
- The **webtrees** setup wizard will start automatically.

## Server configuration check

The installation process starts with a page confirming the suitability of your server. If there are any problems, they will be listed here.

## Database connection

**webtrees** requires a MySQL database. The connection parameters will be provided by your server’s administrator.

## Database configuration

You need to tell **webtrees** which database to use.

If you do not know the name of the database, ask your server’s administrator.

If **webtrees** will be sharing a database with other applications (or other **webtrees** installations), you can choose a unique prefix for all the tables.

## Administrator account and email settings

You need to create an administrator account. You also have the option to configure your email.

After clicking continue, there may be a delay of up to a minute while **webtrees** creates your database and tables.

## Log in and start using webtrees

The installation is now complete. You should login with the username and password that you chose in the previous step.

## Create a family tree

Before you can access any genealogy functions, you must create a family tree. The name you choose here will be part of the URL of your site. After you have created a family tree, you will be able to enter data or upload a GEDCOM file.

Alternatively, you can import your family trees and configuration settings from an existing PhpGedView installation on the same server by using the [PGV import tool](converting-from-phpgedview).

## Next steps

There are _lots_ of configuration options. You'll probably want to review the privacy settings first. Don't worry too much about all the other options - the defaults are good for most people. If you get stuck, there's lots of built-in help and you can get friendly advice from the [help forum](http://www.webtrees.net/forum).
