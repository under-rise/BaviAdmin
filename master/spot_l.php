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
  <title>BBQ会場一覧 | Bavi 運営側管理ページ</title>
  <link rel="stylesheet" href="/css/reset.css?2.4">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/style.css?1.52">
  <link rel="stylesheet" href="/css/page.css?1.14">
  <link rel="stylesheet" href="/css/form.css">
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
      <h2><i class="fas fa-fire red"></i>BBQ会場一覧</h2>
      <a href="/master/spot/base.php" class="insert_btn btn type01">新規登録</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>BBQ会場の一覧ページ</p>
    </div>
    <!--page_info END-->

            <div class="search_btn btn type05 mg_b20 modal_btn" data-name=".search_sec">条件検索</div>
            <div class="modal_sec search_sec shadow" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>検索条件</h3>
                </div>
                
                <?php include('./tpl/search.html'); ?>
                
              </div>
            </div>

            <p class="center mg_b10">表示口コミ数 <span class="bold pink">100</span> 件 / 表示LIKE数 <span class="bold pink">200</span> 件</p>

            <div class="table type02">
        
              <dl class="head">
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">No. ▼</a></dt>
                <dt class="w10 lg">画像</dt>
                <dt class="w25">店舗名称</dt>
                <dt class="w15">オーナー名</dt>
                <dt class="w5 lg"><a href="#" onClick="alert('ソート機能予定'); return false">口コミ ▼</a></dt>
                <dt class="w5 lg"><a href="#" onClick="alert('ソート機能予定'); return false">LIKE数 ▼</a></dt>
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">登録日 ▼</a></dt>
                <dt class="w10 lg"><a href="#" onClick="alert('ソート機能予定'); return false">更新日 ▼</a></dt>
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">表示 ▼</a></dt>
                <dt class="w10 lg">編集</dt>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w10 thumnail lg"><a href="/master/spot/"><img src="/images/storage/shop_main.jpg"></a></dd>
                <dd class="w25"><a href="/master/spot/">店舗名称</a></dd>
                <dd class="w15">ー</dd>
                <dd class="w5 lg">100</dd>
                <dd class="w5 lg">100</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w5"><a href="#" onClick="alert('表示切り替え予定'); return false" class="on">表示中</a></dd>
                <dd class="w10 lg"><a href="/master/spot/?page=spot" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/spot/detail/335" target="_blank"class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">2</a></dd>
                <dd class="w10 thumnail lg"><a href="/master/spot/"><img src="/images/storage/none.jpg"></a></dd>
                <dd class="w25"><a href="/master/spot/">BAVI玉川BBQ場</a></dd>
                <dd class="w15"><a href="/master/spot/">株）GPC</a></dd>
                <dd class="w5 lg">100</dd>
                <dd class="w5 lg">40</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w5"><a href="#" onClick="alert('表示切り替え予定'); return false" class="off">非表示</a></dd>
                <dd class="w10 lg"><a href="/master/spot/?page=spot" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/spot/detail/335" target="_blank" class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w10 thumnail lg"><a href="/master/spot/"><img src="/images/storage/shop2.jpg"></a></dd>
                <dd class="w25"><a href="/master/spot/">店舗名称</a></dd>
                <dd class="w15">ー</dd>
                <dd class="w5 lg">100</dd>
                <dd class="w5 lg">100</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w5"><a href="#" onClick="alert('表示切り替え予定'); return false" class="on">表示中</a></dd>
                <dd class="w10 lg"><a href="/master/spot/?page=spot" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/spot/detail/335" target="_blank" class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">2</a></dd>
                <dd class="w10 thumnail lg"><a href="#"><img src="/images/storage/spot_main.jpg"></a></dd>
                <dd class="w25"><a href="/master/spot/">BAVI玉川BBQ場</a></dd>
                <dd class="w15"><a href="/master/spot/">株）GPC</a></dd>
                <dd class="w5 lg">100</dd>
                <dd class="w5 lg">40</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w10 lg">2021.10.31</dd>
                <dd class="w5"><a href="#" onClick="alert('表示切り替え予定'); return false" class="off">非表示</a></dd>
                <dd class="w10 lg"><a href="/master/spot/?page=spot" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/spot/detail/335" target="_blank" class="btn type02 preview">プレビュー</a></dd>
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

            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="/master/spot/base.php">新規に会場を追加する</a></p>

            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="spot_pickup.php">ピックアップ会場設定</a></p>
        
            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="spot_youtube.php">Youtube設定</a></p>

            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>