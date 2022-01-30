<?php

$menus = [
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "pixta_65917093_M-e1595214133530.jpg",
    "category" => "recommendation",
    "good" => false,
  ],
  [
    "name" => "マルゲリータ",
    "price" => 800,
    "img" => "ダウンロード.png",
    "category" => "recommendation",
    "good" => true,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "recommendation",
    "good" => false,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "one-item",
    "good" => true,
  ],
  [
    "name" => "唐揚げ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "one-item",
    "good" => true,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "one-item",
    "good" => true,
  ],
  [
    "name" => "サラダ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "rice",
    "good" => true,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "rice",
    "good" => true,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "rice",
    "good" => true,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "drink",
    "good" => false,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "drink",
    "good" => false,
  ],
  [
    "name" => "チーズピザ",
    "price" => 800,
    "img" => "ピザポケット2.jpg",
    "category" => "drink",
    "good" => false,
  ],
];

foreach($menus as $menu){
  if($menu['good']){
    echo $menu['name'];
  }
}
