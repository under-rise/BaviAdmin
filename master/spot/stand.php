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
  <title>売店情報 | Bavi 運営側管理ページ</title>

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
      <div><span>東京</span><span class="spot">BBQ会場</span></div>
      <h2><i class="fas fa-fire red"></i> 多摩川緑地バーベキュー広場</h2>
    </div>
    

    <div id="" class="oneColumn itemBOX shadow">

        <div class="ttl bg_orange">
          <h2><i class="fas fa-shopping-cart orange"></i>売店情報</h2>
          <a href="/master/spot/index.php?page=spot" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
      <div class="page_info">
      <p>売店情報設定ページ</p>
      </div>
      <!--page_info END-->

      <form class="form type02 base" method="POST" action="/master/spot/stand.php?page=spot">

      <h3>売店情報の基本情報</h3>
      <p>会場の名称や住所などの基本情報設定</p>

      <div class="box table">

      <dl>
					<dt>タイトル<span class="icon modal_btn" data-name=".exampleModal" data-filekey="stand_title" >例文を見る</span></dt>
					<dd>
						<input type="text" name="title" value="" placeholder="">
            <p class="font_11 mg_t5">※売店のキャッチコピーを入力してください。</p>
          </dd>
      </dl>

      <dl>
					<dt>売店説明文<span class="icon modal_btn" data-name=".exampleModal" data-filekey="stand_body" >例文を見る</span></dt>
					<dd>
          <textarea class="mg_t10" name="body" placeholder="営業時間についての補足を入力してください。"></textarea>
          <p class="font_11 mg_t5">※売店の説明文を入力してください。</p>
					</dd>
      </dl>

      <dl>
            <dt>売店の画像設定</dt>
            <dd>
            <ul class="flex file_select_sec">

              <li>
                  <input type="file" name="image_path" data-pos="#file_pos_1">
                  <div id="file_pos_1" class="up_imagePreview_sec">
                    <img class="up_imagePreview">
                  </div>
              </li>

            </ul>
            <p class="font_11 mg_t5">※推奨サイズ：横600px x 縦400px</p>
            </dd>
       </dl>

      <dl>
            <dt>現在の設定画像</dt>
            <dd>
            <ul class="flex file_select_sec">

              <li>
                <img src="/images/storage/shop_main.jpg">
                <button type="button" name="delete" class="delete"  style="margin-bottom: 0;"">削除する</button>
              </li>

            </ul>
            </dd>
       </dl>

      </div>


      <h3>商品登録</h3>
      <p>販売商品を登録を入力ください。</p>

      <div class="box table">
        <dl>
            <dt>商品登録</dt>
            <dd>
              <div id="appendStand" class="btn type01 mg_b10" style="cursor: pointer;">追加する</div>

              <table class="table_type type02" >
                <tr class="head">
                <th style="width: 20%;">商品名</th><td style="width: 50%;">説明</td><td style="width: 20%;">金額</td><td>削除</td>
                </tr>
                <!-- <tr>
                <th>道具・用品（レンタル・販売）</th><td>バーベキューコンロ、カセットコンロ（ボンベ別）</td><td>各種550円</td><td><button type="button" class="delete type02">削除する</button><input type="hidden" name="access[id][]" disabled></td>
                </tr> -->
              </table>
            </dd>
          
        </dl>
      </div>

      
      <div class="mg_t30 mg_b30">
      <button type="submit" class="store">登録する</button>
      </div>

      <!-- <a href="#" class="btn type02 clear" style="width: 200px;">クリアする</a> -->
     
      </form> 
     
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

    $(function(){

      $('body').on('click', '.delete-btn', function() {
            $(this).parent().parent().remove();
      });

      $('#appendStand').click(function(){
            // let html = '<table class="table_type type02 mg_b10" >';
            //     html += '<tr class="head">';
            //     html += '<th>交通機関</th><td>アクセス方法</td><td>削除</td>';
            //     html += '</tr>';
            let html  = '<tr>';
                html += '<th><input type="text" name="stand_item[name][]" ></th><td><textarea name="stand_item[condition_text][]" rows="1"></textarea></td><td><input type="text" name="stand_item[price][]" ></td><td><input type="hidden" name="stand_item[id][]" disabled><button type="button" class="type02 delete-btn">削除する</button><input type="hidden" name="access[id][]" disabled></td>';
                html += '</tr>';
            $(this).next('table').find('tr:last').after(html);
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