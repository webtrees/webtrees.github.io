---
layout: documentation
title:  Blocking unwanted visitors
date:   2021-07-13
order:  2
---

Visitors to your site can generally be classified as good or bad.

Good visitors include:

* Human beings
* Search engines, that allow human beings to find your site.  For example, Google, Bing, DuckDuckGo, etc.
* Tools such as uptime monitors, site quality testers, etc.

Bad visitors include:

* Robots that collect data about your site to sell to others.  For example, advertisers, search-engine optimisers.
* Robots that search for vulnerabilities in your site.
* Badly written robots that place a high load on your server and slow it down for your good visitors.


## Robots blocked by default

webtrees includes a "Bad Bot Blocker" component.  This filters every request to your site.

The following robots are blocked by default.  When a robot is blocked, you will see a 406 status code in your web logs.

* Robots with a [user-agent string](https://en.wikipedia.org/w/index.php?title=User_agent_string) that identify themselves as collecting data for advertisers, search-engine-optimisers, etc.
* Robots that spoof their user-agent string.  For example, robots that claim to be from Google, but are not operating from a Google IP address.

## Blocking entire networks/organisations

The "Bad Bot Blocker" can also block entire networks.

The internet consists of many smaller connected networks.  Each of these networks has an identifier called an "AS number".

You can find out the AS number for an IP address using a `WHOIS` search.

To enable this facility, create an entry for `block_asn` in the file `/data/config.ini.php`.  This is free-format - webtrees will look for strings `ASnnnnn` anywhere in the entry.  For example:

```
block_asn="Bad company=AS123456, Evil organisation=AS654321"
```

Typically, you would use this to block server-hosting companies that have a reputation for allowing customers to host any type of service (spamming, scanning, hacking, etc.) without asking questions.  This is often called "Bullet-proof hosting".
