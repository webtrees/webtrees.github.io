---
layout: documentation
title:  Synology NAS hosting
date:   2021-01-10
order:  99
---

This procedure if for Synology NAS running DiskStation Manager (DSM) version 6.X.

# Pre-requisites

## Packages Installation

Open the DiskStation Manager interface. Use the Package Center to install the following packages (note they may already be installed):
* Web Station
* MariaDB 10
* phpMyAdmin (only required for initial set-up of the database, may be removed once webtrees is running).
* PHP (install the latest version available for uour NAS, 7.3 being the minimum recommended version).

## Webstation configuration

1. In DSM, open "Web Station".
2. Click on "General Setting" and check which PHP profile is being used ("Default PHP 7.4" in the below example):
   ![Click on General Settings, check PHP profile.](/assets/img/synology/WS-GeneralSettings.png)
3. Click on "PHP Settings" then select the the PHP profile used by Web Station:
   ![Click on PHP Settings, select default PHP profile.](/assets/img/synology/WS-PHPSettings.png)
4. Edit the selected PHP profile, make sure
   - all extensions are activated in the Extensions list.
   - neither "Enable Xdebug" nor "Enable display_errors to display PHP error messages" are selected.
   ![Edit the default PHP profile, activate all extensions.](/assets/img/synology/WS-PHPProfileSettings.png)
5. Click "OK".

## MySQL/MariaDB configuration

### Confirm MySQL/MariaDB server port

1. In DSM, open "MariaDB 10".
2. Check/confirm which port MariaDB is running on. Default is 3307.
   ![Check the MariaDB 10 port. Default is 3307 on Synology NAS.](/assets/img/synology/WS-MariaDBSettings.png)

### MariaDB user and database configuration

1. In DSM, open "phpMyAdmin", and log-in using a profile allowed to create databases and profiles/users (e.g. "root").
2. Click on "User account", then click on "Add user account":
   ![Add a user account.](/assets/img/synology/WS-MariaUserAccounts.png)
3. Choose the database sessings:
   - "User name" will be both the user name and the database name. **Note it in order not to forget it!**
   - "Host name" must be set to "localhost" for safety reasons.
   - Generating a complex/random password is recommended. **Note it in order not to forget it!**
   - Tick "Create database with same name and grant all privileges."
   ![Recommended user settings.](/assets/img/synology/WS-MariaUserAccountsSettings.png)
4. Click "Go" at the bottom right to generate both the user and its associated database.

# Webtrees installation

## Moving the files to your NAS

1. Having installed PHP >= 7.3, you can safely [download the latest verion of webtrees](https://webtrees.net/download).
2. Unpack this file on your computer.  You should have a folder called `webtrees`.
3. On you NAS, open "File Station", navigate to your `web` folder.
4. Create a `webtrees` folder (or any other name) inside your .
5. Drag and drop the content the `webtrees` folder on your computer in the `webtrees` folder created at step 4 ("File Station" supports multiple files and folders drag and drop).
   ![Drag and drop webtrees files into File Station.](/assets/img/synology/WS-MoveWebtreesFiles.png)

## Setting main folder rights

1. Still in "File Station", right click on the `webtrees` (or any other name) folder you created at step 4, then click on "Properties". Click on the "Permission" tab.
2. Click on "Create", then fill the "Permission Editor" window (this will allow webtrees to automatically update):
   - User of group: http
   - Inherit from: \<None\>
   - Type: Allow
   - Apply to: All
   - Leave "Administration" unticked.
   - Do not select anything in "Administration" rights.
   - Select everything for "Read" rights.
   - Select everything but "Delete" for "Write" rights.
   ![Main folder rights.](/assets/img/synology/WS-MainFolderRights.png)
   - Once done click "OK".
3.  Select "Apply to this folder, sub-folders and files", then click "OK".
   ![Main folder properties.](/assets/img/synology/WS-MainFolderProperties.png)

## Setting main folder rights

1. Still in "File Station", right click on the `data` sub-folder of your webtrees install folder, then click on "Properties". Click on the "Permission" tab.
2. Click on "Create", then fill the "Permission Editor" window (this will allow webtrees to automatically update):
   - User of group: http
   - Inherit from: <None>
   - Type: Allow
   - Apply to: All
   - Leave "Administration" unticked.
   - Do not select anything in "Administration" rights.
   - Select everything for "Read" rights.
   - Select everything for "Write" rights.
   ![Main folder rights.](/assets/img/synology/WS-DataFolderRights.png)
   - Once done click "OK".
3. Select "Apply to this folder, sub-folders and files", then click "OK".
   ![Main folder properties.](/assets/img/synology/WS-MainFolderProperties.png)

## Configuring webtrees

1. Run the webtrees configuration wizard.
2. Once at the "Database connection" step, enter the following settings:
   - Server name: 127.0.0.1
   - Port number: 3307
   - Database user account: the one you noted at step 3 of "MariaDB user and database configuration".
   - Database password: the one you noted at step 3 of "MariaDB user and database configuration".
   - Database name: identical to the database user account.
   - Table prefix: leave "wt_"
   ![Main folder properties.](/assets/img/synology/WS-MainFolderProperties.png)
3. Last step is to create the user account that will be used as your main Webtrees account.

Any question, post it on the [webtrees Forum](https://www.webtrees.net/index.php/en/forum).
