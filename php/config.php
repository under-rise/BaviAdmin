<?php
function isDetailPage()
{

  if (!is_null($_GET['page'])) {
    $query = $_GET['page'];
    if ($query == 'spot' || $query == 'shop') {
      return true;
    }
  } else {
    return false;
  }
}

//page = postでヘッダー読み込み変更
function headerInclude()
{

  if (!is_null($_GET['page'])) {
    $query = $_GET['page'];
    switch ($query) {
      case 'spot':
        include(__DIR__ . '/../master/tpl/header_spot_detail.php');
        break;
      case 'shop':
        include(__DIR__ . '/../master/tpl/header_shop_detail.php');
        break;
      case 'guest':
        include(__DIR__ . '/../master/tpl/header_register_list.php');
        break;
    }
  } else {
    include(__DIR__ . '/../master/tpl/header.html');
  }
}

function isUser()
{
  if (isset($_GET['user']) && $_GET['user'] == 'on') {
    return true;
  }
}