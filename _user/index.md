---
layout: page
title: User documentation
permalink: user/
date:  2022-10-13
---

{% assign doclist = site.user | sort: 'order' %}
<ul>
    {% for doc in doclist %}
        {% if doc.title != page.title %}
            <li><a href="{{ doc.url }}">{{ doc.title }}</a></li>
        {% endif %}
    {% endfor %}
</ul>

There is some unofficial (but pretty good!) documentation available at
* <https://richard-underwood.com/product/webtrees-manual> (English)
* <https://wiki.genealogy.net/Webtrees_Handbuch> (German)
