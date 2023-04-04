jQuery(function ($) {
  //the shrinkHeader variable is where you tell the scroll effect to start.
  var shrinkHeader = 100;
  headerShrink();
  $(window).scroll(function () {
    //console.log(scroll);
    headerShrink();
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
  function headerShrink() {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('.site-header').addClass('header-shrink');
    } else {
      $('.site-header').removeClass('header-shrink');
    }
  }

  $('.menu-has-article').hover(
    function () {
      // $('.menu-article').css({
      //   visibility: 'hidden',
      //   opacity: '0',
      //   zIndex: '-10',
      // });
      // $('.menu-article').fadeOut('slow', function () {});
      $('.menu-article').hide();
      let dataArticle = $(this).data('target');
      //console.log(dataArticle);
      $('#' + dataArticle).fadeIn('slow', function () {});
      // $('#' + dataArticle).css({
      //   visibility: 'visible',
      //   opacity: '100',
      //   zIndex: '0',
      // });
    },
    function () {
      // let dataArticle = $(this).data('target');
      // console.log(dataArticle);
      // $('#' + dataArticle).css({ visibility: 'hidden', opacity: '0' });
    }
  );

  $('.main-nav--ul > li').hover(
    function () {
      $('#main-nav').addClass('bg-brand-bluedark bg-opacity-95');
    },
    function () {
      $('#main-nav').removeClass('bg-brand-bluedark bg-opacity-95');
    }
  );
});
