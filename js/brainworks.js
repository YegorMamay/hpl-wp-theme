(function ($) {
  "use strict";

  $(function () {
    console.info("The site developed by BRAIN WORKS digital agency");
    console.info("Сайт разработан маркетинговым агентством BRAIN WORKS");

    $('html').removeClass('no-js').addClass('js');

    scrollTop('.js-scroll-top');

    // prefooter height
    var prefooterHeight = $(".prefooter").outerHeight();
    var footerHeight = $(".page-footer").outerHeight();
    var footerAndPreFooterSum = prefooterHeight + footerHeight;
    $(".page-wrapper").css({
      "padding-bottom": footerAndPreFooterSum + "px"
    });
    // prefooter height end


  });

  /**
   * Scroll Top
   *
   * @example
   * scrollTop('.js-scroll-top');
   * @author Fedor Kudinov <brothersrabbits@mail.ru>
   * @param {(string|Object)} element - selected element
   */
  function scrollTop(element) {
    var el = $(element);

    el.on('click touchend', function () {
      $('html, body').animate({scrollTop: 0}, 'slow');
      return false;
    });

    $(window).on('scroll', function () {
      var scrollPosition = $(this).scrollTop();
      if (scrollPosition > 200) {
        if (!el.hasClass('is-visible')) {
          el.addClass('is-visible');
        }
      } else {
        el.removeClass('is-visible');
      }
    });
  }

})(jQuery);
