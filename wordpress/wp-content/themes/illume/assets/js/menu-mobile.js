document.addEventListener('DOMContentLoaded', function () {
  var submenuToggles = document.querySelectorAll(
    '.wp-block-navigation-submenu__toggle',
  );

  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function (event) {
      event.preventDefault();

      var li = toggle.parentElement;
      var submenu = li.querySelector('.wp-block-navigation__submenu-container');

      if (li.classList.contains('ddl-active')) {
        li.classList.remove('ddl-active');
        submenu.style.display = 'none';
      } else {
        closeAllSubmenus();
        li.classList.add('ddl-active');
        submenu.style.display = 'block';
      }
    });
  });

  function closeAllSubmenus() {
    submenuToggles.forEach(function (toggle) {
      var li = toggle.parentElement;
      var submenu = li.querySelector('.wp-block-navigation__submenu-container');

      li.classList.remove('ddl-active');
      submenu.style.display = 'none';
    });
  }
});
