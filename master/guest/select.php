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
   <?php  require  __dir__.'/../../master/tpl/header_register_list.php'; ?>
  <!--header END-->

  <div id="container">

  　　<div class="user_detail_ttl_name">
      <div><span>東京</span></div> 
      <h2>株式会社GPC様 登録リスト</h2>
    </div>

    <div id="master_to_user_news">
          <h2>運営事務局からのお知らせ</h2>
          <div class="table">
                  <dl>
                  <dt class="w10"><div class="icon type01">ユーザー</div></dt>
                    <dt class="w10">2021年10月1日</dt>
                    
                    <dd><a href="https://bavi.jp/news/show/2" target="_blank" class="under-line">動画埋込機能リリース致しました。</a></dd>
                  </dl>

                  <dl>
                    <dt class="w10"><div class="icon type02">オーナー</div></dt>
                    <dt class="w10">2021年10月1日</dt>
                    <dd><a href="/master/news_guest.php?page=spot" class="under-line">オーナー様へのニュース（バーベキュー会場と店舗がリンク！）</a></dd>
                  </dl>

                  <dl>
                    <dt class="w10"><div class="icon type03">公開NEWS</div></dt>  
                    <dt class="w10">2021年10月1日</dt>
                    <dd><a href="https://bavi.jp/news/show/1" target="_blank" class="under-line">本番NEWS機能リリース致しました。</a></dd>
                  </dl>
          </div>
          <!-- table -->

        </div>
      <!-- master_to_user -->

    <div id="detail_top" class="top flex justify-between">
  
      <div class="main_info itemBOX shadow">
          <div class="ttl bg_red">
          <h2><i class="fas fa-fire red"></i>多摩川緑地バーベキュー広場</h2>
          <a href="/master/spot/index.php?page=spot" class="btn type01">編集する</a>
          </div>

          <div class="inr">
            <div class="flex">
              <div class="img">
              <a href="/master/spot/index.php?page=spot"><img src="/images/storage/spot_main.jpg"></a>
              <p class="font_10 center mg_t5">推奨サイズ：横600px x 縦400px</p>
              </div>

              <div class="txt">
              <h2>当店！！ 毎日肉屋直送！</h2>
              <p>当店！！ 毎日肉屋直送！ 味自慢の味付けジンギスカン、塩ホルモン、はじめ、A5ランク国産和牛ステー・・・・</p>
              </div>
            </div>

            <a href="/master/spot/index.php?page=spot" class="btn type03">編集する</a>
          </div>

      </div>
      <!-- itemBOX END -->

      <div class="main_info itemBOX shadow">
          <div class="ttl bg_purple">
          <h2><i class="fas fa-store purple"></i>代官山八百屋</h2>
          <a href="/master/shop/index.php?page=shop" class="btn type01">編集する</a>
          </div>

          <div class="inr">
            <div class="flex">
              <div class="img">
              <a href="/master/shop/index.php?page=shop"><img src="/images/storage/shop_main.jpg"></a>
              <p class="font_10 center mg_t5">推奨サイズ：横600px x 縦400px</p>
              </div>

              <div class="txt">
              <h2>当店！！ 毎日肉屋直送！</h2>
              <p>当店！！ 毎日肉屋直送！ 味自慢の味付けジンギスカン、塩ホルモン、はじめ、A5ランク国産和牛ステー・・・・</p>
              </div>
            </div>

            <a href="/master/shop/index.php?page=shop" class="btn type03">編集する</a>
          </div>

      </div>
      <!-- itemBOX END -->

    </div>
    <!-- flex END -->

   <a href="/master/spot/base.php?page=spot" class="btn type05 bold insert_btn">新規にBBQ会場を登録する</a>

   <a href="/master/shop/base.php?page=spot" class="btn type05 bold insert_btn">新規に食材SPOTを登録する</a>


  </div>

  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  <div id="footer_btn">
    <span></span>
  </div>
</body>
</html>