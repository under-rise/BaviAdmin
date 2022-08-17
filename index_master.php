<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Bavi マスター管理ページ</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/page.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/css/form.css?1.2">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/js/main.js" defer></script>

</head>
<body>

<div id="logo_sec">
    <div id="logo"><img src="/images/logo.png"></div>
    <h1 class="mosgreen bold">マスター管理ページ</h1>
</div>

<div class="login shadow">

  <div class="inr">
  
  <form method="POST" action="/master/" class="form">
  
  <div class="table">

    <dl>
      <dt>ログインID</dt>
      <dd><input type="text" value=""></dd>
    </dl>

    <dl>
      <dt>パスワード</dt>
      <dd><input type="password" value=""></dd>
    </dl>
    
    </div>

    <button type="submit">ログイン</button>
    
    </form>
 
  <p>ログインID・パスワードが分からない場合は<br>下記窓口までご連絡ください。<br>TEL: 03-5856-2030  <a href="mailto:info@bavi.jp" class="under-line">E-mail: info@bavi.jp</a>
  </div>
  <!--inr END -->

</div>
<!-- itemBOX END -->

  
<!--footer-->
<footer>
  <dl>
    <dt>運営会社: ゼネラルパーソンカンパニー株式会社</dt>
    <dd>〒120-0001東京都足立区大谷田3丁目21番6号<dd>
    <dd>TEL: 03-5856-2030</dd>  
    <dd>E-mail: info@bavi.jp</dd>
  </dl>
  <p id="copyright">© Copyright Bavi all right reserved.</p>
</footer>
<!--footer END-->

</body>
</html>