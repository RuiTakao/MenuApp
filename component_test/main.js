$(function () {
  $(".main_menu_lists:not(:first-of-type)").css("display", "none");
  $('.footer_nav_list').click(function () {
    var index = $('.footer_nav_list').index(this);
    $('.footer_nav_list').removeClass('current');
    $(this).addClass('current');
    $('.main_menu_lists').hide().eq(index).show();

    if($('.is-active').hasClass('current')){
      $('main').addClass('header_nav_height');
      $('.main_header_nav').addClass('add_header_nav');
    }
    if(!$('.is-active').hasClass('current')){
      $('main').removeClass('header_nav_height');
      $('.main_header_nav').removeClass('add_header_nav');
    }
  });
});
