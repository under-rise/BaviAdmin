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
  <title>BBQ会場一覧 | Bavi 運営側管理ページ</title>

  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>

</head>
<body id="spot">
  
   <!--header-->
   <?php headerInclude(); ?>
  <!--header END-->

  <div id="container" class="">

    <div class="user_detail_ttl_name">
      <div><span>東京</span><span class="spot">BBQ会場</span></div>
      <h2><i class="fas fa-fire red"></i> 多摩川緑地バーベキュー広場</h2>
    </div>
    

    <div class="oneColumn itemBOX shadow">

        <div class="ttl bg_blue">
          <h2><i class="fas fa-mobile-alt blue"></i>食材SPOTリンク</h2>
          <a href="#" class="insert_btn btn type01 modal_btn"  data-name=".search_sec">新規登録</a>
        </div>

        <div class="inr">
            
      <div class="page_info">
      <p>食材SPOTリンクの登録・編集ページ</p>
      </div>
      <!--page_info END-->

            <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

            ?>

            <script>
              $(function(){
                $('.thumnail').click(function(){
                  let isCheck = $(this).parent().find('input[type="checkbox"]').prop('checked');
                  $(this).parent().find('input[type="checkbox"]').prop('checked',!isCheck);
                });
              });
            </script>

            <div class="search_result">

              <div class="ttl02">
                  <h3>検索結果</h3>
              </div>

              <!-- <div class="no_data">見つかりませんでした。<br>条件を変更して検索してください。</div> -->

              <form method="GET" action="/master/spot/spots.php" >

                  <div class="table type02">
            
                      <dl class="head">
                        <dt class="w5 lg">No.</dt>
                        <dt class="w10 lg">都道府県</dt>
                        <dt class="w10 lg">ジャンル</dt>
                        <dt class="w10 lg">画像</dt>
                        <dt class="w25">会場名称</dt>
                        <dt class="w10">口コミ</dt>
                        <dt class="w10">LIKE数</dt>
                        <dt class="w5">登録</dt>
                      </dl>

                      <dl>
                        <dd class="w5 lg"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                        <dd class="w10 lg">東京</dd>
                        <dd class="w10 lg bold">肉屋</dd>
                        <dd class="w10 thumnail lg"><img src="/images/storage/shop_main.jpg"></dd>
                        <dd class="w25"><a href="https://bavi.jp/spot/detail/402" target="_blank">手軽にBBQ会場</a></dd>
                        <dd class="w15">100</dd>
                        <dd class="w15">100</dd>
                        <dd class="w5"><input type="checkbox" style="transform: scale(1.2);" ></dd>
                        </dd>
                      </dl>
                  
                  </div>

              <div class="form">
                <input type="hidden" name="page" value="spot">
              <button type="submit" >登録する</button>
              </div>

              </form>

            </div>

            <?php
             }
            ?>
            <!--search_result END-->


            <div class="modal_sec search_sec shadow" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>検索条件</h3>
                </div>
                
                <?php include(__DIR__.'/../../master/tpl/search.html'); ?>
                
              </div>
            </div>


            <div class="table type02">
        
              <dl class="head">
                <dt class="w5 lg"><a href="#" onClick="alert('ソート機能予定'); return false">No. ▼</a></dt>
                <dt class="w10 lg">都道府県</dt>
                <dt class="w10 lg">ジャンル</dt>
                <dt class="w10 lg">画像</dt>
                <dt class="w25">会場名称</dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">口コミ ▼</a></dt>
                <dt class="w10"><a href="#" onClick="alert('ソート機能予定'); return false">LIKE数 ▼</a></dt>
                <dt class="w10">削除</dt>
              </dl>

              <dl>
                <dd class="w5 lg"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w10 lg">東京</dd>
                <dd class="w10 lg bold">肉屋</dd>
                <dd class="w10 thumnail lg"><a href="#"><img src="/images/storage/shop_main.jpg"></a></dd>
                <dd class="w25"><a href="https://bavi.jp/spot/detail/402" target="_blank">手軽にBBQ会場</a></dd>
                <dd class="w10">100</dd>
                <dd class="w10">100</dd>
                <dd class="w10">
                  <form method="POST" action="#" class="form">
                    <button type="button" data-id="1" data-title="タイトル" class="delete type02">削除する</button> 
                    <input type="hidden" value="1" name="delete_id">
                    <input type="hidden" value="タイトル" name="delete_title">
                  </form>
                </dd>
              </dl>

            </div>
            <!-- table -->
            
           
            <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="#">食材SPOTリンクを追加する</a></p>


            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>
      <!-- inr END -->

    </div>
    <!-- oneColumn END -->

  </div>

 

  <?php include('./../tpl/footer_btn.php'); ?>
  
  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>