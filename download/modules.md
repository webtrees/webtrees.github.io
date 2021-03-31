---
layout: page
title: Modules and themes
permalink: download/modules
date: 2020-01-03
---

webtrees is designed to be extended and modified using modules.
The following modules have been created by members of the webtrees community.

Before installing a module, make sure that the module is compatible with your version of webtrees.
Modules for webtrees 1.7 will not work with webtrees 2.0 and vice-versa.

For support or to report issues, please contact the author of the module.
To add your module to this list, please get in touch.

## Installing/removing modules in webtrees 2.0

To install a module in webtrees 2.0, copy it to the folder `/modules_v4/`.
Themes are just special types of module, and are installed in the same folder.
To remove a module, just delete it.
To temporarily disable a module, rename it from `/modules_v4/xxx` to `/modules_v4/xxx.disable`.

## Installing/removing modules in webtrees 1.7

In webtrees 1.7, themes and modules are different.
Themes are installed by copying them to the folder `/themes/`.
Modules are installed by copying them to the folder `/modules_v3/`.
To remove a module or theme, just delete it.

<!-- Module list in _data/modules.yml -->

----------

{% for module in site.data.modules %}

### {{ module.title }} - by {{ module.author }} {% if module.website_1_7 == module.website_2_0 %}`1.7` `2.0` - [website]({{ module.website_2_0 }}){% if module.demo_2_0 %} - [demo]({{ module.demo_2_0 }}){% endif %}{% else %}{% if module.website_1_7 %}`1.7` - [website]({{ module.website_1_7 }}) {% if module.demo_1_7 %}- [demo]({{ module.demo_1_7}} ){% endif %}{% endif %}{% if module.website_2_0 %}`2.0` - [website]({{ module.website_2_0 }}){% if module.demo_2_0 %} - [demo]({{ module.demo_2_0 }}){% endif %}{% endif %}{% endif %}

{{ module.description }}

----------
{% endfor %}