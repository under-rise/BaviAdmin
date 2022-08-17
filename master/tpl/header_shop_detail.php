<header>

  <div id="spMainBtn">
    <i class="fas fa-th sp"></i>
  </div>

    <div id="logo_sec">
      <div id="logo"><a href="/master/guest/select.php"><img src="/images/logo.png"></a></div>
      <h1>運営側管理ページ</h1>
    </div>

    <div class="nav">
      <div class="close sp"><i class="fas fa-times"></i></i></div>

      <div class="guestInfomation">
        <dl>
          <dt>東京 / 代官山八百屋</dt>
          <dd><a href="/master/guest_edit.php?page=guest" class="under-line">オーナー：株式会社GPC様</a></dd>
          <dd><a href="/master/guest/select.php" class="btn type04 change_shop">登録店舗一覧</a></dd>
        </dl>
      </div>

      <ul class="mainBtn detail_link_sec">
        <li><a href="/master/shop/?page=shop"><i class="fas fa-th"></i>ダッシュボード</a></li>
        <li class="sub_nav"><a><i class="fas fa-home"></i>会場情報</a>
          <ul style="display: none;">
            <li><a href="/master/shop/base.php?page=shop">基本設定</a></li>
            <li><a href="/master/spot/corona.php?page=shop">コロナ対策設定</a></li>
          </ul>
        </li>

        <li class="sub_nav"><a><i class="fas fa-mobile-alt"></i>表示設定</a>
          <ul style="display: none;">
          <li><a href="/master/shop/display.php?page=shop">基本表示設定</a></li>
          <li><a href="/master/spot/spots.php?page=shop">BBQ会場リンク</a></li>
          </ul>
        </li>

       

        <li><a href="/master/shop/menu.php?page=shop"><i class="fas fa-shopping-cart"></i>メニュー情報</a></li>
        <li><a href="/master/spot/coupon_l.php?page=shop"><i class="fas fa-ticket-alt"></i>クーポン発行</a></li>
        <li><a href="/master/news_l.php?page=shop"><i class="fas fa-rss"></i>NEWS配信</a></li>
        <li><a href="/master/guest/voice_l.php?page=shop"><i class="fas fa-comment"></i>口コミ</a></li>
        <li><a href="/master/guest_edit.php?page=guest"><i class="fas fa-id-card"></i>オーナー情報</a></li>
        <?php
        if(!isUser()){
        ?>
        <li><a href="/master/guest/contact.php?page=guest"><i class="fas fa-envelope"></i>お問合せ</a></li>
        <?php
        }
        ?>
      </ul>


      <ul class="mainBtn">
        <li><a href="/">ログアウト</a></li>
        <?php if(!isUser()){ ?>
        <li><a href="/master/">ホームに戻る</a></li>
        <?php } ?>
        <!--
        <li><a href="spot_l.php"><i class="fas fa-fire"></i>BBQ会場</a></li>
        <li><a href="shop_l.php"><i class="fas fa-store"></i>食材SPOT</a></li>
        <li><a href="guest_l.php"><i class="fas fa-id-card"></i>顧客一覧<a></li>
        <li><a href="voice_l.php"><i class="fas fa-comment"></i>BBQ会場口コミ</a></li>
        <li><a href="news_l.php"><i class="fas fa-rss"></i>NEWS配信</a></li>
        -->
      </ul>

      <ul class="sns flex">
        <li><a href="https://www.instagram.com/bavi_bbq/" target="_blacnk"><img src="/images/icon_instagram.png"></a></li>
        <li><a href="https://line.me/ti/p/%40637eulru" target="_blacnk"><img src="/images/icon_line.png"></a></li>
        <li><a href="https://www.youtube.com/channel/UCMA8rsf6gPte0ZDpY62A8Pg" target="_blacnk"><img src="/images/icon_youtube.png"></a></li>
      </ul>

  </div>

</header>