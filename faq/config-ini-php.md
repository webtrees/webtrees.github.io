---
layout: page
title: FAQ - Template for config.ini.php
date: 2019-12-31
---

## What should the file data/config.ini.php look like?

This is a typical `config.ini.php`


```
; <?php exit; ?> DO NOT DELETE THIS LINE
dbtype="mysql"
dbhost="localhost"
dbport="3306"
dbuser="username"
dbpass="secret"
dbname="webtrees"
tblpfx="wt_"
base_url="https://www.example.com/webtrees"
rewrite_urls="0"
```

NOTE: if you create this file with a text editor on Microsoft Windows, be sure to save the
file in the format "UTF8 without Byte-Order-Mark".
