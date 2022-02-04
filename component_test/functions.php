<?php
require 'data/foodData.php';
require 'data/drinkData.php';

function foodMenuList ($menus, $category)
{
  foreach($menus as $menu){
    if($menu['category'] == $category){
      require 'menu/food.php';
    }
  }
}

function recommendationMenu ($foods, $drinks){
  $menus = array_merge($foods,$drinks);

  foreach($menus as $menu){
    if($menu['recommendation']){
      require 'menu/food.php';
    }
  }
}
