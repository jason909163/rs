<?php
$route = new Router(Request::uri()); //搭配 .htaccess 排除資料夾名稱後解析 URL
$route->getParameter(1); // 從 http://127.0.0.1/game/aaa/bbb 取得 aaa 字串之意

// 用參數決定載入某頁並讀取需要的資料
switch ($route->getParameter(1)) {
  default:
    $title = "HOME";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/index.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;
}
