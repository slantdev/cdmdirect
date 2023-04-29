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

  // Mobile Menu
  $('#mobilemenu-open').click(function (e) {
    e.preventDefault();
    $('#mobilemenu').removeClass('translate-x-full');
    $('#mobilemenu-overlay')
      .removeClass('invisible opacity-0')
      .addClass('visible opacity-100');
    $('body').addClass('overflow-y-hidden');
  });
  $('#mobilemenu-close, #mobilemenu-overlay').click(function (e) {
    e.preventDefault();
    $('#mobilemenu').addClass('translate-x-full');
    $('#mobilemenu-overlay')
      .removeClass('visible opacity-100')
      .addClass('invisible opacity-0');
    $('body').removeClass('overflow-y-hidden');
  });

  // Resources Filter
  $('.filter-resources').on('click', function (event) {
    $('#resources-search').val('');
    $('.filter-resources-buttons .filter-resources').removeClass(
      'filter-active'
    );
    $(this).addClass('filter-active');
    $('.resources-loader .spinning-loader')
      .removeClass('opacity-0')
      .addClass('opacity-100');
    $('.resources-grid .blocker').show();
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: ajax.url,
      dataType: 'html',
      data: {
        action: 'filter_resources',
        category: $(this).data('id'),
        postsperpage: $(this).data('postsperpage'),
      },
      success: function (res) {
        $('.resources-grid').html(res);
        $('.resources-loader .spinning-loader')
          .removeClass('opacity-100')
          .addClass('opacity-0');
      },
    });
  });

  // Resources Search
  $('#resources-search-button').on('click', function (event) {
    let search_query = $('#resources-search').val();
    //console.log('Query :', search_query);
    $.ajax({
      type: 'POST',
      url: ajax.url,
      dataType: 'html',
      data: {
        action: 'search_resources',
        query: search_query,
      },
      beforeSend: function () {
        $('.resources-loader .spinning-loader')
          .removeClass('opacity-0')
          .addClass('opacity-100');
        $('.resources-grid .blocker').show();
        $('.filter-resources').removeClass('filter-active');
      },
      success: function (res) {
        $('.resources-grid').html(res);
        $('.filter-resources[data-id="all"]').addClass('filter-active');
        $('.resources-loader .spinning-loader')
          .removeClass('opacity-100')
          .addClass('opacity-0');
      },
    });
  });
});
