---
layout: documentation
title: System Requirements
order: 2
---

# System Requirements

To install webtrees, you need:

## Webserver
Apache, Nginx and IIS are the most common types. To use “pretty URLs”, you will need to configure URL rewriting.

## Database

MySQL is recommended, although PostgreSQL, SQL-Server and SQLite can be used. Some features rely on MySQL for collation. Other databases might not sort names according to local rules. webtrees uses a prefix for its table names, so you can install several instances of webtrees in the same database.

## Storage

Approximately 100MB of disk space for the application files, plus whatever is needed for your media files, GEDCOM files, and database.

## PHP

PHP 7.1 - 7.4. Servers with PHP 5.3 - 7.0 can use webtrees 1.7.

PHP should be configured to allow sufficient server resources (memory and execution time) for the size of your system. Typical requirements are:

- Small systems (500 individuals): 16–32 MB, 10–20 seconds
- Medium systems (5,000 individuals): 32–64 MB, 20–40 seconds
- Large systems (50,000 individuals): 64–128 MB, 40–80 seconds

## Browser Compatibility

webtrees is tested on recent versions of popular browsers such as Edge, Firefox, Chrome, and Safari. Support for other browsers and older versions is on a case-by-case basis.

To view sites that contain both left-to-right and right-to-left text (e.g. English data on Hebrew pages), you will need to use a browser that provides support for the HTML5 dir="auto" attribute. At present, Internet Explorer (11 and lower) does not support this.

Note that webtrees uses cookies to track login sessions. Sites that make webtrees pages available inside an HTML Frames will encounter problems with login for versions 7, 8, and 9 of Internet Explorer. IE users should review the Privacy settings Tools / Internet Options for more details.
