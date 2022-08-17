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
  <title>オーナー編集 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>
</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_blue">
      <h2><i class="fas fa-id-card blue"></i>オーナー編集</h2>
      <a href="./guest_l.php" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>会場・店舗のオーナー様の新規登録ページ</p>
    </div>
    <!--page_info END-->

    <form method="POST" action="guest_l.php" enctype="multipart/form-data" class="form type01">
  
  <div class="table">
      <dl>
        <dt>名前</dt>
        <dd><input type="text" class="iw_50"></dd>
      </dl>
      <dl>
        <dt>都道府県</dt>
        <dd>
        <input type="text" id="area_select" class="modal_btn iw_20" data-name=".search_sec" value="" readonly>
        </dd>
      </dl>

      <dl>
        <dt>住所</dt>
        <dd><input type="text"  ></dd>
      </dl>
      <dl>
        <dt>電話番号</dt>
        <dd><input type="text" value="" class="iw_50"></dd>
      </dl>
      <dl>
        <dt>メールアドレス</dt>
        <dd><input type="text" value=""></dd>
      </dl>
      <dl>
        <dt>パスワード <p class="font_12">(※変更する場合のみ入力)</p></dt>
        <dd>
       
        <input type="password" value=""></dd>
      </dl>
    
  </div>
  
  <button type="submit" class="store">保存する</button> 
  <input type="hidden" value="タイトル" name="store_id">
</form>

<form method="POST" id="delete" action="guest_l.php" class="form type01">
  <button type="button" data-id="1" data-title="（オーナー名前が入る）" class="delete">削除する</button> 
  <input type="hidden" value="1" name="delete_id">
  <input type="hidden" value="（オーナー名前が入る）" name="delete_title">
</form>

   <a href="./guest_l.php" class="btn type05">一覧に戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->

 
      <div class="modal_sec search_sec shadow area_select_radio" style="display:none;">
        <div class="inr">
        　  <div class="close close_btn"><i class="fas fa-times"></i></div>
        
          <div class="ttl02">
          <h3>都道府県選択</h3>
          </div>
          
          <?php include('./tpl/area.html'); ?>
          
      </div>
  
  
</body>
</html>