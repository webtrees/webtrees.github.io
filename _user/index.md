---
layout: page
title: User documentation
permalink: user/
date:  2023-08-02
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
* <https://books2read.com/b/47We9g> (English) by Richard Underwood
* <https://wiki.genealogy.net/Webtrees_Handbuch> (German)
* <https://wtwiki.ausmis.com> (Chinese)
