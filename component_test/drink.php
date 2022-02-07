<?php require 'component/head.php'; ?>
<header>
  <h1 class="header-logo">Izakaya TKO</h1>
  <nav class="main_header_nav container">
    <ul class="main_header_nav_lists_drink">
    <?php foreach($drinkCategories as $category): ?>
      <a href="#" class="main_header_nav_list">
        <li><?= $category; ?></li>
      </a>
    <?php endforeach; ?>
    </ul>
  </nav>
</header>
<main>
  <div class="container">
    <ul>
    <?php drinkMenuList($drinks, $drinkCategories['cocktail']); ?>
    </ul>
  </div>
</main>
<footer>
  <nav class="footer_nav container">
    <ul class="footer_nav_lists">
      <a href="shop_information.php" class="footer_nav_list ">
        <li>店舗情報</li>
      </a>
      <a href="index.php" class="footer_nav_list">
        <li>オススメ</li>
      </a>
      <a href="food.php" class="footer_nav_list">
        <li>フード</li>
      </a>
      <a href="drink.php" class="footer_nav_list current">
        <li>ドリンク</li>
      </a>
    </ul>
  </nav>
</footer>
<?php require 'component/footer.php'; ?>
