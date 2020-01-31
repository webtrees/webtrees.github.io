---
layout: page
title: Read me
permalink: readme/
---

Basic instructions for installing and managing webtrees

{% assign doclist = site.readme | sort: 'order' %}
<ul>
    {% for doc in doclist %}
        {% if doc.title != page.title %}
            <li><a href="{{ doc.url }}">{{ doc.title }}</a></li>
        {% endif %}
    {% endfor %}
</ul>
