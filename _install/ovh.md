---
layout: documentation
title:  OVH webhosting
date:   2020-02-09
order:  99
---

OVH allows you to configure certain aspects of your account using a file `.ovhconfig` -
[see documentation](https://docs.ovh.com/gb/en/hosting/configuring-file-ovhconfig).

You may need to adjust some of these settings, by adding or updating lines in this file.

## PHP interface

OVH provides two ways to call PHP scripts: `php-cgi` and `php-fpm`.
Many users report that `php-fpm` does not work with webtrees 2.0.

Some pages make a second call to the web-server to create parts of the page.
For example, some of the home-page blocks, the charts, the calendar, etc.
With `php-fpm`, these fail to load - and the page just displays a spinning wheel.
To select `php-cgi`, use this option in `.ovhconfig`.

`app.engine=phpcgi`

## Mod-Security

The package `mod-security` is known to block certain webtrees scripts.
If some scripts fail silently, you can disable it using this option in `.ovhconfig`.

`http.firewall=none`

## Environment

For performance, you should generally enable production mode, using this option in `.ovhconfig`.

`environment=production`

However, if you are experiencing problems, you can switch back to development mode
while you investigate.

`environment=development`

