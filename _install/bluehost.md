---
layout: documentation
title:  Bluehost
date:   2020-02-16
order:  99
---

Bluehost servers use a very old version of the `php-intl` library - 4.2.1.

webtrees requires version 4.6 - which was released in 2010, and has been
included in standard builds of PHP 5.5 onwards.

The result is that webtrees is unable to make external HTTP requests.
You may see the error “Use of undefined constant INTL_IDNA_VARIANT_UTS46”
when you visit the control panel.

Bluehost support says that they have plans to upgrade.  Until then, you
will need to avoid webtrees features that make HTTP requests.

* Do not use the “geonames” service to search for place names.
* Disable the “check for updates” service.  To do this, you need
to set a future timestamp in one of the database tables.

```
REPLACE INTO wt_site_setting (setting_name, setting_value)
VALUES ('LATEST_WT_VERSION_TIMESTAMP', UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 1 YEAR)));
```
