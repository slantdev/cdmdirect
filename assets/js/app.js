(() => {
  // resources/js/app.js
  jQuery(function($) {
    var shrinkHeader = 100;
    headerShrink();
    $(window).scroll(function() {
      headerShrink();
    });
    function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
    }
    function headerShrink() {
      var scroll = getCurrentScroll();
      if (scroll >= shrinkHeader) {
        $(".site-header").addClass("header-shrink");
      } else {
        $(".site-header").removeClass("header-shrink");
      }
    }
    $(".menu-has-article").hover(function() {
      $(".menu-article").hide();
      let dataArticle = $(this).data("target");
      $("#" + dataArticle).fadeIn("slow", function() {
      });
    }, function() {
    });
    $(".main-nav--ul > li").hover(function() {
      $("#main-nav").addClass("bg-brand-bluedark bg-opacity-95");
    }, function() {
      $("#main-nav").removeClass("bg-brand-bluedark bg-opacity-95");
    });
  });
})();
