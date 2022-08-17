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
  <title>コロナ対策設定 | Bavi 運営側管理ページ</title>

  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>

  <link rel="stylesheet" href="/css/question.css?3.3">

</head>
<body id="spot" class="corona_sec">
  
   <!--header-->
   <?php headerInclude(); ?>
  <!--header END-->

  <div id="container" class="">

    <div class="user_detail_ttl_name">
      <div><span>東京</span><span class="spot">BBQ会場</span></div>
      <h2><i class="fas fa-fire red"></i> 多摩川緑地バーベキュー広場</h2>
    </div>
    

    <div class="oneColumn itemBOX shadow">

      <div class="ttl bg_red">
          <h2><i class="fas fa-home red"></i>コロナ対策設定</h2>
          <a href="/master/spot/index.php?page=spot" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
            <div class="page_info">
              <p>コロナ対策設定ページ</p>
            </div>
            <!--page_info END-->

            <form class="form type02 base" method="POST" action="/master/spot/corona.php?page=spot">

                <div class="box table">
                <dl>
                  <dt>コロナ対策推奨店</dt>
                  <dd>
                  <ul class="flex type02">

                    <li style="margin-right: 2em;">
                      <label>
                      <input type="radio" name="is_infection_control_shop" value="1">
                      <span>推奨する</span>
                      </label>
                    </li>

                    <li>
                      <label>
                      <input type="radio" name="is_infection_control_shop" value="0">
                      <span>なし</span>
                      </label>
                    </li>

                  </ul>
                  </dd>
                </dl>

                <dl>
                  <dt>コロナ対策推奨店</dt>
                  <dd>
                  <ul class="flex type02">

                    <li style="margin-right: 2em;">
                      <label>
                      <input type="radio" name="is_infection_control_status" value="1">
                      <span>営業中</span>
                      </label>
                    </li>

                    <li>
                      <label>
                      <input type="radio" name="is_infection_control_status" value="0">
                      <span>休業中</span>
                      </label>
                    </li>

                  </ul>
                  </dd>
                </dl>

                <dl>
                  <dt>コロナ禍営業</dt>
                  <dd>
                  <input type="time" class="iw_20" name="infection_control_start_use_time" value="00:00:00"> から
                  <input type="time" class="iw_20" name="infection_control_end_use_time" value="00:00:00">
                  </dd>
                </dl>

                <dl>
                  <dt>1組人数制限</dt>
                  <dd>
                  <input type="text" name="infection_control_class_people" value="" class="iw_40" >
                  <p class="font_11 mg_t5">※利用制限があれば入力ください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>利用人数制限</dt>
                  <dd>
                  <input type="text" name="infection_control_use_people" value="" class="iw_40">
                  <p class="font_11 mg_t5">※利用制限があれば入力ください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>約束事項<span class="icon modal_btn" data-name=".exampleModal" data-filekey="corona_promise">例文を見る</span></dt>
                  <dd>
                  <textarea class="mg_t10" name="infection_control_promise"></textarea>
                  <p class="font_11 mg_t5">※コロナ禍での利用約束事項がありましたらご記入ください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>会場からのコメント<span class="icon modal_btn" data-name=".exampleModal" data-filekey="corona_comment">例文を見る</span></dt>
                  <dd>
                  <textarea class="mg_t10" name="infection_control_comment"></textarea>
                  <p class="font_11 mg_t5">※コロナ禍での利用約束事項がありましたらご記入ください。</p>
                  </dd>
                </dl>
            
                </div>

                <div class="mg_t30">
                <button type="submit" class="store">登録する</button>
                </div>

            </form>

            <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="/master/spot/base.php?page=spot">基本設定</a></p>
            <p class="pink center mg_b40 mg_t40 under-line modal_btn bold"  data-name=".search_sec"><a href="/master/spot/corona.php?page=spot">コロナ対策設定</a></p>


            <a href="/master" class="btn type05">TOPに戻る</a>

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
  
</body>
</html>