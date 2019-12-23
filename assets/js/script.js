function toggleClass(element, toggleClass) {
  if (element.classList) {
    element.classList.toggle(toggleClass);
  } else {
    // For IE9
    var classes = element.className.split(" ");
    var i = classes.indexOf(toggleClass);

    if (i >= 0) {
      classes.splice(i, 1);
    } else {
      classes.push(toggleClass);
    }

    element.className = classes.join(' ');
  }
}

function removeClass(element, removeClass) {
  if (element.classList) {
    element.classList.remove(removeClass);
  } else {
    // For IE9
    var classes = element.className.split(" ");
    var i = classes.indexOf(removeClass);

    if (i >= 0) {
      classes.splice(i, 1);
      element.className = classes.join(' ');
    }
  }
}

/*
 * Toggle navigation bars for mobile
 */

var siteNavToggle = document.getElementById('site-nav-toggle');
var navList = document.getElementById('site-navigation').getElementsByTagName('ul')[0];

siteNavToggle.onclick = function() {
  toggleClass(siteNavToggle, 'opened');
  toggleClass(navList, 'opened');
}

var secondaryNavToggle = document.getElementById('secondary-nav-toggle');
var pageSidebar = document.getElementById('page-sidebar');

if(secondaryNavToggle) {
  secondaryNavToggle.onclick = function() {
    toggleClass(secondaryNavToggle, 'opened');
    toggleClass(pageSidebar, 'opened');
  }
}

/*
 * Toggle site navigation dropdown menus
 */

var siteNavItems = document.getElementById('site-navigation').getElementsByTagName('li');
Array.from(siteNavItems).forEach(function(item, index) {
  item.addEventListener('click', function(event) {
    // Close all other dropdown menus
    for (var i = 0; i < siteNavItems.length; i++) {
      if ( i != index ) {
        removeClass(siteNavItems[i], 'opened');
      }
    }

    // Toggle clicked dropdown menu
    toggleClass(item, 'opened');
  });
});
