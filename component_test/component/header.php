<header>
  <h1 class="header-logo">Izakaya TKO</h1>
  <nav class="main_header_nav container">
    <ul class="main_header_nav_lists">
      <a href="#" class="main_header_nav_list">
        <li>串焼き</li>
      </a>
      <a href="#" class="main_header_nav_list is-active">
        <li>ごはんもの</li>
      </a>
      <a href="#" class="main_header_nav_list">
        <li>一品</li>
      </a>
      <a href="#" class="main_header_nav_list">
        <li>デザート</li>
      </a>


      <?php foreach($foodCategories as $category): ?>
        <a href="#" class="main_header_nav_list">
          <li><?= $category; ?></li>
        </a>
      <?php endforeach; ?>

      <?php foreach($drinkCategories as $category): ?>
        <a href="#" class="main_header_nav_list">
          <li><?= $category; ?></li>
        </a>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
