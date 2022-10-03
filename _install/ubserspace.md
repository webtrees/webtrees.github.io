---
layout: documentation
title:  Uberspace webhosting
date:   2022-03-25
order:  99
---

Uberspace installs a non-standard PHP library `php-psr` as part of PHP 7.4.

This library in incompatible with webtrees and many other applications.

There is currently no known workaround.

Instead, you must switch to PHP 8.0 and use webtrees 2.1

For more details, see <https://github.com/jbboehr/php-psr/issues/88>.
