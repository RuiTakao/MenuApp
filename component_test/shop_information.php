<?php require 'component/head.php'; ?>
<?php require 'component/header.php'; ?>
<main>
  <div class="container">
    <ul>
    <?php foodMenuList($foods, $foodCategories['skewer']); ?>
    </ul>
  </div>
</main>
<?php require 'component/footer.php'; ?>
