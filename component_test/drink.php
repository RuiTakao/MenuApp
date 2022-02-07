<?php require 'component/head.php'; ?>
<?php require 'component/header.php'; ?>
<main>
  <div class="container">
    <ul>
    <?php drinkMenuList($drinks, $drinkCategories['cocktail']); ?>
    </ul>
  </div>
</main>
<?php require 'component/footer.php'; ?>
