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
  <title>NEWS配信（オーナー様） | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>

  <!-- jQuery UI -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

  <script>
   $(function() {
    $('#datepicker').datepicker({
      duration: 200,  // 指定ミリ秒の時間をかける
      showAnim: 'slideDown', // スライドダウンで表示する
    });
  });
  </script>

</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_yellow">
      <h2><i class="fas fa-rss yellow"></i>オーナー様へのお知らせ</h2>
      <a href="./news_l.php" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>Bavi運営からオーナー様へ配信されたニュースです。</p>
    </div>
    <!--page_info END-->

   　<div class="guest_news_sec">

        <p class="font_11 mg_b5">2021年10月30日</p>
        <h3 class="ttl03">バーベキュー会場と店舗がリンク！</h3>
        <p>バーベキュー会場と店舗がリンク設定できるようになりました。<br>
これによってバーベキュー会場のアクセス分、近隣店舗への認知もあがることとなります。</p>

     </div>

     <a href="/master/spot/?page=spot" class="btn type05">一覧に戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>