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
    $("#mobilemenu-open").click(function(e) {
      e.preventDefault();
      $("#mobilemenu").removeClass("translate-x-full");
      $("#mobilemenu-overlay").removeClass("invisible opacity-0").addClass("visible opacity-100");
      $("body").addClass("overflow-y-hidden");
    });
    $("#mobilemenu-close, #mobilemenu-overlay").click(function(e) {
      e.preventDefault();
      $("#mobilemenu").addClass("translate-x-full");
      $("#mobilemenu-overlay").removeClass("visible opacity-100").addClass("invisible opacity-0");
      $("body").removeClass("overflow-y-hidden");
    });
    $("#header-search-button").on("click", function() {
      $("#header-search").toggleClass("show");
      $("#searchform-input").val("");
      $("#searchform-input").focus();
    });
    $(window).click(function() {
      if ($("#header-search").hasClass("show")) {
        $("#header-search").removeClass("show");
        $("#searchform-input").val("");
      }
    });
    $("#header-search, #header-search-button").click(function(event) {
      event.stopPropagation();
    });
    $(".filter-resources").on("click", function(event) {
      $("#resources-search").val("");
      $(".filter-resources-buttons .filter-resources").removeClass("filter-active");
      $(this).addClass("filter-active");
      $(".resources-loader .spinning-loader").removeClass("opacity-0").addClass("opacity-100");
      $(".resources-grid .blocker").show();
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: ajax.url,
        dataType: "html",
        data: {
          action: "filter_resources",
          category: $(this).data("id"),
          postsperpage: $(this).data("postsperpage")
        },
        success: function(res) {
          $(".resources-grid").html(res);
          $(".resources-loader .spinning-loader").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $("#resources-search-button").on("click", function(event) {
      let search_query = $("#resources-search").val();
      $.ajax({
        type: "POST",
        url: ajax.url,
        dataType: "html",
        data: {
          action: "search_resources",
          query: search_query
        },
        beforeSend: function() {
          $(".resources-loader .spinning-loader").removeClass("opacity-0").addClass("opacity-100");
          $(".resources-grid .blocker").show();
          $(".filter-resources").removeClass("filter-active");
        },
        success: function(res) {
          $(".resources-grid").html(res);
          $('.filter-resources[data-id="all"]').addClass("filter-active");
          $(".resources-loader .spinning-loader").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
  });
})();
