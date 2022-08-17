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
  <title>ダッシュボード | Bavi 運営側管理ページ</title>

  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
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
    
      <div id="master_to_user_news">
          <h2>運営事務局からのお知らせ</h2>
          <div class="table">
                  <dl>
                  <dt class="w10"><div class="icon type01">ユーザー</div></dt>
                    <dt class="w10">2021年10月1日</dt>
                    
                    <dd><a href="https://bavi.jp/news/show/2" class="under-line">動画埋込機能リリース致しました。</a></dd>
                  </dl>

                  <dl>
                    <dt class="w10"><div class="icon type02">オーナー</div></dt>
                    <dt class="w10">2021年10月1日</dt>
                    <dd><a href="/master/news_guest.php?page=spot" class="under-line">オーナー様へのニュース（バーベキュー会場と店舗がリンク！）</a></dd>
                  </dl>

                  <dl>
                    <dt class="w10"><div class="icon type03">公開NEWS</div></dt>  
                    <dt class="w10">2021年10月1日</dt>
                    <dd><a href="https://bavi.jp/news/show/1" class="under-line">本番NEWS機能リリース致しました。</a></dd>
                  </dl>
          </div>
          <!-- table -->

        </div>
      <!-- master_to_user -->

    <div id="detail_top" class="top flex justify-between">
      
      <div class="base_info itemBOX shadow">
          <div class="ttl bg_red">
          <h2><i class="fas fa-home red"></i>会場情報</h2>
          <a href="/master/spot/base.php?page=spot" class="btn type01">編集する</a>
          </div>

          <div class="inr">
            <div class="">
              <div class="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17598.825004316324!2d139.84543126136896!3d35.639478833682354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16a09c88d4b35113!2z6JGb6KW_6Ieo5rW35YWs5ZyS!5e0!3m2!1sja!2sjp!4v1631804564777!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>

              <div class="txt">
                <dl>
                  <dt>〒134-0086 東京都江戸川区臨海町６丁目２</dt>
                  <dd>tel: 03-5696-1331</dd>
                </dl>
              </div>
            </div>

            <a href="/master/spot/base.php?page=spot" class="btn type03">基本設定</a>

            <a href="/master/spot/corona.php?page=spot" class="btn type03">コロナ対策設定</a>
          </div>

      </div>
      <!-- itemBOX END -->

      <div class="main_info itemBOX shadow">
          <div class="ttl bg_blue">
          <h2><i class="fas fa-mobile-alt blue"></i>表示設定</h2>
          <a href="/master/spot/display.php?page=spot" class="btn type01">編集する</a>
          </div>

          <div class="inr">

          <div class="flex">

             <div class="txt">
                <h2 class="mg_b5">当店！！ 毎日肉屋直送！</h2>
                <p>当店！！ 毎日肉屋直送！ 味自慢の味付けジンギスカン、塩ホルモン、はじめ、A5ランク国産和牛ステー・・・・</p>
              </div>

              <div class="img">
                  <div class="sliderArea">
                      <div class="slider">
                        <div><img src="/images/storage/spot_main.jpg" ></div>
                        <div><img src="/images/storage/spot_main.jpg" ></div>
                        <div><img src="/images/storage/none.jpg"></div>
                      </div>
                  </div>
              </div>

          </div>
          <!-- flex END -->

            <a href="/master/spot/display.php?page=spot" class="btn type03">表示設定</a>
            <a href="/master/spot/spots.php?page=spot" class="btn type03">食材SPOTリンク</a>
          </div>

      </div>
      <!-- itemBOX END -->

      <div class="main_info itemBOX shadow">
        <div class="ttl bg_orange">
          <h2><i class="fas fa-shopping-cart orange"></i>売店情報</h2>
          <a href="/master/spot/stand.php?page=spot" class="btn type01">編集する</a>
        </div>

        <div class="inr">

        <div class="flex">
            <div class="img">
                <img src="/images/storage/none.jpg">
                <p class="font_10 center mg_t5">推奨サイズ：横600px x 縦400px</p>
                </div>

                <div class="txt">
                <h2>当店！！ 毎日肉屋直送！</h2>
                <p>当店！！ 毎日肉屋直送！ 味自慢の味付けジンギスカン、塩ホルモン、はじめ、A5ランク国産和牛ステー・・・・</p>
            </div>
        </div>
          <a href="/master/spot/stand.php?page=spot" class="btn type03">編集する</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="cupon_info itemBOX shadow">
        <div class="ttl bg_h-blue">
          <h2><i class="fas fa-ticket-alt h-blue"></i>クーポン発行</h2>
          <a href="/master/spot/coupon_edit.php?page=spot" class="btn type01">新規追加</a>
        </div>

        <div class="inr">

        <div class="table type01">
            
            <dl class="head_type02">
              <dt class="w20">開始日</dt>
              <dt class="w20">クーポン種別</dt>
              <dt class="w50">タイトル</dt>
              <dt class="w10 center">編集</dt>
            </dl>

            <dl>
              <dd class="w20">2021年10月1日</dd>
              <dd class="w20">プレゼント型</dd>
              <dd class="w50"><a href="/master/spot/coupon_edit.php?page=spot" class="under-line">ビールプレンゼント！</a></dd>
              <dd class="w10"><a href="/master/spot/coupon_edit.php?page=spot" class="btn type02">編集</a></dd>
            </dl>

            <dl>
              <dd class="w20">2021年10月1日</dd>
              <dd class="w20">割引型</dd>
              <dd class="w50"><a href="/master/spot/coupon_edit.php?page=spot" class="under-line">100%OFF!</a></dd>
              <dd class="w10"><a href="/master/spot/coupon_edit.php?page=spot" class="btn type02">編集</a></dd>
            </dl>
            

          </div>
          <!-- table -->

          <a href="coupon_l.php?page=spot" class="btn type03">クーポン一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="itemBOX shadow">
        <div class="ttl bg_yellow">
          <h2><i class="fas fa-rss yellow"></i>NEWS配信</h2>
          <a href="/master/news_edit.php?page=spot&user=on" class="btn type01">新規追加</a>
        </div>

        <div class="inr">

          <div class="table type01">
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="/master/news_edit.php?page=spot&user=on" class="under-line">NEWS!!東京BBQ場所</a></dd>
              <dd class="w10"><a href="/master/news_edit.php?page=spot&user=on" class="btn type02">編集</a></dd>
            </dl>
            
            <dl>
              <dt class="w20">2021年10月1日</dt>
              <dd class="w70"><a href="/master/news_edit.php?page=spot&user=on" class="under-line">NEWS!!東京BBQ場所</a></dd>
              <dd class="w10"><a href="/master/news_edit.php?page=spot&user=on" class="btn type02">編集</a></dd>
            </dl>

          </div>
          <!-- table -->
          <a href="/master/news_l.php?page=spot" class="btn type03">NEWS配信一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->  

      <div class="itemBOX shadow">
        <div class="ttl bg_green">
          <h2><i class="fas fa-comment green"></i>口コミ</h2>
          <?php
          if(isUser()){
            echo '<a href="/master/guest/voice_l.php?page=spot" class="btn type01">確認</a>';
          }else{
            echo '<a href="/master/voice_edit.php" class="btn type01">新規追加</a>';
          }
          ?>
        </div>

        <div class="inr">

        <div class="table type01">
            
            <dl class="head_type02">
              <dt class="w20">利用年月日</dt>
              <dt class="w20">年代</dt>
              <dt class="w20">性別</dt>
              <dt class="w20">利用人数</dt>
              <dt class="w20 center">編集</dt>
            </dl>

            <dl>
              <dd class="w20"><a href="/master/voice_edit.php?page=spot" class="under-line">2021年10月1日</a></dd>
              <dd class="w20">10代</dd>
              <dd class="w20">男性</dd>
              <dd class="w20">5人</dd>
              <dd class="w20"><a href="/master/voice_edit.php?page=spot" class="btn type02">確認</a></dd>
            </dl>

     

          </div>
          <!-- table -->

          <a href="/master/guest/voice_l.php?page=spot" class="btn type03">口コミ一覧</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

      <div class="itemBOX shadow">
        <div class="ttl bg_blue">
          <h2><i class="fas fa-id-card blue"></i>オーナー情報</h2>
          <a href="/master/guest_edit.php?page=guest" class="btn type01">編集する</a>
        </div>

        <div class="inr">

          <div class="table">
            <dl>
              <dt class="w30">お名前</dt>
              <dd class="w70"><a href="/master/guest_edit.php?page=guest" class="under-line">マオイテスト</a></dd>
            </dl>
            
            <dl>
              <dt class="w30">住所</dt>
              <dd class="w70">東京都足立区1-1-1</dd>
            </dl>

            <dl>
              <dt class="w30">メールアドレス</dt>
              <dd class="w70"><a href="mailto:info@gpc-group.com" class="under-line">info@gpc-group.com</a></dd>
            </dl>

            <dl>
              <dt class="w30">電話番号</dt>
              <dd class="w70"><a href="telto:03-1234-5678" class="under-line" >03-1234-5678</a></dd>
            </dl>

            <dl>
              <dt class="w30">パスワード</dt>
              <dd class="w70">••••••••••</dd>
            </dl>

          </div>
          <!-- table -->
          <a href="/master/guest_edit.php?page=guest" class="btn type03">編集する</a>

        </div>
        <!--inr END -->

      </div>
      <!-- itemBOX END -->

    </div>
    <!-- flex END -->

  </div>

 

  <?php include('./../tpl/footer_btn.php'); ?>
  
  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  
  <!--slick-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <script>
    $(function() {
        $(".slider").slick({
          dots: true, // ドットインジケーターの表示
          infinite: true, // スライドのループを有効にするか
          slidesToShow: 1, // 表示するスライド数を設定
          slidesToScroll: 1, // スクロールするスライド数を設定 
          autoplay:true,
        });
      });
    </script>
</body>
</html>