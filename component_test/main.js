$(function () {
  // footer_nav タブ アクション
  $(".recommendation_lists:not(:first-of-type)").css("display", "none");
  $('.recommendation_nav').click(function () {
    var index = $('.recommendation_nav').index(this);
    $('.recommendation_nav').removeClass('current');
    $(this).addClass('current');
    $('.recommendation_lists').hide().eq(index).show();
  });

  $('main_header_nav_lists_food > a[href^="#"]').click(function() {
    // スクロールの速度
    let speed = 400; // ミリ秒で記述
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});
