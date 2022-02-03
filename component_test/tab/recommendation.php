<?php foreach($menus as $menu): ?>
  <?php if($menu['recommendation']): ?>
    <?php require 'menu/food.php'; ?>
  <?php endif; ?>
<?php endforeach; ?>
