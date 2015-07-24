// contact-form-resize-fix
jQuery(document).ready(function($) {
  var winWidth = $(window).width();

  $(window).resize(checkForm);

  function checkForm() {
    console.log('This is from checkForm');
    // GET WIN WIDTH

    // GET ACTIVE TAB
    var activeTab = $('.responsive-tabs__list__item--active');
    console.log('This is activeTab: ');
    console.dir(activeTab);
  }

}); /* end of as page load scripts */
