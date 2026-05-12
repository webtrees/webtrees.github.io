---
layout: page
title: FAQ - Timeouts
date: 2022-11-19
---

## Timeouts

Your server has three different time limits that concern webtrees.

### PHP timeout

PHP scripts are terminated when they reach a time limit.  By default, this limit
is 30 seconds.

You can see this limit in: Control panel -> Server information -> max_execution_time

You may be able to change this limit using a `php.ini` file or a control panel.

### Webserver timeout

This is usually 30 or 60 seconds.  Your webserver will wait this number of
seconds for your PHP scripts to generate a response.

If PHP takes longer than this, the  webserver will create an error page.
This will often have the code 502 (bad gateway) or 504 (gateway timeout).

Note that although the webserver sends a timeout error, PHP will continue to run
until it reaches its own time limit.
When the PHP script ends, the output from it will be discarded.

### Database timeout

Your database may close its connection with you after a period of inactivity.

You may encounter this limit when webtrees is doing lots of processing that does
not connect to the database.  For example, copying lots of files during an upgrade.

## Recommended settings

Your PHP time limit should be LESS than the webserver time limit.
webtrees can detect the PHP time limit, and automatically split long
requests into smaller ones.

For example, if the PHP limit is 30 seconds, webtrees will create lots of
small requests that stop after 27 seconds.
