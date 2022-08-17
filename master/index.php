<?php
  require __dir__.'/../php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <meta name="robots" content="noindex">
  <title>Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>

</head>
<body >
  
  <!--header-->
  <?php include('./tpl/header.html'); ?>
  <!--header END-->

  <div id="container">

    <div class="top flex justify-between">

      <div class="itemBOX shadow">
          <div class="ttl bg_red">
          <h2><i class="fas fa-fire red"></i>新着BBQ会場</h2>
          <a href="/master/spot/base.php" class="btn type01">新規登録</a>
          </div>

          <div class="inr">

            <div class="table type01">
              <dl>
                <dt class="w20">2021年10月1日</dt>
                <dd class="w70"><a href="/master/spot/?page=spot">多摩川緑地バーベキュー広場</a></dd>
                <dd class="w10"><a href="/master/spot/?page=spot" class="btn type02">編集</a></dd>
              </dl>

              <dl>
                <dt class="w20">2021年10月1日</dt>
                <dd class="w70"><a href="/master/spot/?page=spot">多摩川緑地バーベキュー広場</a></dd>
                <dd class="w10"><a href="/master/spot/?page=spot" class="btn type02">編集</a></dd>
              </dl>

            </div>
            <!-- table -->
            <a href="spot_l.php" class="btn type03">BBQ会場一覧</a>

            <a href="spot_pickup.php" class="btn type03">ピックアップ会場</a>

            <a href="spot_youtube.php" class="btn type03">YouTube設定</a>

          </div>

      </div>

      <div class="itemBOX shadow">
        <div class="ttl bg_purple">
          <h2><i class="fas fa-store purple"></i>新着食材SPOT</h2>
          <a href="/master/shop/base.php?page=shop" class="btn type01">新規登録</a>
        </div>

        <div class="inr">

          <div class="table type01">
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="/master/shop/index.php?page=shop">代官山八百屋</a></dd>
              <dd class="w10"><a href="/master/shop/index.php?page=shop" class="btn type02">編集</a></dd>
            </dl>
            
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="/master/shop/index.php?page=shop">代官山八百屋</a></dd>
              <dd class="w10"><a href="/master/shop/index.php?page=shop" class="btn type02">編集</a></dd>
            </dl>

          </div>
          <!-- table -->
          <a href="shop_l.php" class="btn type03">食材SPOT一覧</a>

          <a href="shop_pickup.php" class="btn type03">ピックアップSPOT</a>

          <a href="shop_youtube.php" class="btn type03">YouTube設定</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="itemBOX shadow">
        <div class="ttl bg_blue">
          <h2><i class="fas fa-id-card blue"></i>新着オーナー様</h2>
          <a href="guest_edit.php" class="btn type01">新規登録</a>
        </div>

        <div class="inr">

          <div class="table type01">
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="guest_edit.php">株）オーナー</a></dd>
              <dd class="w10"><a href="guest_edit.php" class="btn type02">編集</a></dd>
            </dl>
            
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="guest_edit.php">株）オーナー</a></dd>
              <dd class="w10"><a href="guest_edit.php" class="btn type02">編集</a></dd>
            </dl>

          </div>
          <!-- table -->
          <a href="guest_l.php" class="btn type03">オーナー一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="itemBOX shadow">
        <div class="ttl bg_green">
          <h2><i class="fas fa-comment green"></i>新着口コミ</h2>
          <a href="/master/voice_edit.php" class="btn type01">新規登録</a>
        </div>

        <div class="inr">

        <div class="table type01">
           

            <dl>
              <dd class="w20"><a href="voice_edit.php" class="under-line">2021年10月1日</a></dd>
              <dd class="w20">10代</dd>
              <dd class="w20">男性</dd>
              <dd class="w20">5人</dd>
              <dd class="w20"><a href="voice_edit.php" class="btn type02">確認</a></dd>
            </dl>

            <dl>
              <dd class="w20"><a href="voice_edit.php" class="under-line">2021年10月1日</a></dd>
              <dd class="w20">10代</dd>
              <dd class="w20">男性</dd>
              <dd class="w20">5人</dd>
              <dd class="w20"><a href="voice_edit.php" class="btn type02">確認</a></dd>
            </dl>

     

          </div>
          <!-- table -->

          <a href="voice_l.php" class="btn type03">口コミ一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="itemBOX shadow">
        <div class="ttl bg_yellow">
          <h2><i class="fas fa-rss yellow"></i>NEWS配信</h2>
          <a href="news_edit.php" class="btn type01">新規登録</a>
        </div>

        <div class="inr">

          <div class="table type01">
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="news_edit.php">機能拡張のお知らせ</a></dd>
              <dd class="w10"><a href="news_edit.php" class="btn type02">編集</a></dd>
            </dl>
            
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="news_edit.php">機能拡張のお知らせ</a></dd>
              <dd class="w10"><a href="news_edit.php" class="btn type02">編集</a></dd>
            </dl>

          </div>
          <!-- table -->
          <a href="news_l.php" class="btn type03">NEWS配信一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

    </div>
    <!-- flex END -->

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->

</body>
</html>