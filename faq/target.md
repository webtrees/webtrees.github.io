---
layout: page
title: FAQ - How do I force external links to open in new tabs/windows?
date: 2020-05-27
---

## How do I force external links to open in a new tab/window?

Please don’t do this!

It provides a poor user experience for many reasons.

* It breaks the flow of navigation.
From a new tab/window, there is no “Back” button to return to your site.
* It takes control away from the user.
They can currently use CTRL-click, right-click or long-touch to open a link in a new tab/window.
There is no way for them to open a link in the same window.
* Most web browsing happens on phones and tables - which do not use tabs or windows.
Managing “windows” on these devices is usually cumbersome.

But if you really must, then enable the module “CSS and JS” and add the
following to the `<body>` section:

```
<script>
document.addEventListener('click', function(event) {
  if (event.target.tagName === 'A' && !event.target.href.includes('//' + location.hostname)) {
      event.target.target="_blank";
      event.target.rel="noopener";
  }
});
</script>
```
