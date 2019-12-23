/*
 * Toggle navigation bars
 */

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
