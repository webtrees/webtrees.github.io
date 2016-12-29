---
layout: page
title: Search
permalink: search
---

<script>
	var results = new RegExp('[\?&]q=([^&#]*)').exec(window.location.href);
	$("input[name=q]").val(results[1] || '');
</script>

<script>
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

