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
      <div><span>東京</span><span class="shop">食材SPOT</span></div>
      <h2><i class="fas fa-store purple"></i> 代官山八百屋</h2>
    </div>

    <div class="oneColumn itemBOX shadow">

      <div class="ttl bg_blue">
          <h2><i class="fas fa-mobile-alt blue"></i>表示設定</h2>
          <a href="/master/spot/index.php?page=spot" class="btn type01 back">一覧に戻る</a>
        </div>

        <div class="inr">
            
            <div class="page_info">
              <p>店舗の写真やYouTube・キャッチコピーなどの設定ページ</p>
            </div>
            <!--page_info END-->

            <form class="form type02 base" method="POST" enctype="multipart/form-data" action="/master/spot/display.php?page=spot">

            <h3 class="nextToggleBtn">店舗の基本表示設定</h3>
            <p class="info">店舗のキャッチコピーや画像などの基本情報設定</p>

                <div class="box table">

                <dl>
                  <dt>タイトル</dt>
                  <dd>
                  <input type="text" name="infection_control_class_people" value="" class="iw_40" >
                  <p class="font_11 mg_t5">※店舗のキャッチコピーを入力してください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>店舗の本文<span class="icon modal_btn" data-name=".exampleModal" data-filekey="spot_comment">例文を見る</span></dt>
                  <dd>
                  <textarea class="mg_t10" name="infection_control_comment"></textarea>
                  <p class="font_11 mg_t5">※店舗のサービスや施設概要を入力してください。</p>
                  </dd>
                </dl>

                <dl>
                  <dt>店舗画像</dt>
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

                <h3 class="nextToggleBtn">検索条件設定</h3>
                <p class="info">ユーザー検索時の検索結果に反映されます。</p>

                <div class="box table">

                  <dl>
                    <dt>カテゴリー</dt>
                    <dd>
                    <ul class="flex type02 feature_checkbox">
                      <li>
                      <label>
                      <input type="checkbox" name="option_id[1][]" value="1" checked>
                      肉
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="option_id[1][]" value="2" >
                      魚
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="option_id[1][]" value="3" >
                      ドリンク
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="option_id[1][]" value="4" >
                      スーパー
                      </label>
                      </li>

                      <li>
                      <label>
                      <input type="checkbox" name="option_id[1][]" value="5" >
                      備品
                      </label>
                      </li>

                    </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>BBQセット</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[2][]" value="6">
                        あり
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[2][]" value="7">
                        なし
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>


                  <dl>
                      <dt>BBQ場からの距離</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="8">
                        徒歩5分以内 
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="9">
                        徒歩6分〜10分以内 
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="10">
                        徒歩11分〜20分以内
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[3][]" value="11">
                        それ以上  
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>駐車場の有無</dt>
                  <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="12">
                        有り
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[4][]" value="13">
                        無し
                        </label>
                        </li>

                      </ul>
                    </dd>
                  </dl>

                  <dl>
                      <dt>デリバリー</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="14">
                        有り
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="radio" name="option_id[5][]" value="15">
                        無し
                        </label>
                        </li>

                      </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>注文</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="radio" name="option_id[6][]" value="16">
                        当日のみ   
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[6][]" value="17">
                        当日、事前注文  
                        </label>
                        </li>
                        <li>
                        <label>
                        <input type="radio" name="option_id[6][]" value="18">
                        事前注文のみ  
                        </label>
                        </li>
                        </ul>
                       </dd>
                    </dl>

                    <dl>
                      <dt>決済方法</dt>
                      <dd>
                      <ul class="flex type02 feature_checkbox">
                        <li>
                        <label>
                        <input type="checkbox" name="option_id[7][]" value="19">
                        現金
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="checkbox" name="option_id[7][]" value="20">
                        クレジット
                        </label>
                        </li>

                        <li>
                        <label>
                        <input type="checkbox" name="option_id[7][]" value="21">
                        電子マネー
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