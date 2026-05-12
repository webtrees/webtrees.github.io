---
layout: page
title: Installing webtrees
permalink: install/
date:  2023-07-26
---

You should be able to install webtrees on most web-servers.
The setup process will check that your server has all the necessary
libraries and features installed.  If you prefer, you can read
the detailed [requirements]({% link _install/requirements.md%}).

## Installation steps

* Check the version of PHP on your server.
* For PHP 8.3 to 8.5, download [webtrees-{{ site.latest_version_22 }}.zip][DOWNLOAD_22].
* For PHP 7.4 to 8.2, download [webtrees-{{ site.latest_version_21 }}.zip][DOWNLOAD_21].
* For PHP 7.1 to 7.3, download [webtrees-{{ site.latest_version_20 }}.zip][DOWNLOAD_20].
* Unpack this file on your computer.  You should have a folder called `webtrees`.
* Upload the contents of the `webtrees` folder to a folder on your web server.
* Visit your site in your web-browser, and follow the instructions.
* After the installation is complete, you will be prompted to create or import your first family tree.

## Server-specific documentation

If you use one of the hosts or platforms listed below, there are some additional
things you should know.

* [Cloudflare]({% link _install/cloudflare.md %})
* [MAMP]({% link _install/mamp.md %})
* [Microsoft/IIS]({% link _install/iis.md %})
* [OVH]({% link _install/ovh.md %})
* [SELinux]({% link _install/selinux.md %})
* [Synology]({% link _install/synology.md %})
* [Uberspace]({% link _install/ubserspace.md %})
* [XAMPP]({% link _install/xampp.md %})

## Third-party installers

There are a number of unofficial third-party installers and pre-built packages.
If you have any problems with these installers, please contact the provider directly.

* [Docker][DOCKER] and [Docker Compose][DOCKERCOMPOSE]
* [Installatron][INSTALLATRON]
* [OpenSuse][OPENSUSE]
* [Puppet][PUPPET]
* [Softaculous][SOFTACULOUS]
* [Yunohost][YUNOHOST]
* [Fedora Copr][COPR]

[DOCKER]: https://hub.docker.com/r/dtjs48jkt/webtrees
[DOCKERCOMPOSE]: https://hub.docker.com/r/nathanvaughn/webtrees
[DOWNLOAD_22]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version_22 }}/webtrees-{{ site.latest_version_22 }}.zip
[DOWNLOAD_21]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version_21 }}/webtrees-{{ site.latest_version_21 }}.zip
[DOWNLOAD_20]: https://github.com/fisharebest/webtrees/releases/download/{{ site.latest_version_20 }}/webtrees-{{ site.latest_version_20 }}.zip
[INSTALLATRON]: https://installatron.com/apps
[OPENSUSE]: https://build.opensuse.org/package/show/home:ecsos:server/webtrees
[PUPPET]: https://github.com/jjarokergc/puppet-webtrees
[SOFTACULOUS]: https://www.softaculous.com/apps/others/webtrees
[YUNOHOST]: https://install-app.yunohost.org/?app=webtrees
[COPR]: https://copr.fedorainfracloud.org/coprs/castedo/webtrees
