<ul>
  <?php foreach($menus as $menu): ?>
    <a href="#" class="main_menu_list_link">
      <li class="main_menu_list" style="background-image: url('img/<?= $menu['img']; ?>');">
        <p class="menu_title"><?= $menu['name']; ?></p>
        <p class="menu_price"><?= $menu['price']; ?></p>
      </li>
    </a>
  <?php endforeach; ?>
</ul>