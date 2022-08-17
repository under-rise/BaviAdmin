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
  <title>クーポン編集 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>
  <link rel="stylesheet" href="/../../css/question.css?1.3">

  <!-- jQuery UI -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
	


	<script>
   $(function() {
    $('.datepicker').datepicker({
      duration: 200,  // 指定ミリ秒の時間をかける
      showAnim: 'slideDown', // スライドダウンで表示する
    });
  });
  </script>

</head>
<body id="spot">
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div id="question" class="oneColumn itemBOX shadow">

    <div class="ttl bg_h-blue">
      <h2><i class="fas fa-ticket-alt h-blue"></i>クーポン編集</h2>
      <a href="/master/spot/coupon_l.php?page=spot" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

    <div class="page_info">
    <p>発行クーポン新規発行・編集ページ</p>
    </div>
    <!--page_info END-->


    <form class="form type02" method="POST" action="coupon_l.php?page=spot">

				<h3>会場の選択</h3>

				<dl>
				<dt>会場名</dt>
					<dd>
					<input id="area_select" type="text" name="" value="" placeholder="都道府県を選択" class="modal_btn iw_40 allow" data-name=".search_sec"  readonly>
					        
          <select style="margin-top: 10px;">
							<option>会場を選択してください。</option>
							<option>会場名1</option>
							<option>会場名2</option>
							<option>会場名3</option>
							<option>会場名4</option>
							<option>会場名5</option>
						</select>
					</dd>
				</dl>

        <h3>クーポンの内容</h3>

        <dl>
				<dt><span>Q1.</span>クーポン種別</dt>
					<dd>
					        
          <select style="margin-top: 10px;">
							<option>クーポン種別を選択してください。</option>
							<option>プレゼント型</option>
							<option>割引型</option>
						</select>
					</dd>
				</dl>

        <dl>
				<dt><span>Q2.</span>クーポンタイトル</dt>
					<dd>
						<input type="text" name="" value="" class="iw_40" placeholder="クーポンタイトルを入力してください。">
            <p class="font_11 mg_t5">推奨文字サイズ：30文字まで</p>
					</dd>
				</dl>

        <dl>
				<dt><span>Q3.</span>公開日</dt>
					<dd>
          <input type="text" name="date" value="" class="allow iw_40 datepicker" id="">      
					</dd>
				</dl>

        <dl>
				<dt><span>Q4.</span>条件テキスト</dt>
					<dd>
          <input type="text" name="" value="" class="iw_40" placeholder="クーポン利用条件をご記入ください。">
            <p class="font_11 mg_t5">推奨文字サイズ：50文字まで</p>
					</dd>
				</dl>

        <dl>
				<dt><span>Q5.</span>開始日</dt>
					<dd>
          <input type="text" name="date" value="" class="allow iw_40 datepicker" id="">      
          <p class="font_11 mg_t5">クーポンのご利用期間（開始日）</p>
					</dd>
				</dl>

        <dl>
				<dt><span>Q6.</span>終了日</dt>
					<dd>
          <input type="text" name="date" value="" class="allow iw_40 datepicker" id="">      
          <p class="font_11 mg_t5">クーポンのご利用期間（終了日）</p>
					</dd>
				</dl>

        <button type="submit" class="store">クーポン発行する</button>
        
        <a href="#" class="btn type02 clear" style="width: 200px;">クリアする</a>

    </form>

            
            <!-- <p class="pink center mg_b40 mg_t20 under-line bold"><a href="#">クーポンを追加する</a></p> -->

            <a href="/master/spot/coupon_l.php?page=spot" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->

  <div class="modal_sec search_sec shadow area_select_radio" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>都道府県選択</h3>
                </div>
                
                <?php include(__DIR__.'/../../master/tpl/area.html'); ?>
                
              </div>
  
</body>
</html>