---
layout: page
title: Security
---

# Security

**Security in _webtrees_ means ensuring your site is safe from unwanted intrusions, hacking, or access to data and configuration files. The developers of _webtrees_ regard security as an extremely important part of its development and have made every attempt to ensure your data is safe.**

The area most at risk of intrusion would be the /data folder that contains your config.ini.php file, and various temporary files. If you are concerned there may be a risk there is a very simple test you can do: try to fetch **config.ini.php** by typing **http://**_url to your site_**/data/config.ini.php** in your web browser.

The most likely result is an "access denied" message like this:

---

**Forbidden**

You don't have permission to access /data/xxxx.ged on this server.

---

This indicates that the protection built into **webtrees** is working, and no further action is required.


In the unlikely event you do fetch the file (you will just see a semicolon), then that protection is not working on your site and you should take some further action.

If your server runs PHP in CGI mode, then change the permission of the /data directory to 700 instead of 777. This will block access to the httpd process, while still allowing access to PHP scripts.

This will work for perhaps 99% of all users. Only the remaining 1% should consider the most complex solution, moving the /data/ directory out of accessible web space. (**_Note:_** In many shared hosting environments this is not an option anyway.)


If you do find it necessary, following is an example of the process required:

If your home directory is something like **/home/username**, and the root directory for your web site is **/home/username/public_html**, and you have installed webtrees in the **public_html/webtrees** directory, then you would create a new **data** folder in your home directory at the same level as your public_html directory, such as **/home/username/private/data**, and place your GEDCOM (family tree) file there.

Then change the **Data file directory** setting on the Admin --> Site Administration page from the default **data/** to the new location **/home/username/private/data**

You will have **two** data directories:

- [path to webtrees]/data - just needs to contain config.ini.php
- /home/username/private/data - contains everything else

## Hypertext Transfer Protocol Secure (HTTPS)

**webtrees** supports [https](https://en.wikipedia.org/wiki/HTTP_Secure) access. If your website is configured with mandatory or optional https support **webtrees** will operate correctly in either mode.

If your website is configured with optional https support, **webtrees** can be configured to switch to https at login. To enable https at login, set the **Login URL** setting on the Control Panel --> Login and Registrations page to your https login URL, which is often in the form https://example.com/admin.php (substitute your domain for example.com).

If you have set the **Website URL** on the Control Panel --> Website preferences tab with an http URL, that will take precedence and redirect your login page back to http. You will probably need the **Website URL** to be blank to use the **Login URL**.

**Warning:** misconfiguration can disable your login links. If this occurs, access the login by typing the correct URL directly into your browser's address input. 
