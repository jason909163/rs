<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RS電競工廠 - <?php echo $title ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* 自定義導航欄 */
    .navbar {
      background-color: #000;
      /* 蘋果官網的導航欄顏色 */
    }

    .navbar-brand img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      /* 確保標誌符合指定空間 */
    }

    .navbar-nav .nav-link {
      color: #fff !important;
      /* 鏈接的白色文本顏色 */
    }

    .dropdown-menu {
      background-color: #000;
      /* 蘋果官網的下拉菜單顏色 */
    }

    .dropdown-menu a {
      color: #fff !important;
      /* 下拉項目的白色文本顏色 */
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index">
          <img src="photo/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">價目表</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="drink">餐飲價目表</a></li>
                <li><a class="dropdown-item" href="cash">包台價目表</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#site" role="button" data-toggle="dropdown" aria-expanded="false">座位介紹</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="site#esport">電競區</a></li>
                <li><a class="dropdown-item" href="site#sofa">沙發區</a></li>
                <li><a class="dropdown-item" href="site#single-booth">單人包廂</a></li>
                <li><a class="dropdown-item" href="site#duo-booth">雙人包廂</a></li>
                <li><a class="dropdown-item" href="site#four-booth">四人包廂 </a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register">點數查詢</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop">電商連結</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="call" role="button" data-toggle="dropdown" aria-expanded="false">聯絡我們</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="call#one">竹圍店</a></li>
                <li><a class="dropdown-item" href="call#two">民生店</a></li>
                <li><a class="dropdown-item" href="call#three">信陽店</a></li>
                <li><a class="dropdown-item" href="call#four">西門店</a></li>
                <li><a class="dropdown-item" href="call#five">淡水店 </a></li>
                <li><a class="dropdown-item" href="call#six">泰山店 </a></li>
                <li><a class="dropdown-item" href="call#seven">信義店 </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div style="padding-top: 150px;">
    <!-- 這裡是你的內容 -->