<?php
$route = new Router(Request::uri()); //搭配 .htaccess 排除資料夾名稱後解析 URL
$parameter = strtolower($route->getParameter(1));
// 用參數決定載入某頁並讀取需要的資料
 switch ($parameter) { 
  case "call":
    $title = "聯絡我們";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/call.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "shop":
    $title = "電商連結";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/shop.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "sign":
    $title = "點數查詢";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/sign.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "site":
    $title = "座位介紹";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/site.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "drink":
    $title = "餐飲價目表";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/drink.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "cash":
     $title = "包台價目表";
     include('view/header/default.php'); // 載入共用的頁首
     include('view/body/cash.php');
     include('view/footer/default.php'); // 載入共用的頁尾
  break;

  case "index":
    $title = "首頁";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/index.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;
  case "":
    $title = "首頁";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/index.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

  default:
    $title = "404";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/404.php');
    include('view/footer/default.php'); // 載入共用的頁尾
  break;

 }