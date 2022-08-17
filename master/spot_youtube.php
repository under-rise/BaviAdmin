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
  <title>YouTube設定（会場） | Bavi 運営側管理ページ</title>
  <link rel="stylesheet" href="/css/reset.css?2.4">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/style.css?1.9">
  <link rel="stylesheet" href="/css/page.css?1.28">
  <link rel="stylesheet" href="/css/form.css?2.91">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/js/main.js?1.3" defer></script>

</head>
<body>
  
  <!--header-->
  <?php include('./tpl/header.html'); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_red">
      <h2><i class="fas fa-fire red"></i>YouTube設定（会場）</h2>
      <a href="#" class="insert_btn btn type01 modal_btn"  data-name=".search_sec">新規登録</a>
    </div>

    <div class="inr">
            
      <div class="page_info">
      <p>BBQ会場トップページのYouTube登録・編集ページ</p>
      </div>
      <!--page_info END-->

            <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

            ?>

            <script>
              $(function(){
                $('.thumnail').click(function(){
                  let isCheck = $(this).parent().find('input[type="checkbox"]').prop('checked');
                  $(this).parent().find('input[type="checkbox"]').prop('checked',!isCheck);
                });
              });
            </script>

            <div class="search_result">

              <div class="ttl02">
                  <h3>検索結果</h3>
              </div>

              <!-- <div class="no_data">見つかりませんでした。<br>条件を変更して検索してください。</div> -->

              <form method="GET" action="" class="form type02">

              <ul class="flex youtube_edit">

              <li>
              
                <div class="movie_sec">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MlTo6V0kYE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="info">
                <h3><a href="/master/spot/">手軽にBBQ会場</a></h3>

                <table class="table_type">
                  <tr>
                    <th>No.</th><td>1</td>
                    <th>都道府県</th><td>東京</td>
                  </tr>
                  <tr>
                    <th>口コミ</th><td>1</td>
                    <th>LIKE数</th><td>11</td>
                  </tr>
                </table>

                <input class="checkbox" type="checkbox" id="id01"><label for="id01">選択する</label>
                </div>

              </li>

              <li>
              
                <div class="movie_sec">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IL6HEPy_uA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>

                <div class="info">
                <h3><a href="/master/spot/">手軽にBBQ会場</a></h3>

                <table class="table_type">
                  <tr>
                    <th>No.</th><td>1</td>
                    <th>都道府県</th><td>東京</td>
                  </tr>
                  <tr>
                    <th>口コミ</th><td>1</td>
                    <th>LIKE数</th><td>11</td>
                  </tr>
                </table>

                <input class="checkbox" type="checkbox" id="id02"><label for="id02">選択する</label>
                </div>

              </li>

              </ul>

              <div class="form">
              <button type="submit" name="submit" >登録する</button>
              </div>

              </form>

            </div>

            <?php

            }

            ?>
            <!--search_result END-->


            <div class="modal_sec search_sec shadow" style="display:none;">
              <div class="inr">
              　  <div class="close close_btn"><i class="fas fa-times"></i></div>
              
                <div class="ttl02">
                <h3>検索条件</h3>
                </div>
                
                <?php include('./tpl/search.html'); ?>
                
              </div>
            </div>


            <ul class="flex youtube_edit">

              <li>
               
                <div class="movie_sec">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MlTo6V0kYE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="info">
                <h3><a href="/master/spot/">手軽にBBQ会場</a></h3>

                <table class="table_type">
                  <tr>
                    <th>No.</th><td>1</td>
                    <th>都道府県</th><td>東京</td>
                  </tr>
                  <tr>
                    <th>口コミ</th><td>1</td>
                    <th>LIKE数</th><td>11</td>
                  </tr>
                </table>

                <form method="POST" action="#" class="form">
                  <button type="button" data-id="1" data-title="タイトル" class="delete type03">削除する</button> 
                  <input type="hidden" value="1" name="delete_id">
                  <input type="hidden" value="タイトル" name="delete_title">
                </form>
                </div>

              </li>

              <li>
               
               <div class="movie_sec">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/k7BUNiJJhSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
               </div>

               <div class="info">
               <h3><a href="/master/spot/">手軽にBBQ会場</a></h3>

               <table class="table_type">
                 <tr>
                   <th>No.</th><td>1</td>
                   <th>都道府県</th><td>東京</td>
                 </tr>
                 <tr>
                   <th>口コミ</th><td>1</td>
                   <th>LIKE数</th><td>11</td>
                 </tr>
               </table>

               <form method="POST" action="#" class="form">
                 <button type="button" data-id="1" data-title="タイトル" class="delete type03">削除する</button> 
                 <input type="hidden" value="1" name="delete_id">
                 <input type="hidden" value="タイトル" name="delete_title">
               </form>
               </div>

             </li>

             <li>
               
             <div class="movie_sec">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/PCsp58BIsmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>

               <div class="info">
               <h3><a href="/master/spot/">手軽にBBQ会場</a></h3>

               <table class="table_type">
                 <tr>
                   <th>No.</th><td>1</td>
                   <th>都道府県</th><td>東京</td>
                 </tr>
                 <tr>
                   <th>口コミ</th><td>1</td>
                   <th>LIKE数</th><td>11</td>
                 </tr>
               </table>

               <form method="POST" action="#" class="form">
                 <button type="button" data-id="1" data-title="タイトル" class="delete type03">削除する</button> 
                 <input type="hidden" value="1" name="delete_id">
                 <input type="hidden" value="タイトル" name="delete_title">
               </form>
               </div>

             </li>

              

            </ul>
            
           
            <p class="pink center mg_b40 mg_t40 bold under-line modal_btn bold"  data-name=".search_sec"><a href="#">トップページにYouTubeを追加</a></p>



            <a href="/master" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>