---
layout: documentation
title:  Cloudflare
date:   2020-03-08
order:  99
---

Cloudflare is a “caching proxy” service.  All requests to your site are
sent via Cloudflare.  Cloudflare will serve the static files (e.g. CSS and JS)
from its own cache, rather than from your server.

If you have a slow server, or a large number of visitors, then this
can improve the performance of your site.

However, when using this type of service, all requests to your site will come
from Cloudflare, and not from the remote user.  Hence you will only see
Cloudflare's IP address in your logs - not the IP address of the actual user.

Cloudflare provides details of the remote user in an HTTP header,
and you must tell webtrees that it is OK to use/trust this header.

Once you have finished the setup process, you will have a file `data/config.ini.php`.
Add the following line to that file :

```
trusted_headers="cf-connecting-ip"
```
