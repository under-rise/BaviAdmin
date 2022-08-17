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
  <title>お問合せ | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>
  <link rel="stylesheet" href="/css/question.css?1.3">
</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div id="question" class="oneColumn itemBOX shadow">

    <div class="ttl bg_blue">
      <h2><i class="fas fa-id-card blue"></i>お問合せ</h2>
      <a href="../spot/" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>オーナー様から管理事務局へのお問合せフォーム</p>
    </div>
    <!--page_info END-->

      <form class="form type02" method="POST" action="/master/guest/contact.php?page=guest">

          <h3>お問合せフォーム</h3>

          <dl>
			    	<dt>お名前</dt>
				  	<dd>
						<input type="text" name="" value="" class="iw_40" placeholder="株式会社GPC様" readonly>
					  </dd>
				  </dl>

          <dl>
          <dt>お問合せ種類</dt>
            <dd>
            <select style="margin-top: 10px;" class="iw_40">
                <option>お問合せ種類を選択してください。</option>
                <option>Bavi機能について</option>
                <option>操作方法について</option>
                <option>広告掲載について</option>
                <option>システム不具合の報告</option>
                <option>その他</option>
              </select>
            </dd>
          </dl>

          <dl>
			    	<dt>お問合せ内容</dt>
				  	<dd>
						<textarea placeholder="お問合せ内容を入力ください。"></textarea>
					  </dd>
				  </dl>

          


  <button type="submit" class="store">送信する</button> 

  <a href="#" class="btn type02 clear" style="width: 200px;">クリアする</a>

  <input type="hidden" value="タイトル" name="store_id">
</form>



   <a href="./guest_l.php" class="btn type05">一覧に戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include(__DIR__.'/../../master/tpl/footer.html'); ?>
  <!--footer END-->

 
  
</body>
</html>