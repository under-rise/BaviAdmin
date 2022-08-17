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
  <title>表示設定 | Bavi 運営側管理ページ</title>

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

      <div class="ttl bg_blue">
          <h2><i class="fas fa-mobile-alt blue"></i>表示設定</h2>
          <a href="/master/spot/index.php?page=spot" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
            <div class="page_info">
              <p>会場の写真やYouTube・キャッチコピーなどの設定ページ</p>
            </div>
            <!--page_info END-->

            <form class="form type02 base" method="POST" enctype="multipart/form-data" action="/master/spot/display.php?page=spot">

            <h3 class="nextToggleBtn">会場の基本表示設定</h3>
            <p class="info">店舗のキャッチコピーや画像などの基本情報設定</p>

                <div class="box table">

                <dl>
                  <dt>タイトル</dt>
                  <dd>
                  <input type="text" name="infection_control_class_people" value="" class="iw_40" >
                  <p class="font_11 mg_t5">※会場のキャッチコピーを入力してください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>会場の本文<span class="icon modal_btn" data-name=".exampleModal" data-filekey="spot_comment">例文を見る</span></dt>
                  <dd>
                  <textarea class="mg_t10" name="infection_control_comment"></textarea>
                  <p class="font_11 mg_t5">※会場のサービスや施設概要を入力してください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>会場画像</dt>
                  <dd>
                  <ul class="flex file_select_sec">

                    <li>
                     <input type="file" name="spot_image[1]" data-pos="#file_pos_1">
                     <div id="file_pos_1" class="up_imagePreview_sec">
                        <img class="up_imagePreview">
                     </div>
                    </li>

                    <li>
                     <input type="file" name="spot_image[2]" data-pos="#file_pos_2">
                     <div id="file_pos_2" class="up_imagePreview_sec">
                        <img class="up_imagePreview">
                     </div>
                    </li>

                    <li>
                     <input type="file" name="spot_image[2]" data-pos="#file_pos_3">
                     <div id="file_pos_3" class="up_imagePreview_sec">
                        <img class="up_imagePreview">
                     </div>
                    </li>

                  </ul>
                  <p class="font_11 mg_t5">※推奨サイズ：横600px x 縦400px</p>
                  </dd>
                </dl>

                <dl>
                  <dt>画像現在の設定</dt>
                  <dd>
                  <ul class="flex file_select_sec">

                    <li>
                      <img src="/images/storage/shop_main.jpg">
                      <button type="button" name="delete" class="delete"  style="margin-bottom: 0;"">削除する</button>
                    </li>

                    <li>
                      <img src="/images/storage/spot_main.jpg">
                      <button type="button" name="delete" class="delete"  style="margin-bottom: 0;">削除する</button>
                    </li>

                    <li>
                      <img src="/images/storage/none.jpg">
                      <button type="button" name="delete" class="delete"  style="margin-bottom: 0;">削除する</button>
                    </li>

                  </ul>
                  </dd>
                </dl>
            
                </div>
                <!--box table END-->

                <h3 class="nextToggleBtn">会場の特徴</h3>
                <p class="info">会場の特徴を選択ください（複数選択可）</p>

                <div class="box table">

                  <dl>
                    <dt>特 徴</dt>
                    <dd>
                    <ul class="flex type02 feature_checkbox">
                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="1" checked>
                       料金無料
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="2" >
                      予約必要なし
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="3" >
                      トイレあり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="4" >
                      ゴミ捨て場あり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="5" >
                      ペット同伴可能
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="6" >
                      管理人あり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="7" >
                      自動機・売店あり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="8" >
                      宿泊施設あり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="9" >
                      シャワーあり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="10" >
                      かまどあり
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="11" >
                      食材持込可能
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="12" >
                      炊事場有り
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="13" >
                      道具レンタル有り
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="14" >
                      食材販売有り
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="spots_spot_features[]" value="15" >
                      夜プラン有り
                      </label>
                      </li>
                      
                    </ul>
                    </dd>
                  </dl>

                </div>
                <!--box table END-->

                <h3 class="nextToggleBtn">検索条件設定</h3>
                <p class="info">ユーザー検索時の検索結果に反映されます。</p>

                <div class="box table">

                  <dl>
                    <dt>ロケーション</dt>
                    <dd>
                    <ul class="flex type02 feature_checkbox">
                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="1">
                       川
                      </label>
                      </li>

                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="2">
                       海
                      </label>
                      </li>

                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="3">
                       都心
                      </label>
                      </li>

                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="4">
                       静か
                      </label>
                      </li>

                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="5">
                       公園
                      </label>
                      </li>
                      <li>
                      <label>
                       <input type="checkbox" name="option_id[1][]" value="32">
                       山
                      </label>
                      </li>
                    </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>予約制度</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[2][]" value="6">
                        予約制
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[2][]" value="7">
                        予約不要
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>会場料金</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="8">
                        無料
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="9">
                        有料
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>駅からの距離</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="10">
                        徒歩5分以内 
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="11">
                        徒歩6分〜10分以内 
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="12">
                        徒歩11分〜20分以内
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="13">
                        それ以上  
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>駐車場有無</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="14">
                        10台未満  
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="15">
                        11台〜30台 
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="16">
                        31台〜50台
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="17">
                        51台〜100台  
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="18">
                        それ以上  
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>炊事場</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[6][]" value="19">
                        有り  
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[6][]" value="20">
                        無し  
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>会場内機材レンタル</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[7][]" value="21">
                        有り  
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[7][]" value="22">
                        無し  
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>会場内食材販売</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[8][]" value="23">
                        有り  
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[8][]" value="24">
                        無し  
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>お手洗い</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[9][]" value="25">
                        古い 
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[9][]" value="26">
                        普通
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[9][]" value="27">
                        新しい
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>ペット</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[10][]" value="28">
                        可 
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[10][]" value="29">
                        不可
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>夜営業(16時以降)</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[11][]" value="30">
                        有り  
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[11][]" value="31">
                        無し
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                </div>
                <!--box table END-->

                <h3 class="nextToggleBtn">YouTube設定</h3>
                <p class="info">YouTubeの動画を設定ください。</p>

                <div class="box table youtube_edit">
                <dl>
                  <dt>URL<span class="icon modal_btn" data-name=".methodModal">入力方法</span></dt>
                  <dd>
                  <input type="text" name="youtube_url" value="" >
                  <p class="font_11 mg_t5">※共有 > 埋め込むから、iframe〜のタグをすべてコピーしてください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>現在の設定</dt>
                  <dd>
                  <div class="movie_sec one">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/PCsp58BIsmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <button type="button" name="delete" class="delete"  style="margin-bottom: 0;">削除する</button>
                  </dd>
                </dl>
                </div>
                <!--box table END-->


                <div class="mg_t30 mg_b30">
                <button type="submit" class="store">登録する</button>
                </div>

            </form>

          

            <a href="/master" class="btn type05 mg_t20">TOPに戻る</a>

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