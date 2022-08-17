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
  <title>クーポン一覧 | Bavi 運営側管理ページ</title>
  <?php  require  __dir__.'/../../master/tpl/head.php'; ?>

</head>
<body id="spot">
  
  <!--header-->
  <?php headerInclude(); ?>
  <!--header END-->

  <div id="container">

  <div class="oneColumn itemBOX shadow">

    <div class="ttl bg_h-blue">
      <h2><i class="fas fa-ticket-alt h-blue"></i>発行クーポン一覧</h2>
      <a href="coupon_edit.php?page=spot" class="insert_btn btn type01" >新規登録</a> 
    </div>

    <div class="inr">

    <div class="page_info">
    <p>発行クーポン一覧ページ</p>
    </div>
    <!--page_info END-->

    <p class="center mg_b10">発行クーポン数 <span class="bold pink">2</span> 件</p>

    <ul class="flex coupon_list">

      <li class="present">

      <table class="table_type">

        <tr><th>クーポン種別</th><td>プレゼント型</td></tr>
        <tr><th>公開日</th><td>2021年10月20日</td></tr>
        <tr><th>タイトル</th><td>お肉プレゼント！</td></tr>
        <tr><th>条件テキスト</th><td>3,000円以上のお買い上げで</td></tr>
        <tr><th>開始日</th><td>2021年10月20日から</td></tr>
        <tr><th>終了日</th><td>2021年10月20日まで</td></tr>
       
      </table>

      <a href="coupon_edit.php?page=spot"  type="submit" class="btn type03 edit">編集する</a>

      <form method="POST" action="#" class="form">
                 <p data-id="1" data-title="お肉プレゼント！" class="delete btn type03">削除する</p>
                 <input type="hidden" value="1" name="delete_id">
                 <input type="hidden" value="お肉プレゼント！" name="delete_title">
      </form>
              

      </li>

      <li class="discount">

      <table class="table_type">

        <tr><th>クーポン種別</th><td>割引型</td></tr>
        <tr><th>公開日</th><td>2021年10月20日</td></tr>
        <tr><th>タイトル</th><td>ビール半額</td></tr>
        <tr><th>条件テキスト</th><td>3,000円以上のお買い上げで</td></tr>
        <tr><th>開始日</th><td>2021年10月20日から</td></tr>
        <tr><th>終了日</th><td>2021年10月20日まで</td></tr>
       
      </table>

      <a href="coupon_edit.php"  type="submit" class="btn type03 edit">編集する</a>

      <form method="POST" action="#" class="form">
                 <p data-id="1" data-title="ビール半額" class="delete btn type03">削除する</p>
                 <input type="hidden" value="1" name="delete_id">
                 <input type="hidden" value="ビール半額" name="delete_title">
      </form>

      </li>

      <li class="discount">

      <table class="table_type">

        <tr><th>クーポン種別</th><td>割引型</td></tr>
        <tr><th>公開日</th><td>2021年10月20日</td></tr>
        <tr><th>タイトル</th><td>ビール半額</td></tr>
        <tr><th>条件テキスト</th><td>3,000円以上のお買い上げで</td></tr>
        <tr><th>開始日</th><td>2021年10月20日から</td></tr>
        <tr><th>終了日</th><td>2021年10月20日まで</td></tr>
       
      </table>

      <a href="coupon_edit.php"  type="submit" class="btn type03 edit">編集する</a>

      <form method="POST" action="#" class="form">
                 <p data-id="1" data-title="ビール半額" class="delete btn type03">削除する</p>
                 <input type="hidden" value="1" name="delete_id">
                 <input type="hidden" value="ビール半額" name="delete_title">
      </form>

      </li>


    </ul>

            
            <p class="pink center mg_b40 mg_t20 under-line bold"><a href="coupon_edit.php?page=spot">クーポンを追加する</a></p>

            <a href="/master/spot/?page=spot" class="btn type05">TOPに戻る</a>

     </div>

  </div>

  </div>

  <!--footer-->
  <?php include('./../tpl/footer.html'); ?>
  <!--footer END-->
  
</body>
</html>