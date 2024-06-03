<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RS電競工廠 - <?php echo $title ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0En0szB8gc6zUGIOHrEWg9wCj1/NtDOyfySaJF1bf+qJxp1k7rgn5DdcpwR4woM" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-jFk5kXoC9n/oK3rVnls8tQ6Ue8+hKxy3FVz65V0jMgzwCbiYZBw2QzBNT1PvOsff" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
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

    html {
      scroll-behavior: smooth;
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
              <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#drink" role="button" data-toggle="dropdown" aria-expanded="false">價目表</a>
              <ul id="dropdownMenu1" class="dropdown-menu">
                <li><a class="dropdown-item" href="drink">餐飲價目表</a></li>
                <li><a class="dropdown-item" href="cash">包台價目表</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown2" class="nav-link dropdown-toggle" href="#site" role="button" data-toggle="dropdown" aria-expanded="false">座位介紹</a>
              <ul id="dropdownMenu2" class="dropdown-menu">
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
              <a class="nav-link" href="index#footer">電商連結</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown3" class="nav-link dropdown-toggle" href="#call" role="button" data-toggle="dropdown" aria-expanded="false">聯絡我們</a>
              <ul id="dropdownMenu3" class="dropdown-menu">
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
  <script>
    $(document).ready(function() {
      // 使用事件代理绑定点击事件
      $(".navbar-nav").on('click', '.nav-item.dropdown', function(e) {
        var $dropdown = $(this);
        var $dropdownMenu = $dropdown.find('.dropdown-menu');

        // 关闭除当前点击的菜单以外的所有其他下拉菜单
        $(".nav-item.dropdown").not($dropdown).find('.dropdown-menu').slideUp("slow");

        // 切换当前菜单的显示状态
        $dropdownMenu.slideToggle("slow");

        // 阻止事件冒泡
        e.stopPropagation();
      });

      // 点击其他区域时关闭下拉菜单
      $(document).on('click', function(e) {
        if (!$(e.target).closest('.nav-item.dropdown').length) {
          $('.nav-item.dropdown .dropdown-menu').slideUp("slow");
        }
      });

      // 点击下拉菜单项时阻止默认事件
      $('.dropdown-menu').on('click', function(e) {
        e.stopPropagation();
      });
    });
  </script>
  <div style="padding-top: 150px;">