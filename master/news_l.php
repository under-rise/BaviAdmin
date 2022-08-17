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
  <title>BBQ会場口コミ一覧 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>

</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->
  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_yellow">
      <h2><i class="fas fa-rss yellow"></i>NEWS配信一覧</h2>
      <a href="news_edit.php" class="insert_btn btn type01">新規登録</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>Bavi運営から配信されたニュース一覧ページ</p>
    </div>
    <!--page_info END-->

            <?php
             if(isset($_POST['delete_title'])){
              echo '<div class="flush_message">'.$_POST['delete_title'].'を削除しました。</div>';
             }
            ?>


            <p class="center mg_b10">NEWS配信数 <span class="bold pink">100</span> 件</p>

            <div class="table type02">
        
              <dl class="head">
                <dt class="w5"><a href="#" onClick="alert('ソート機能予定'); return false">No. ▼</a></dt>
                <dt class="w15 lg"><a href="#" onClick="alert('ソート機能予定'); return false">登録日 ▼</a></dt>
                <dt class="w30">タイトル</dt>
                <dt class="w20">投稿ユーザー名</dt>
                <dt class="w15 lg">表示先</dt>
                <dt class="w5 lg"><a href="#" onClick="alert('ソート機能予定'); return false">表示 ▼</a></dt>
                <dt class="w10 lg">編集</dt>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">1</a></dd>
                <dd class="w15 lg">2021.10.31</dd>
                <dd class="w30"><a href="news_edit.php">画埋込機能リリース致しました。</a></dd>
                <dd class="w20"><a href="#">BBQ運営株式会社</a></dd>
                <dd class="w15 lg">ユーザー＋オーナー</dd>
                <dd class="w5 lg"><a href="#" onClick="alert('表示切り替え予定'); return false" class="on">表示中</a></dd>
                <dd class="w10 lg"><a href="news_edit.php" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/news/show/2" target="_blank"class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">2</a></dd>
                <dd class="w15 lg">2021.10.31</dd>
                <dd class="w30"><a href="news_edit.php">Baviユーザー様へニュース</a></dd>
                <dd class="w20">Bavi管理人</dd>
                <dd class="w15 lg">ユーザーのみ</dd>
                <dd class="w5 lg"><a href="#" onClick="alert('表示切り替え予定'); return false" class="off">非表示</a></dd>
                <dd class="w10 lg"><a href="news_edit.php" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/news/show/2" target="_blank"class="btn type02 preview">プレビュー</a></dd>
              </dl>

              <dl>
                <dd class="w5"><a href="https://bavi.jp/spot/detail/335" target="_blank">2</a></dd>
                <dd class="w15 lg">2021.10.31</dd>
                <dd class="w30"><a href="news_edit.php">オーナー様へのニュース</a></dd>
                <dd class="w20">Bavi管理人</dd>
                <dd class="w15 lg">オーナーのみ</dd>
                <dd class="w5 lg"><a href="#" onClick="alert('表示切り替え予定'); return false" class="off">非表示</a></dd>
                <dd class="w10 lg"><a href="news_edit.php" class="btn type02 mg_b5 edit">編集</a><a href="https://bavi.jp/news/show/2" target="_blank"class="btn type02 preview">プレビュー</a></dd>
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

            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="news_edit.php">新規にNEWS配信する</a></p>

            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>