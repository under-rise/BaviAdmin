<?php
  require __dir__.'/../../php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <meta name="robots" content="noindex">
  <title>会場口コミ一覧 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>

</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_green">
      <h2><i class="fas fa-comment green"></i>会場口コミ一覧</h2>
      <!-- <a href="voice_edit.php" class="insert_btn btn type01">新規登録</a> -->
    </div>

    <div class="inr">

    <div class="page_info">
    <p>口コミ登録された一覧ページ</p>
    </div>
    <!--page_info END-->

            <!-- <div class="search_btn btn type05 mg_b20 modal_btn" data-name=".search_sec">条件検索</div>
            <div class="modal_sec search_sec shadow" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>検索条件</h3>
                </div>
                
                <?php include('../tpl/search_only_area.html'); ?>
                
              </div>
            </div> -->

            <p class="center mg_b10">表示口コミ数 <span class="bold pink">100</span> 件</p>

            <div class="table type02">
        
              <dl class="head">
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">年代 ▼</a></dt>
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">利用人数 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">周辺施設 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">てぶら度 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">設備充実 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">キレイ度 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">子連れ度 ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">混雑度 ▼</a></dt>
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">登録日 ▼</a></dt>
                <dt class="w10 ">確認</dt>
              </dl>

              <dl>
                <dd class="w10 lg">20代</dd>
                <dd class="w10 lg">5人</dd>
                <dd class="w10 icon_text">◎</dd>
                <dd class="w10 icon_text">○</dd>
                <dd class="w10 icon_text">△</dd>
                <dd class="w10 icon_text">□</dd>
                <dd class="w10 icon_text">×</dd>
                <dd class="w10 icon_text">◎</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10"><a href="/master/voice_edit.php?page=spot" class="btn type02 mg_b5 edit">詳細確認</a><a href="https://bavi.jp/spot/detail/335" target="_blank"class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w10 lg">30代</dd>
                <dd class="w10 lg">2人</dd>
                <dd class="w10 icon_text">□</dd>
                <dd class="w10 icon_text">○</dd>
                <dd class="w10 icon_text">△</dd>
                <dd class="w10 icon_text">◎</dd>
                <dd class="w10 icon_text">◎</dd>
                <dd class="w10 icon_text">◎</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10"><a href="/master/voice_edit.php?page=spot" class="btn type02 mg_b5 edit">詳細確認</a><a href="https://bavi.jp/spot/detail/335" target="_blank"class="btn type02 preview">プレビュー</a></dd>
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

            <!-- <p class="pink center mg_b40 mg_t20 under-line bold"><a href="#">新規に口コミを追加する</a></p> -->

            <a href="/master/spot/?page=spot" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>