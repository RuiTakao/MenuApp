<?php

// フードメニュー
$skewer = "串焼き";
$riceMenu = "ごはんもの";
$singleMenu = "一品";
$dessert = "デザート";

$menus = [
  [
    "name" => "もも串",
    "price" => 800,
    "img" => "もも串.jpg",
    "category" => $skewer,
    "recommendation" => false,
  ],
  [
    "name" => "つくね",
    "price" => 800,
    "img" => "つくね.jpg",
    "category" => $skewer,
    "recommendation" => true,
  ],
  [
    "name" => "ねぎま",
    "price" => 800,
    "img" => "ねぎま.jpg",
    "category" => $skewer,
    "recommendation" => false,
  ],
  [
    "name" => "オムライス",
    "price" => 800,
    "img" => "オムライス.jpg",
    "category" => $riceMenu,
    "recommendation" => true,
  ],
  [
    "name" => "ハヤシライス",
    "price" => 800,
    "img" => "ハヤシライス.jpg",
    "category" => $riceMenu,
    "recommendation" => false,
  ],
  [
    "name" => "焼きおにぎり",
    "price" => 800,
    "img" => "焼きおにぎり.jpg",
    "category" => $riceMenu,
    "recommendation" => false,
  ],
  [
    "name" => "だし巻き卵",
    "price" => 800,
    "img" => "だし巻き卵.jpeg",
    "category" => $singleMenu,
    "recommendation" => false,
  ],
  [
    "name" => "ポテト",
    "price" => 800,
    "img" => "ポテト.jpg",
    "category" => $singleMenu,
    "recommendation" => true,
  ],
  [
    "name" => "揚げ出し豆腐",
    "price" => 800,
    "img" => "揚げ出し豆腐.jpg",
    "category" => $singleMenu,
    "recommendation" => false,
  ],
  [
    "name" => "アイス",
    "price" => 800,
    "img" => "アイス.jpg",
    "category" => $dessert,
    "recommendation" => false,
  ],
  [
    "name" => "プリン",
    "price" => 800,
    "img" => "プリン.jpg",
    "category" => $dessert,
    "recommendation" => false,
  ],
  [
    "name" => "チョコケーキ",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $dessert,
    "recommendation" => true,
  ],
];

// ドリンクメニュー
$beer = "ビール";
$cocktail = "カクテル";
$shouchu = "焼酎";
$whisky = "ウィスキー";

$drink = [
  [
    "name" => "ビール",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $beer,
    "recommendation" => false,
  ],
  [
    "name" => "ジントニック",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $cocktail,
    "recommendation" => false,
  ],
  [
    "name" => "モスコミュール",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $cocktail,
    "recommendation" => false,
  ],
  [
    "name" => "モヒート",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $cocktail,
    "recommendation" => false,
  ],
  [
    "name" => "白霧島",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $shouchu,
    "recommendation" => false,
  ],
  [
    "name" => "富乃宝山",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $shouchu,
    "recommendation" => false,
  ],
  [
    "name" => "いいちこ",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $shouchu,
    "recommendation" => false,
  ],
  [
    "name" => "知多",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $whisky,
    "recommendation" => false,
  ],
  [
    "name" => "ブラックニッカ",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $whisky,
    "recommendation" => false,
  ],
  [
    "name" => "グレンフィディック",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $whisky,
    "recommendation" => false,
  ],
];

// ノンアルコール
$softDrink = [
  [
    "name" => "コカ・コーラ",
    "price" => 300,
  ],
  [
    "name" => "オレンジジュース",
    "price" => 300,
  ],
  [
    "name" => "烏龍茶",
    "price" => 300,
  ],
];

// foreach($menus as $menu){
//   if($menu['good']){
//     echo $menu['name'];
//   }
// }

function foodMenuList ($menus, $category)
{
  foreach($menus as $menu){
    if($menu['category'] == $category){
      require 'menu/food.php';
    }
  }
}
