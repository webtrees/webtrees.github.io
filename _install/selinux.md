---
layout: documentation
title:  SELinux
date:   2023-05-30
order:  99
---

## SELinux

If your server uses SELinux, you need to configure it to work with webtrees.

### Read-write access

webtrees uses the folder `/data` for file storage.  To enable read-write access
to this folder, you should run these commands:

`semanage fcontext -a -t httpd_sys_rw_content_t "/path/to/webtrees/data(/.*)?"`

`restorecon -R /path/to/webtrees/data`

### Outgoing HTTP requests

webtrees needs to make outgoing HTTP requests for various reasons, including:

* check for updates
* geo-location lookups

To enable this, you should run this command:

`setsebool -P httpd_can_network_connect on`

