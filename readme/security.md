---
layout: page
title: Security
---

# Security

Security in webtrees means ensuring your site is safe from unwanted intrusions, hacking, or access to data and configuration files. The developers of webtrees regard security as an extremely important part of its development and have made every attempt to ensure your data is safe.

The area most at risk of intrusion would be the `/data` folder that contains your `config.ini.php` file and various temporary files. If you are concerned there may be a risk there is a very simple test you can do: try to fetch the file `config.ini.php` by typing `[url to your server]/data/config.ini.php` in your web browser.

The most likely result is an "access denied" message like this:

```
Forbidden

You don't have permission to access /data/config.ini.php on this server.
```

This indicates that the protection built into webtrees is working, and no further action is required.

In the unlikely event you do fetch the file (you will just see a semicolon), then that protection is not working on your site, and you should take some further action.

If your server runs PHP in CGI mode, then change the permission of the `/data` folder to 700 instead of 777. This will block access to the httpd process, while still allowing access to PHP scripts.

This will work for perhaps 99&percnt; of all users. Only the remaining 1&percnt; should consider the most complex solution, moving the /data folder out of accessible web space. (**Note:** In many shared hosting environments this is not an option anyway.)

If you do find it necessary, following is an example of the process required:

If your home folder is something like `/home/username`, the root folder for your web site is `/home/username/public_html`, and you have installed webtrees in the `public_html/webtrees` folder, then you would create a new `data` folder in your home folder at the same level as `public_html`, such as `/home/username/private/data`, and place your GEDCOM (family tree) file there.

Then change the **Data folder** setting on the **Control panel** -> **Website** -> **Website preferences** page from the default `data/` to the new location `/home/username/private/data`.

You will then have **two** data directories:

- `[path to webtrees]/data` - just needs to contain config.ini.php
- `/home/username/private/data` - contains everything else

## Hypertext Transfer Protocol Secure (HTTPS)

webtrees supports [https](https://en.wikipedia.org/wiki/HTTP_Secure) access. You can set your website's URL with https by adding the following line to your `/data/config.ini.php` file:

```
base_url="https://www.example.com/webtrees"
```
