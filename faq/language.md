---
layout: page
title: FAQ - How do I change the default language?
date: 2020-01-26
---

## How do I change the default language?

### Visitors

You cannot control the language used when visitors first arrive at your site.

Each visitor will see the language that they have chosen in their browser preferences.

To see the language preferences that your browser is sending, visit:

Control panel -> Server information -> PHP Variables

You will see an entry for `$_SERVER['HTTP_ACCEPT_LANGUAGE']`.

This entry contains a list of language codes and priority settings.

webtrees applies additional logic to match this request to the available languages.
Your visitor may request a language that is not available, such as `de-CH` (Swiss German).
Here, webtrees will match a similar language, such as `de` (standard German).

### Members

If a user is logged-in to your site, webtrees will remember
their preferred language, and will select it next time they log in.

### Search engines

Each tree has a configuration option “Language”.

This language is used for visitors who do not specify a language.
In practice, this applies only to search engines.
