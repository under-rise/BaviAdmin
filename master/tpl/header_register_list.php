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
          <dt></dt>
          <dd><a href="/master/guest_edit.php?page=guest" class="under-line">オーナー：株式会社GPC様</a></dd>
          <dd><a href="/master/guest/select.php" class="btn type04 change_shop">登録店舗一覧</a></dd>
        </dl>
      </div>

      <ul class="mainBtn detail_link_sec">
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
      </ul>

      <ul class="sns flex">
        <li><a href="https://www.instagram.com/bavi_bbq/" target="_blacnk"><img src="/images/icon_instagram.png"></a></li>
        <li><a href="https://line.me/ti/p/%40637eulru" target="_blacnk"><img src="/images/icon_line.png"></a></li>
        <li><a href="https://www.youtube.com/channel/UCMA8rsf6gPte0ZDpY62A8Pg" target="_blacnk"><img src="/images/icon_youtube.png"></a></li>
      </ul>

  </div>

</header>