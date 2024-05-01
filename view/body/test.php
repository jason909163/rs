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
                                <li><a class="dropdown-item" href="#esport">電競區</a></li>
                                <li><a class="dropdown-item" href="#sofa">沙發區</a></li>
                                <li><a class="dropdown-item" href="#single-booth">單人包廂</a></li>
                                <li><a class="dropdown-item" href="#duo-booth">雙人包廂</a></li>
                                <li><a class="dropdown-item" href="#four-booth">四人包廂</a></li>
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
                                <li><a class="dropdown-item" href="#one">竹圍店</a></li>
                                <li><a class="dropdown-item" href="#two">民生店</a></li>
                                <li><a class="dropdown-item" href="#three">信陽店</a></li>
                                <li><a class="dropdown-item" href="#four">西門店</a></li>
                                <li><a class="dropdown-item" href="#five">淡水店</a></li>
                                <li><a class="dropdown-item" href="#six">泰山店</a></li>
                                <li><a class="dropdown-item" href="#seven">信義店</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div style="padding-top: 150px;">
        這裡是你的內容
        <div id="esport" style="text-align:center;padding-top: 180px">
            <img src="photo/esport.jpg" alt="esport" style="margin-right: 100px; vertical-align: top;">
            <div style="display: inline-block; vertical-align: top; text-align: left;">
                <blockquote class="blockquote">
                    <p><strong>此區為電競區</strong></p>
                    <p><strong>電腦設備使用 I9 9900K RTX3070 32G RAM</strong></p>
                    <p><strong>歡迎各位邀請朋友一起前來同樂</strong></p>
                </blockquote>
            </div>
        </div>


        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div id="sofa" class="h-25" style="text-align:center;padding-top: 200px">
            <img src="photo/sofa.jpg" alt="sofa" style="margin-right: 100px; vertical-align: top;" width="960px" height="720px">
            <div style="display: inline-block; vertical-align: top; text-align: left;">
                <blockquote class="blockquote">
                    <p><strong>此區為電競沙發區</strong></p>
                    <p><strong>電腦設備使用 I7 8700K RTX3070 32G RAM</strong></p>
                    <p><strong>與電競區的差別在於此區的座椅為訂製沙發</strong></p>
                    <p><strong>跟電競椅相比舒適許多</strong></p>
                    <p><strong>適合在沙發上追劇</strong></p>
                </blockquote>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div id="single-booth" class="h-25" style="text-align:center;padding-top: 200px">
            <img src="photo/1.jpg" alt="single-booth" style="margin-right: 100px; vertical-align: top;" width="960px" height="720px">
            <div style="display: inline-block; vertical-align: top; text-align: left;">
                <blockquote class="blockquote">
                    <p><strong>此區為單人包廂區</strong></p>
                    <p><strong>電腦設備使用 I7 8700K RTX2080 32G RAM</strong></p>
                    <p><strong>因法規關係無法上鎖 但隱蔽性還是很夠的喔~~</strong></p>
                    <p><strong>單人包廂可以容納一名成年人躺下睡覺，</strong></p>
                    <p><strong>玩累了就可以休息</strong></p>
                </blockquote>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div id="duo-booth" class="h-25" style="text-align:center;padding-top: 200px">
            <img src="photo/2.jpg" alt="duo-booth" style="margin-right: 100px; vertical-align: top;" width="960px" height="720px">
            <div style="display: inline-block; vertical-align: top; text-align: left;">
                <blockquote class="blockquote">
                    <p><strong>此區為雙人包廂區</strong></p>
                    <p><strong>電腦設備使用I7 8700K RTX2080 32G RAM</strong></p>
                    <p><strong>歡迎各位邀請朋友一起前來同樂</strong></p>
                    <p><strong>單人包廂可以容納兩名成年人躺下睡覺，</strong></p>
                    <p><strong>空間絕對足夠</strong></p>
                </blockquote>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div id="four-booth" class="h-25" style="text-align:center;padding-top: 200px">
            <img src="photo/4.jpg" alt="four-booth" style="margin-right: 100px; vertical-align: top;" width="960px" height="720px">
            <div style="display: inline-block; vertical-align: top; text-align: left;">
                <blockquote class="blockquote">
                    <p><strong>此區為四人包廂區</strong></p>
                    <p><strong>電腦設備使用 I9 9900K RTX3070 32G RAM</strong></p>
                    <p><strong>非常適合與朋友一起遊玩各種競技遊戲</strong></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>以上照片皆於竹圍店 拍攝每家店格局不同</strong></p>
                    <p><strong>故包廂數量不一定</strong></p>
                    <p><strong>實際情況歡迎到各店參訪</strong></p>
                </blockquote>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</body>

</html>