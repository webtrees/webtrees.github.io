---
layout: documentation
title:  Using webtrees behind a proxy server
date:   2020-02-20
order:  6
---

## What is a proxy server?

A proxy server is a computer that sits between your web-server and
the rest of the internet.  They can be used to;
 
* provide security by blocking malicious requests
* help performance by caching responses

A frequently used proxy service is [Cloudflare](https://www.cloudflare.com).

## What is different about using a proxy server?

When you use a proxy server, webtrees sees the requests as coming from the
proxy server, not from the remote user.

This means that all your logs would show the same IP address,
and that webtrees would not be able to filter bad requests.

## How do I tell webtrees about my proxy server?

webtrees needs the proxy information before it connects to the database.
For this reason, the settings are stored in the file `data/config.ini.php`,
rather than in the database.

There are two settings.  Both can take a single value, or a comma-separated list.

If your proxy sets the original IP address in a HTTP header, then
you just need to give the name of the header.
For Cloudflare, this would be:

```
trusted_headers="cf-connecting-ip"
```

Alternatively, you may know the IP address of your proxy server.
This can be either a single address, or a range of addresses in CIDR format.

```
trusted_proxies="192.168.0.0/24"
```
