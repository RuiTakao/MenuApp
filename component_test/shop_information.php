<?php require 'component/head.php'; ?>
<main>
  <div class="container">
    <ul>
    <?php foodMenuList($foods, $foodCategories['skewer']); ?>
    </ul>
  </div>
</main>
<footer>
  <nav class="footer_nav container">
    <ul class="footer_nav_lists">
      <a href="shop_information.php" class="footer_nav_list current">
        <li>店舗情報</li>
      </a>
      <a href="index.php" class="footer_nav_list">
        <li>オススメ</li>
      </a>
      <a href="food.php" class="footer_nav_list">
        <li>フード</li>
      </a>
      <a href="drink.php" class="footer_nav_list">
        <li>ドリンク</li>
      </a>
    </ul>
  </nav>
</footer>
<?php require 'component/footer.php'; ?>
