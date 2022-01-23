<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>MenuApp</h1>
  </header>
  <main>
    <div class="container">
      <h2 class="menu_title">ピザ</h2>
      <ul class="menus">
        <?php foreach ($menus as $menu): ?>
        <a href="menuInfo.html" class="menu"><li class="menu_list">
          <span class="menu_title"><?php echo $menu['name']; ?></span>
          <span class="menu_price"><?php echo "{$menu['price']}円"; ?></span>
        </li></a>
        <?php endforeach; ?>
      </ul>
      <a href="index.php" class="btn_back">メインメニューへ</a>
    </div>
  </main>
  <footer></footer>
</body>
</html>
