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
  <title>会場口コミ一覧 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../master/tpl/head.php'; ?>
	<link rel="stylesheet" href="/css/question.css?1.3">

	<!-- jQuery UI -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>


	<script>
   $(function() {
    $('#datepicker').datepicker({
      duration: 200,  // 指定ミリ秒の時間をかける
      showAnim: 'slideDown', // スライドダウンで表示する
    });
  });
  </script>

</head>
<body>
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div id="question" class="oneColumn itemBOX shadow">

    <div class="ttl bg_green">
      <h2><i class="fas fa-comment green"></i>会場口コミ一覧</h2>
      <a href="./voice_l.php" class="btn type01 back">一覧に戻る</a>
    </div>

    <div class="inr">

		<div class="page_info">
    <p>口コミの登録・編集ページ</p>
    </div>
    <!--page_info END-->

    <form class="form type02" action="voice_l.php">

				<h3>会場の選択</h3>

				<dl>
				<dt><span>Q1.</span>会場名</dt>
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

				<h3>お客様情報</h3>

				<dl>
					<dt><span>Q1.</span>ニックネーム又はお名前</dt>
					<dd>
						<input type="text" name="" value="" class="iw_40" placeholder="ニックネーム又はお名前を教えてください。">
					</dd>
					
					<dt><span>Q2.</span>年代</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>10代</option>
							<option>20代</option>
							<option>30代</option>
                            <option>40代</option>
                            <option>50代</option>
                            <option>60代以上</option>
						</select>
					</dd>
					
					<dt><span>Q3.</span>性別</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>男性</option>
							<option>女性</option>
						</select>
					</dd>
					
					<dt><span>Q4.</span>利用目的</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>会社</option>
							<option>家族</option>
							<option>友人</option>
                            <option>ソロ</option>
                            <option>その他</option>
						</select>
					</dd>
                    
                    
					
					<dt><span>Q6.</span>利用人数</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>4人未満</option>
							<option>5〜7人</option>
							<option>8〜9人</option>
                            <option>10〜14人</option>
                            <option>15〜19人</option>
                            <option>20〜29人</option>
                            <option>30〜49人</option>
                            <option>50〜99人</option>
                            <option>100〜199人</option>
                            <option>200人以上</option>
						</select>
					</dd>
                    
                    <dt><span>Q7.</span>利用金額（一人当たり）</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>¥500未満</option>
                            <option>¥500〜¥1,000未満</option>
							<option>¥1,000〜¥1,500未満</option>
							<option>¥1,500〜¥2,000未満</option>
                            <option>¥2,000〜¥2,500未満</option>
                            <option>¥2,500〜¥3,000未満</option>
                            <option>¥3,000〜¥3,500未満</option>
                            <option>¥4,000〜¥5,000未満</option>
                            <option>¥6,000〜¥7,000未満</option>
                            <option>¥7,000〜¥8,000未満</option>
                            <option>¥10,000以上</option>
						</select>
					</dd>
                    
                    <dt><span>Q8.</span>利用年月日</dt>
					<dd>
                	<input type="text" name="date" value="" class="allow" id="datepicker">      
					</dd>
                    
                    <dt><span>Q9.</span>滞在時間</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>1時間未満</option>
							<option>1時間〜2時間未満</option>
							<option>2時間〜3時間未満</option>
                            <option>3時間〜4時間未満</option>
                            <option>4時間〜5時間未満</option>
                            <option>5時間〜6時間未満</option>
                            <option>6時間〜7時間未満</option>
                            <option>7時間〜8時間未満</option>
                            <option>8時間以上</option>
						</select>
					</dd>
                    
                    <dt><span>Q10.</span>利用時間帯</dt>
					<dd>
						<select>
							<option>選択してください。</option>
							<option>朝</option>
							<option>昼</option>
							<option>夜</option>
						</select>
					</dd>
				</dl>
                
                <h3>会場への評価</h3>
                
                <dl>
                <dt><span>Q1.</span>周辺施設充実度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q1"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q1"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q1"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q1"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q1"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q2.</span>てぶら度（おまかせ度）</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q2"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q2"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q2"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q2"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q2"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q3.</span>設備充実度（遊具や売店など）</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q3"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q3"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q3"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q3"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q3"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q4.</span>設備キレイ度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q4"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q4"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q4"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q4"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q4"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q5.</span>トイレ清潔度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q5"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q5"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q5"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q5"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q5"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q6.</span>子連れ度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q6"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q6"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q6"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q6"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q6"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q7.</span>アクセス・立地</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q7"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q7"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q7"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q7"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q7"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q8.</span>アウトドア度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q8"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q8"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q8"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q8"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q8"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q9.</span>混雑度</dt>
					<dd>
						<ul class="five">
							<li>
								<label>
									<input type="radio" name="Q9"><span>◎<span>大満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q9"><span>○<span>満足</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q9"><span>△<span>普通</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q9"><span>□<span>やや不満</span></span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="Q9"><span>×<span>不満</span></span>
								</label>
							</li>
						</ul>
						
					</dd>
                    
                    <dt><span>Q10.</span>その他・コメント</dt>
					<dd>
						<textarea placeholder="利用された感想、今後利用される方へのアドバイス、施設側への要望などお書きください。"></textarea>
					</dd>
			
			        </dl>
				
							<button type="submit" class="store">投稿する</button> 
	
  </form>

	<form class="form type02 base" method="POST" >

		<div class="box table">
					<dl>
					<dt style="text-align: center;">返信する</dt>
						<dd>
						<textarea placeholder="こちらの口コミへの返信内容を入力してください。"></textarea>
					</dd>
					</dl>
		</div>

		<button type="submit" class="store">返信する</button> 

	</form>

	<form method="POST" id="delete" action="voice_l.php" class="form type01">
    <button type="button" data-id="1" data-title="タイトル" class="delete">削除する</button> 
    <input type="hidden" value="1" name="delete_id">
    <input type="hidden" value="タイトル" name="delete_title">
  </form>

            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>
    <!--inr END-->

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  

            <div class="modal_sec search_sec shadow area_select_radio" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>都道府県選択</h3>
                </div>
                
                <?php include('./tpl/area.html'); ?>
                
              </div>
 

</body>
</html>