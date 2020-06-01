---
layout: page
title: Search
date: 2019-12-31
sitemap:
    exclude: yes
---

<form action="/search">
  <input type="search" placeholder="Search" name="q" accept-charset="utf-8">
</form>

<script>
/*
 * Populate title with search term
 */

const urlParams = new URLSearchParams(window.location.search);
const query = urlParams.get('q');

if (query) {
  var pageHeading = document.getElementsByTagName('h1')[0];
  pageHeading.innerHTML += ' for \'' + query + '\'';
}

/*
 * Get search results
 */

	(function() {
		var cx = '000152751295590832558:29llhg8imvi';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
	})();
</script>
<gcse:search></gcse:search>
