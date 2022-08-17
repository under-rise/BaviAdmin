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
      <div><span>東京</span><span class="shop">食材SPOT</span></div>
      <h2><i class="fas fa-store purple"></i> 代官山八百屋</h2>
    </div>

    <div id="" class="oneColumn itemBOX shadow">

        <div class="ttl bg_orange">
          <h2><i class="fas fa-shopping-cart orange"></i>売店メニュー情報</h2>
          <a href="/master/shop/index.php?page=shop" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
      <div class="page_info">
      <p>メニュー設定ページ</p>
      </div>
      <!--page_info END-->

      <form class="form type02 base" method="POST" action="/master/shop/menu.php?page=shop">

      <h3>売店メニューの設定</h3>
      <p class="info">販売する商品メニューの設定</p>

      <div class="box menu_sec">
        
          <ul>
            <li class=" menu_item" data-file="1">

                <div class="img">

                <input type="file" name="menu[image_path][]" class="file_btn mg_b10" data-pos="#file_pos_1">
                <div id="file_pos_1" class="up_imagePreview_sec">
                  <img class="up_imagePreview">
                </div>

                <div class="current_img">
                <img src="/images/storage/shop_main.jpg">
                </div>
                <p class="font_11 mg_t5 center">※推奨サイズ：横600px x 縦400px</p>
                <input type="hidden" name="old_menu_image_path" value="">
                <button type="button" name="delete" class="btn img-delete-btn"  style="margin-top: 10px;">画像を削除する</button>
                </div>

                <div class="box table">
                      <dl>
                          <dt>種別</dt>
                          <dd>
                          <select name="menu[is_special][]">
                              <option>メニュー種別を選択してください。</option>
                              <option value="0">単品</option>
                              <option value="1">特別メニュー</option>
                            </select>
                          </dd>

                      </dl>

                      <dl>
                          <dt>商品名</dt>
                          <dd>
                          <input type="text" name="menu[name][]" value=""  placeholder="商品名を入力ください。">
                          </dd>
                      </dl>
                      
                      <dl>
                          <dt>説　明</dt>
                          <dd>
                          <textarea class="mg_t5" name="menu[condition_text][]" placeholder="商品の補足を入力してください。"></textarea>
                          <p class="font_11 mg_t5">※売店の説明文を入力してください。</p>
                          </dd>
                      </dl>

                      <dl>
                          <dt>金額</dt>
                          <dd>
                          <input type="text" name="menu[price][]" value="" class="iw_40" placeholder="金額を入力ください。">
                          </dd>
                      </dl>

                      <dl>
                          <dt>商品削除</dt>
                          <dd>
                          <input type="hidden" name="menu[id][]" value="3">
                          <button type="button" class="btn btn-danger delete-btn">商品を削除する</button>
                          </dd>
                      </dl>

                      </div>
                      <!--table END-->
            </li>
            <!--li END-->


            <li class="menu_item" data-file="2">

                <div class="img">

                <input type="file" name="menu[image_path][]" class="file_btn mg_b10" data-pos="#file_pos_2">
                <div id="file_pos_2" class="up_imagePreview_sec">
                  <img class="up_imagePreview">
                </div>

                <div class="current_img">
                <img src="/images/storage/spot_main.jpg">
                </div>
                <p class="font_11 mg_t5 center">※推奨サイズ：横600px x 縦400px</p>
                <input type="hidden" name="old_menu_image_path" value="">
                <button type="button" name="delete" class="btn img-delete-btn"  style="margin-top: 10px;">画像を削除する</button>
                </div>

                <div class="box table">
                      <dl>
                          <dt>種別</dt>
                          <dd>
                          <select name="menu[is_special][]">
                              <option>メニュー種別を選択してください。</option>
                              <option value="0">単品</option>
                              <option value="1">特別メニュー</option>
                            </select>
                          </dd>

                      </dl>

                      <dl>
                          <dt>商品名</dt>
                          <dd>
                          <input type="text" name="menu[name][]" value=""  placeholder="商品名を入力ください。">
                          </dd>
                      </dl>
                      
                      <dl>
                          <dt>説　明</dt>
                          <dd>
                          <textarea class="mg_t5" name="menu[condition_text][]" placeholder="商品の補足を入力してください。"></textarea>
                          <p class="font_11 mg_t5">※売店の説明文を入力してください。</p>
                          </dd>
                      </dl>

                      <dl>
                          <dt>金額</dt>
                          <dd>
                          <input type="text" name="menu[price][]" value="" class="iw_40" placeholder="金額を入力ください。">
                          </dd>
                      </dl>

                      <dl>
                          <dt>商品削除</dt>
                          <dd>
                          <input type="hidden" name="menu[id][]" value="2">
                          <button type="button" class="btn btn-danger delete-btn">商品を削除する</button>
                          </dd>
                      </dl>

                      </div>
                      <!--table END-->
            </li>
            <!--li END-->

            <!-- コピー用 -->
            <li id="clone_row" class=" menu_item" style="display: none;" data-file="3">

               <div class="img">

                      <input type="file" name="menu[image_path][]" class="file_btn mg_b10" data-pos="">
                      <div id="" class="up_imagePreview_sec">
                        <img class="up_imagePreview">
                      </div>

                      <div class="current_img">
                      <img src="/images/storage/none.jpg">
                      </div>
                      <p class="font_11 mg_t5 center">※推奨サイズ：横600px x 縦400px</p>
                      <input type="hidden" name="old_menu_image_path" value="">
                      
                      </div>

                      <div class="box table">
                            <dl>
                                <dt>種別</dt>
                                <dd>
                                <select name="menu[is_special][]">
                                    <option>メニュー種別を選択してください。</option>
                                    <option value="0">単品</option>
                                    <option value="1">特別メニュー</option>
                                  </select>
                                </dd>

                            </dl>

                            <dl>
                                <dt>商品名</dt>
                                <dd>
                                <input type="text" name="menu[name][]" value=""  placeholder="商品名を入力ください。">
                                </dd>
                            </dl>
                            
                            <dl>
                                <dt>説　明</dt>
                                <dd>
                                <textarea class="mg_t5" name="menu[condition_text][]" placeholder="営業時間についての補足を入力してください。"></textarea>
                                <p class="font_11 mg_t5">※売店の説明文を入力してください。</p>
                                </dd>
                            </dl>

                            <dl>
                                <dt>金額</dt>
                                <dd>
                                <input type="text" name="menu[price][]" value="" class="iw_40" placeholder="金額を入力ください。">
                                </dd>
                            </dl>

                            <dl>
                                <dt>商品削除</dt>
                                <dd>
                                <input type="hidden" name="menu[id][]" value="">
                                <button type="button" class="btn btn-danger delete-btn">商品を削除する</button>
                                </dd>
                            </dl>

                            </div>
                            <!--table END-->
                      </li>
                      <!--li END-->

          </ul>
      </div>
      <!--menu_sec END-->

   
      <p id="add-btn" class="btn menu_add_btn">商品を追加する</p>
     

      <div class="mg_t30 mg_b30">
      <button type="submit" class="store">変更を保存する</button>
      </div>

      <!-- <a href="#" class="btn type02 clear" style="width: 200px;">クリアする</a> -->
     
      </form> 
     
      <a href="/master/shop/?page=shop" class="btn type05">TOPに戻る</a>

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

      //現在の画像削除
      $('body').on('change', '.file_btn', function() {
          $(this).nextAll('.current_img').hide();
      });

      $('body').on('click', '.delete-btn', function() {
            $(this).parent().parent().parent().parent().remove();
      });

      $("body").on('click','#add-btn',function () {
            const file_name = "file_pos_";
            let new_pos = $('.menu_sec').find('li.menu_item').last().data('file');
            new_pos = Number(new_pos)+1;
          
            let clone_tr = $("#clone_row").clone();
            clone_tr.prop('id', '');
            clone_tr.find("select").prop('disabled', false).show();
            clone_tr.find("input").prop('disabled', false).show();
            clone_tr.find("textarea").prop('disabled', false).show();
            clone_tr.find('button').show();
            clone_tr.find('input[type="file"]').attr('data-pos',"#"+file_name+new_pos);
            clone_tr.find('.up_imagePreview_sec').attr('id',file_name+new_pos);
            clone_tr.attr('data-file',new_pos);
            $('.menu_sec').find('li.menu_item').last().after(clone_tr);
            $(clone_tr).show();
        });

        $('.img-delete-btn').click(function() {
            if(!confirm('画像を削除しましす。宜しいですか？')){
              return false;
            }
            $(this).parent().find('input').val('');
            $(this).parent().find('img').attr('src','/images/storage/none.jpg');
            $(this).remove();
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