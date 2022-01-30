<?php require 'component/head.php'; ?>
<?php require 'component/header.php'; ?>
</header>
  <main>
    <div class="container">
      <ul class="main_menu_lists">
        <?php foreach($menus as $menu): ?>
          <?php if($menu['good']): ?>
            <a href="#" class="main_menu_list_link">
              <li class="main_menu_list" style="background-image: url('img/<?= $menu['img']; ?>');">
                <p class="menu_title"><?= $menu['name']; ?></p>
                <p class="menu_price"><?= $menu['price']; ?></p>
              </li>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <ul class="main_menu_lists">
        <?php foreach($menus as $menu): ?>
          <?php if(!$menu['good']): ?>
            <a href="#" class="main_menu_list_link">
              <li class="main_menu_list" style="background-image: url('img/<?= $menu['img']; ?>');">
                <p class="menu_title"><?= $menu['name']; ?></p>
                <p class="menu_price"><?= $menu['price']; ?></p>
              </li>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <ul class="main_menu_lists">
        <?php foreach($menus as $menu): ?>
          <?php if($menu['good']): ?>
            <a href="#" class="main_menu_list_link">
              <li class="main_menu_list" style="background-image: url('img/<?= $menu['img']; ?>');">
                <p class="menu_title"><?= $menu['name']; ?></p>
                <p class="menu_price"><?= $menu['price']; ?></p>
              </li>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <ul class="main_menu_lists">
        <?php foreach($menus as $menu): ?>
          <?php if(!$menu['good']): ?>
            <a href="#" class="main_menu_list_link">
              <li class="main_menu_list" style="background-image: url('img/<?= $menu['img']; ?>');">
                <p class="menu_title"><?= $menu['name']; ?></p>
                <p class="menu_price"><?= $menu['price']; ?></p>
              </li>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php require 'component/footer.php'; ?>
