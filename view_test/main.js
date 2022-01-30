$(function () {
  //////////// 一番目以外のコンテンツは非表示
  $(".main_menu_lists:not(:first-of-type)").css("display", "none");
  // $(".main_menu_lists:not(:first-of-type)").css("display", "none");
  //////////// タブの制御
  $('.footer_nav_list').click(function () { // タブメニューをhoverしたら
    var index = $('.footer_nav_list').index(this); // hoverしたタブ番号を取得
    $('.footer_nav_list').removeClass('current'); // タブ現在地クラスを削除し、
    $(this).addClass('current'); // hoverしたタブにタブ現在地クラスを付与
    //////////// コンテンツの制御
    $('.main_menu_lists').hide().eq(index).show(); // hoverしてないコンテンツは非表示、hoverした番号は表示
  });
});
