---
layout: documentation
title: Automatic upgrade
date:  2020-01-31
order: 1
---

Every 24 hours, webtrees will check for an updated version.
If an upgrade is available, there will be a message in the control panel,
with a link to install it.

Automatic upgrades are dependent on server permissions and resources.
 
* PHP scripts need permission to overwrite files on the server.
If you were prompted to change the permissions of the folder `/data` to `777`,
then you will **not** be able to use the automatic upgrade.
* The server must be sufficiently powerful to complete the
upgrade without exceeding any CPU and memory limits.
* The server must have approximately 130MB of free disk space
to store and unpack the new version.
  
The upgrade will typically take between 15 and 60 seconds.
If there is no response after five minutes, then it is likely
that a CPU time limit has been reached, and that the upgradeh as failed.
  
If the automatic upgrade fails for any reason, follow the
instructions for a [manual]({% link _upgrade/manual.md %}) upgrade.
