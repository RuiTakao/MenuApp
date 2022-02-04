<?php
require 'data/foodData.php';
require 'data/drinkData.php';

function foodMenuList ($menus, $category)
{
  foreach($menus as $menu){
    if($menu['category'] == $category){
      require "menu/food.php";
    }
  }
}

function drinkMenuList ($menus, $category)
{
  foreach($menus as $menu){
    if($menu['category'] == $category){
      require "menu/drink.php";
    }
  }
}

function recommendationMenu ($foods, $drinks){

  foreach($foods as $menu){
    if($menu['recommendation']){
      require 'menu/food.php';
    }
  }

  foreach($drinks as $menu){
    if($menu['recommendation']){
      require 'menu/drink.php';
    }
  }
}
