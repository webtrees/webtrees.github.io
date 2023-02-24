---
layout: page
title: FAQ - Downgrade
date: 2019-12-31
---

## Can I downgrade to an earlier version?

In general no.  Upgrades may make changes to the database structure (often called the “schema”).  The old code will not work with the new database structure.

Therefore you can only downgrade to a version that uses the same database structure.

In webtrees 1.x, look in the file `include/session.php` for a line that looks like this:

```
define('WT_SCHEMA_VERSION', 34);
```

In webtrees 2.x, look in the file `app/Webtrees.php` for a line that looks like this:

```
public const SCHEMA_VERSION = 43;
```

If both versions of webtrees have the same schema version,
then you can downgrade.

To downgrade, follow the same procedure as upgrading.
