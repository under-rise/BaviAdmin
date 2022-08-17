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
  <title>ピックアップ会場 | Bavi 運営側管理ページ</title>
  <link rel="stylesheet" href="/css/reset.css?2.4">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/style.css?1.52">
  <link rel="stylesheet" href="/css/page.css?1.15">
  <link rel="stylesheet" href="/css/form.css?1.3">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/js/main.js?1.3" defer></script>

</head>
<body>
  
  <!--header-->
  <?php include('./tpl/header.html'); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_red">
      <h2><i class="fas fa-fire red"></i>ピックアップ会場</h2>
      <a href="#" class="insert_btn btn type01 modal_btn"  data-name=".search_sec">新規登録</a>
    </div>

    <div class="inr">
            
      <div class="page_info">
      <p>BBQ会場トップページのピックアップ登録・編集ページ</p>
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

              <form method="GET" action="" >

              <div class="table type02">
        
              <dl class="head">
                <dt class="w5 lg">No.</dt>
                <dt class="w10 lg">都道府県</dt>
                <dt class="w10 lg">画像</dt>
                <dt class="w25">会場名称</dt>
                <dt class="w15 lg">オーナー名</dt>
                <dt class="w5">口コミ</dt>
                <dt class="w5">LIKE数</dt>
                <dt class="w5">登録</dt>
              </dl>

              <dl>
                <dd class="w5 lg"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w10 lg">東京</dd>
                <dd class="w10 thumnail lg"><img src="/images/storage/shop_main.jpg"></dd>
                <dd class="w25"><a href="#"><a href="#">手軽にBBQ会場</a></dd>
                <dd class="w20 lg">ー</dd>
                <dd class="w5">100</dd>
                <dd class="w5">100</dd>
                <dd class="w5"><input type="checkbox" style="transform: scale(1.2);" ></dd>
                </dd>
              </dl>
              
              </div>

              <div class="form">
              <button type="submit" name="submit" >登録する</button>
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
                
                <?php include('./tpl/search.html'); ?>
                
              </div>
            </div>


            <div class="table type02">
        
              <dl class="head">
                <dt class="w5 lg"><a href="#" onClick="alert('ソート機能予定'); return false">No. ▼</a></dt>
                <dt class="w10 lg">都道府県</dt>
                <dt class="w10 lg">画像</dt>
                <dt class="w25">会場名称</dt>
                <dt class="w15 lg">オーナー名</dt>
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">口コミ ▼</a></dt>
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">LIKE数 ▼</a></dt>
                <dt class="w10">削除</dt>
              </dl>

              <dl>
                <dd class="w5 lg"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w10 lg">東京</dd>
                <dd class="w10 thumnail lg"><a href="#"><img src="/images/storage/shop_main.jpg"></a></dd>
                <dd class="w25"><a href="#"><a href="#">手軽にBBQ会場</a></dd>
                <dd class="w20 lg">ー</dd>
                <dd class="w5">100</dd>
                <dd class="w5">100</dd>
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
            
           
            <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="#">ピックアップ会場を追加する</a></p>


            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>