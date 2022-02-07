<?php require 'component/head.php'; ?>
<?php require 'component/header.php'; ?>
<main>
  <div class="container">
    <ul class="food_menu_lists">
    <?php foodMenuList($foods, $foodCategories['skewer']); ?>
    </ul>
    <ul class="food_menu_lists">
    <?php foodMenuList($foods, $foodCategories['riceMenu']); ?>
    </ul>
    <ul class="food_menu_lists">
    <?php foodMenuList($foods, $foodCategories['singleMenu']); ?>
    </ul>
    <ul class="food_menu_lists">
    <?php foodMenuList($foods, $foodCategories['dessert']); ?>
    </ul>
  </div>
</main>
<?php require 'component/footer.php'; ?>
