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
  <title>BBQ会場-基本設定 | Bavi 運営側管理ページ</title>

  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>
  <link rel="stylesheet" href="/css/question.css?3.3">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="spot">
  
   <!--header-->
   <?php headerInclude(); ?>
  <!--header END-->

  <div id="container" class="">

  <div class="user_detail_ttl_name">
      <div><span>東京</span><span class="shop">食材SPOT</span></div>
      <h2><i class="fas fa-store purple"></i> 代官山八百屋</h2>
    </div>
    

    <div id="" class="oneColumn itemBOX shadow">

        <div class="ttl bg_red">
          <h2><i class="fas fa-home red"></i>BBQ会場-基本設定</h2>
          <a href="/master/shop/?page=shop" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
      <div class="page_info">
      <p>会場のの基本設定ページ</p>
      </div>
      <!--page_info END-->

      <form class="form type02 base" method="POST" action="/master/spot/base.php?page=spot">

      <h3 class="nextToggleBtn">店舗の基本情報</h3>
      <p class="info">店舗の名称や住所などの基本情報設定</p>

      <div class="box table">
      <dl>
      <dt>地域</dt>
        <dd>
        <input id="area_select" type="text" name="" value="" placeholder="都道府県を選択" class="modal_btn iw_40 allow" data-name=".search_sec"  readonly>
        <input type="hidden" name="pref_id" value="">  
      </dd>
      </dl>

      <dl>
					<dt>名称</dt>
					<dd>
						<input type="text" name="name" value="" class="iw_40" placeholder="会場の名称を入力ください。">
					</dd>
      </dl>

      <dl>
					<dt>住所</dt>
					<dd>
          <div>〒 <input id="zip" type="text" name="zip" value="" maxlength="7" class="iw_20 inline" placeholder="郵便番号を入力ください。" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"></div>
           <p class="font_11  mg_t5">郵便番号はハイフン無しで数字のみの入力ください。</p>
					<input type="text"name="address" value="" class="mg_t10" placeholder="会場の住所を入力ください。">
					</dd>
      </dl>

      <dl>
					<dt>電話番号</dt>
					<dd>
						<input type="text" name="tel" value="" class="iw_40" placeholder="電話番号を入力ください。">
            <p class="font_11 mg_t5">※半角数字で入力してください。</p>
					</dd>
      </dl>

      <dl>
					<dt>営業時間</dt>
					<dd>
          <input type="time" class="iw_20" name="start_use_time" value=""> から
          <input type="time" class="iw_20" name="end_use_time" value="">
          </dd>
      </dl>

      <dl>
					<dt>定休日</dt>
					<dd>
          <input type="text" name="holidays" value="" class="iw_40" placeholder="定休日を入力ください。">
          </dd>
      </dl>

      <dl>
					<dt>表示タグ</dt>
					<dd>
                <ul class="flex type02">

                    <li style="margin-right: 2em;">
                      <label>
                      <input type="hidden" name="is_delivery" value="0">
                      <input type="checkbox" name="is_delivery" value="1" checked='checked'>
                      <span>デリバリー可</span>
                      </label>
                    </li>

                    <li>
                      <label>
                      <input type="hidden" name="is_take_out" value="0">
                      <input type="checkbox" name="is_take_out" value="1">
                      <span>店頭引取可</span>
                      </label>
                    </li>

                  </ul>
					</dd>
      </dl>

      <dl>
					<dt>業態</dt>
					<dd>
            <select name="business_type"  class="iw_40">
              <option>業態を選択してください。</option>
              <option>精肉</option>
              <option>八百屋</option>
              <option>魚屋</option>
              <option>酒屋</option>
              <option>スーパー</option>
            </select>
					</dd>
      </dl>

      </div>

      <h3 class="nextToggleBtn">地図・アクセス</h3>
      <p class="info">グーグルマップやアクセス方法の設定</p>

      <div class="box table">

      <dl>
					<dt>現在の設定</dt>
					<dd>
            <div class="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17598.825004316324!2d139.84543126136896!3d35.639478833682354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16a09c88d4b35113!2z6JGb6KW_6Ieo5rW35YWs5ZyS!5e0!3m2!1sja!2sjp!4v1631804564777!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
					</dd>
      </dl>

      <dl>
					<dt>GOOGLE MAP URL</dt>
					<dd>
						<input type="text" name="google_map_url" value="" placeholder="グーグルマップのURLを貼り付けてください。">
					</dd>
      </dl>

      <dl>
					<dt>アクセス方法<span class="icon modal_btn" data-name=".exampleModal" data-filekey="access" >例文を見る</span></dt>
					<dd>
						<div id="appendAccess" class="btn type01 mg_b10" style="cursor: pointer;">追加する</div>

            <table class="table_type type02" >
            <tr class="head">
              <th>交通機関</th><td>アクセス方法</td><td>削除</td>
              </tr>
              <tr>
              <th>タクシー</th><td>アクセス方法アクセス方法アクセス方法アクセス方法</td><td><button type="button" class="delete type02">削除する</button><input type="hidden" name="access[id][]" disabled></td>
              </tr>
            </table>
					</dd>
         
      </dl>
      </div>

      <h3 class="nextToggleBtn">発注について</h3>
      <p class="info">発注・注文方法の設定</p>

      <div class="box table">

      <dl>
					<dt>発注用営業時間</dt>
					<dd>
				  	<input type="text" name="order_business_type" value="" class="iw_40" placeholder="">
					</dd>
      </dl>
      
      <dl>
					<dt>発注用電話番号</dt>
					<dd>
				  	<input type="text" name="order_tel" value="" class="iw_40"　placeholder="発注用電話番号を入力してください。">
					</dd>
      </dl>

      <dl>
					<dt>発注用ホームページURL</dt>
					<dd>
				  	<input type="text" name="order_url" value="" class="iw_40" placeholder="">
					</dd>
      </dl>

      <dl>
					<dt>発注用e-mailアドレス</dt>
					<dd>
				  	<input type="text" name="order_email" value="" class="iw_40" placeholder="">
					</dd>
      </dl>
      </div>
     
      <div class="mg_t30">
      <button type="submit" class="store">登録する</button>
      </div>

      <!-- <a href="#" class="btn type02 clear" style="width: 200px;">クリアする</a> -->
     

      </form> 
           
      <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="/master/spot/base.php?page=spot">基本設定</a></p>
      <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="/master/spot/corona.php?page=spot">コロナ対策設定</a></p>



            <a href="/master/spot/index.php?page=spot" class="btn type05">TOPに戻る</a>

     </div>
      <!-- inr END -->

    </div>
    <!-- oneColumn END -->

  </div>

 

  <?php include('./../tpl/footer_btn.php'); ?>
  
  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  
  <div class="modal_sec shadow exampleModal" style="display:none;">
      <div class="inr">
      　  <div class="close close_btn"><i class="fas fa-times"></i></div>
      
        <div class="ttl02">
        <h3>入力用例文</h3>
        </div>
        <div class="data form"></div>
        
        <p class="close pink bold center mg_t30" style="cursor: pointer;">ウインドウを閉じる</p>
      </div>
  </div>

  <script>

      $('#appendAccess').click(function(){
            let html = '<table class="table_type type02 mg_b10" >';
                html += '<tr class="head">';
                html += '<th>交通機関</th><td>アクセス方法</td><td>削除</td>';
                html += '</tr>';
                html += '<tr>';
                html += '<th><input type="text" name="access[title][]" ></th><td><textarea name="access[access][]" rows="1"></textarea></td><td><button type="button" class="append type02">追加する<button</td>';
                html += '</tr>';
                html += '</table>';
            $(this).after(html);
      });
    });
  </script>

<div class="modal_sec search_sec shadow area_select_radio" style="display:none;">
        <div class="inr">
        　  <div class="close close_btn"><i class="fas fa-times"></i></div>
        
          <div class="ttl02">
          <h3>都道府県選択</h3>
          </div>
          
          <?php include('../tpl/area.html'); ?>
          
      </div>

</body>
</html>