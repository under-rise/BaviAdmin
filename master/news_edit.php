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
  <title>NEWS配信（編集） | Bavi 運営側管理ページ</title>
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
      <h2><i class="fas fa-rss yellow"></i>NEWS内容の編集</h2>
      <a href="./news_l.php" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>Bavi運営から配信されたニュース一覧ページ<br>公開先の選択によりフロント表示・オーナー管理表示と分ける予定です。</p>
    </div>
    <!--page_info END-->

    <form method="POST" action="news_l.php" enctype="multipart/form-data" class="form type01">
  
    <div class="table">
        <dl>
          <dt>表示</dt>
          <dd>
          <ul class="radio">
            <li><input type="radio" value="on" name="disp" id="disp01"><label for="disp01"> 表示</label></li>
            <li><input type="radio" checked value="off" name="disp" id="disp02"><label for="disp02"> 非表示</label></li>
          </ul>  
          </dd>
        </dl>

        <dl>
          <dt>公開日</dt>
          <dd><input type="text" value="" id="datepicker"></dd>
        </dl>
        <?php
        if(!isUser()){
          echo '
        <dl>
          <dt>公開先</dt>
          <dd>
          <ul class="radio">
            <li><input type="radio" value="" name="radio" id="radio01"><label for="radio01"> ユーザー</label></li>
            <li><input type="radio" checked value="" name="radio" id="radio02"><label for="radio02"> オーナー</label></li>
            <li><input type="radio" value="" name="radio" id="radio03"><label for="radio03"> ユーザー + オーナー</label></li>
          </ul>  
          </dd>
        </dl>';
        }
        ?>
        <dl>
          <dt>タイトル</dt>
          <dd><input type="text" value=""></dd>
        </dl>
        <dl>
          <dt>本文</dt>
          <dd><textarea rows="10"></textarea></dd>
        </dl>
        <dl>
          <dt>画像</dt>
          <dd>
            <input type="file" name="image_path" data-pos="#file_pos_1" accept="image/*">
            <div id="file_pos_1" class="up_imagePreview_sec">
              <img class="up_imagePreview">
            </div>
        </dd>
        </dl>
    </div>
    
    <button type="submit" class="store">投稿する</button> 
    <input type="hidden" value="タイトル" name="store_id">
  </form>

  <form method="POST" id="delete" action="news_l.php" class="form type01">
    <button type="button" data-id="1" data-title="タイトル" class="delete">削除する</button> 
    <input type="hidden" value="1" name="delete_id">
    <input type="hidden" value="タイトル" name="delete_title">
  </form>

     <a href="./" class="btn type05">一覧に戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>