---
layout: documentation
title:  Server Requirements
date:   2022-10-18
order:  1
---

## PHP Requirements

| webtrees branch | status              | latest version               | PHP 5.3-5.6 | PHP 7.0-7.3 | PHP 7.4 | PHP 8.0-8.2 |
|-----------------|---------------------|------------------------------|-------------|-------------|---------|-------------|
| 2.2             | development         | {{ site.latest_version_22 }} | ❌           | ❌           | ❌       | ✅            |
| 2.1             | stable              | {{ site.latest_version_21 }} | ❌           | ❌           | ✅       | ✅            |
| 2.0             | security fixes only | {{ site.latest_version_20 }} | ❌           | ✅           | ✅       | ❌            |
| 1.7             | end-of-life         | {{ site.latest_version_17 }} | ✅           | ✅           | ❌       | ❌            |
| 1.4             | end-of-life         | {{ site.latest_version_14 }} | ✅           | ❌           | ❌       | ❌            |

## Database Requirements

| webtrees branch | status              | latest version               | MySQL  | MariaDB | SQLite   | SQL Server | PostgreSQL |
|-----------------|---------------------|------------------------------|--------|---------|----------|------------|-----------|
| 2.2             | development         | {{ site.latest_version_22 }} | ✅ 5.7+ | ✅ 10.3+ | ✅ 3.8.8+ | ✅ 2017+    | ✅ 10.0+   |
| 2.1             | stable              | {{ site.latest_version_21 }} | ✅ 5.7+ | ✅ 10.2+ | ✅ 3.8.8+ | ✅ 2017+    | ✅ 9.6+    |
| 2.0             | security fixes only | {{ site.latest_version_20 }} | ✅ 5.6+ | ✅ 10.1+ | ❌        | ❌          | ❌         |
| 1.7             | end-of-life         | {{ site.latest_version_17 }} | ✅ 5.5+ | ✅ 5.5+  | ❌        | ❌          | ❌         |
| 1.4             | end-of-life         | {{ site.latest_version_14 }} | ✅ 5.5+ | ✅ 5.5+  | ❌        | ❌          | ❌         |

## Web-server requirements

You will need approximately 100MB of disk space for webtrees files - plus whatever
is needed for your media and GEDCOM files.

webtrees supports “pretty URLs”, using web-server rewrite rules.
You should not enable this until after the setup is complete.
Otherwise the setup wizard may not be able to detect the base URL.
