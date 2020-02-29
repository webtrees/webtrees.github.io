---
layout: page
title: Developer documentation
permalink: develop/
date:  2020-02-20
---

{% assign doclist = site.develop | sort: 'order' %}
<ul>
    {% for doc in doclist %}
        {% if doc.title != page.title %}
            <li><a href="{{ doc.url }}">{{ doc.title }}</a></li>
        {% endif %}
    {% endfor %}
</ul>
