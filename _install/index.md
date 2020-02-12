---
layout: page
title: Installing webtrees
permalink: install/
date:  2020-02-09
---

You should be able to install webtrees on most web-servers.
The setup process will check that your server has all the necessary
libraries and features installed.  If you prefer, you can read
the detailed [requirements]({% link _install/requirements.md%}).

* For PHP >= 7.1, you should install webtrees {{ site.latest_version }}
* For PHP <= 7.0, you should install webtrees {{ site.latest_version_17 }}

## Server-specific documentation

If you use one of the hosts or platforms listed below, there are some additional
things you should know.

* [MAMP]({% link _install/mamp.md %})
* [OVH]({% link _install/ovh.md %})
* [XAMPP]({% link _install/xampp.md %})

## Third-party installers

There are a number of unofficial third-party installers and pre-built packages.
If you have any problems with these installers, please contact the provider directly.

* [Softaculous][SOFTACULOUS]
* [Yunohost][YUNOHOST]
* [Docker][DOCKER]

[SOFTACULOUS]: https://www.softaculous.com/apps/others/webtrees
[YUNOHOST]: https://install-app.yunohost.org/?app=webtrees
[DOCKER]: https://github.com/Salokyn/webtrees/tree/docker-2.0/docker
