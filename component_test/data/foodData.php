<?php

// フードカテゴリー
$foodCategories = [
  'skewer' => '串焼き',
  'riceMenu' => 'ごはんもの',
  'singleMenu' => '一品',
  'dessert' => 'デザート',
];

// フードメニュー
$foods = [
  [
    "name" => "もも串",
    "price" => 800,
    "img" => "もも串.jpg",
    "category" => $foodCategories['skewer'],
    "recommendation" => false,
  ],
  [
    "name" => "つくね",
    "price" => 800,
    "img" => "つくね.jpg",
    "category" => $foodCategories['skewer'],
    "recommendation" => true,
  ],
  [
    "name" => "ねぎま",
    "price" => 800,
    "img" => "ねぎま.jpg",
    "category" => $foodCategories['skewer'],
    "recommendation" => false,
  ],
  [
    "name" => "オムライス",
    "price" => 800,
    "img" => "オムライス.jpg",
    "category" => $foodCategories['riceMenu'],
    "recommendation" => true,
  ],
  [
    "name" => "ハヤシライス",
    "price" => 800,
    "img" => "ハヤシライス.jpg",
    "category" => $foodCategories['riceMenu'],
    "recommendation" => false,
  ],
  [
    "name" => "焼きおにぎり",
    "price" => 800,
    "img" => "焼きおにぎり.jpg",
    "category" => $foodCategories['riceMenu'],
    "recommendation" => false,
  ],
  [
    "name" => "だし巻き卵",
    "price" => 800,
    "img" => "だし巻き卵.jpeg",
    "category" => $foodCategories['singleMenu'],
    "recommendation" => false,
  ],
  [
    "name" => "ポテト",
    "price" => 800,
    "img" => "ポテト.jpg",
    "category" => $foodCategories['singleMenu'],
    "recommendation" => true,
  ],
  [
    "name" => "揚げ出し豆腐",
    "price" => 800,
    "img" => "揚げ出し豆腐.jpg",
    "category" => $foodCategories['singleMenu'],
    "recommendation" => false,
  ],
  [
    "name" => "アイス",
    "price" => 800,
    "img" => "アイス.jpg",
    "category" => $foodCategories['dessert'],
    "recommendation" => false,
  ],
  [
    "name" => "プリン",
    "price" => 800,
    "img" => "プリン.jpg",
    "category" => $foodCategories['dessert'],
    "recommendation" => false,
  ],
  [
    "name" => "チョコケーキ",
    "price" => 800,
    "img" => "チョコケーキ.jpg",
    "category" => $foodCategories['dessert'],
    "recommendation" => true,
  ],
];
