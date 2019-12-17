---
layout: page
title: System requirements
---

# System requirements

To install **webtrees**, you need:

- A webserver. Apache, Nginx and IIS are the most common types. There are no requirements to use a specific type or version.
- Approximately 45MB of disk space for the application files, plus whatever is needed for your multi-media files, GEDCOM files and database.
- PHP. **webtrees** 1.7.14 requires PHP-5.3. If your server only offers PHP-5.2, then you will need to install **webtrees** 1.4.6. Note that some web hosts offer \*both\* PHP4 and PHP5, often with PHP4 as the default. If this is the case, you will be able to switch between the two using a control panel or a configuration file. Refer to your web host's support documentation for details.
    - PHP should be configured with the PHP/PDO library for MySQL. This is a server configuration option. It is enabled by default on most hosts. See <http://php.net/pdo>
    - PHP should be configured to allow sufficient server resources (memory and execution time) for the size of your system. Typical requirements are:
        - Small systems (500 individuals): 16-32MB, 10-20 seconds
        - Medium systems (5000 individuals): 32-64MB, 20-40 seconds
        - Large systems (50000 individuals): 64-128MB, 40-80 seconds
- MySQL 5.0.13 or later. Note that **webtrees** can share a single database with other applications, by choosing a unique table prefix during configuration. If the number of databases is not restricted, you can set up a database purely for use by **webtrees** and create a separate user and password for only your genealogy.
- Internet browser compatibility. **webtrees** supports the use of most current versions of open-source browsers such as Firefox, Chrome, and Safari. We will do our best to support others such as Opera and Internet Explorer, though not their earlier versions. Currently many things do not work well in IE6, and some not in IE7 either. We strongly recommend anyone using these obsolete browsers upgrade as soon as possible. We are also aware that IE provides poor right-to-left (RTL) language support generally, so cannot recommend it for sites requiring RTL languages.
- To view sites that contain both left-to-right and right-to-left text (e.g. English data on Hebrew pages), you will need to use a browser that provides support for the HTML5 dir="auto" attribute. At present, Internet Explorer (11 and lower) does not support this.
- HTML Frames. Note that **webtrees** uses cookies to track login sessions. Sites that make webtrees pages available inside an HTML Frames will encounter problems with login for versions 7, 8, and 9 of Internet Explorer. IE users should review the Privacy settings Tools / Internet Options for more details.
