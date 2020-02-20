---
layout: page
title: Administration
permalink: admin/
date:  2020-02-20
---

{% assign doclist = site.admin | sort: 'order' %}
<ul>
    {% for doc in doclist %}
        {% if doc.title != page.title %}
            <li><a href="{{ doc.url }}">{{ doc.title }}</a></li>
        {% endif %}
    {% endfor %}
</ul>
