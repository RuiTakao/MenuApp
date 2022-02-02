<?php require 'component/head.php'; ?>
<?php require 'component/header.php'; ?>
  <main>
    <div class="container">

      <!-- 店舗情報 -->
      <div class="main_menu_lists">
        <?php require 'tab/shop_information.php'; ?>
      </div>
      <!-- 店舗情報 ここまで -->

      <!-- オススメ -->
      <div class="main_menu_lists">
        <?php require 'tab/recommendation.php'; ?>
      </div>
      <!-- オススメ ここまで -->

      <!-- フード -->
      <div class="main_menu_lists">
        <?php require 'tab/food.php'; ?>
      </div>
      <!-- フード ここまで -->

      <!-- ドリンク -->
      <div class="main_menu_lists">
        <?php require 'tab/drink.php'; ?>
      </div>
      <!-- ドリンク ここまで -->

    </div>
  <?php require 'component/footer.php'; ?>
