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
  <title>オーナー一覧一覧 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>

</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_blue">
      <h2><i class="fas fa-id-card blue"></i>オーナー一覧</h2>
      <a href="guest_edit.php" class="insert_btn btn type01">新規登録</a>
    </div>

    <div class="inr">

            <div class="page_info">
            <p>会場・店舗のオーナー様の登録一覧ページ</p>
            </div>
            <!--page_info END-->

            <?php
                if(isset($_POST['delete_title'])){
                echo '<div class="flush_message">'.$_POST['delete_title'].'を削除しました。</div>';
                }
            ?>

            <div class="search_btn btn type05 mg_b20 modal_btn" data-name=".search_sec">条件検索</div>
            <div class="modal_sec search_sec shadow" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>検索条件</h3>
                </div>
                
                <?php include('./tpl/search_only_area.html'); ?>
                
              </div>
            </div>

            <p class="center mg_b10">検索オーナー数 <span class="bold pink">100</span> 件</p>

            <div class="table type02">
        
              <dl class="head">
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">No. ▼</a></dt>
                <dt class="w20">お名前</dt>
                <dt class="w30">住所</dt>
                <dt class="w20 lg">メールアドレス</dt>
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">登録日 ▼</a></dt>
                <dt class="w10 lg">編集</dt>
              </dl>

              <dl>
                <dd class="w5"><a href="guest_edit.php">1</a></dd>
                <dd class="w20"><a href="guest_edit.php">マオイテスト</a></dd>
                <dd class="w30">茨城県鉾田市鉾田１６−１</dd>
                <dd class="w20 lg"><a href="mailto:butcher@nakataseinikuten.com">butcher@nakataseinikuten.com</a></dd>
                <dd class="w15 lg">2021.10.11</dd>
                <dd class="w10 lg"><a href="guest_edit.php" class="btn type02 mg_b5 edit">編集</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="#">2</a></dd>
                <dd class="w20"><a href="#">仲田精肉店</a></dd>
                <dd class="w30">茨城県鉾田市鉾田１６−１</dd>
                <dd class="w20 lg"><a href="mailto:butcher@nakataseinikuten.com">butcher@nakataseinikuten.com</a></dd>
                <dd class="w15 lg">2021.10.11</dd>
                <dd class="w10 lg"><a href="guest_edit.php" class="btn type02 mg_b5 edit">編集</a></dd>
              </dl>

    

            </div>
            <!-- table -->
            
            <div class="pagination_sec">
            <ul class="pagination">
              <li class="disabled"><a href="#" rel="prev">&laquo;</a></li>
              <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#" rel="next">&raquo;</a></li>
            </ul>
            </div>

            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="guest_edit.php">新規にオーナーを登録する</a></p>

            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>