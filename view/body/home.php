<?php
// 檢查會話是否已啟動
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 檢查用戶是否登入，如果未登入，則重定向到登入頁面
if (!isset($_SESSION['user_point'])) {
    header('Location: login');
    exit;
}

// 從session中讀取用戶的點數
$user_point = $_SESSION['user_point'];
?>

<body>
    <div>歡迎查詢點數！您的點數為： <?php echo $user_point; ?></div>
    <div class="col-xs-6 col-md-6">
        <a href="logout">
            <input type="submit" name="submit" value="登出" class="btn btn-primary btn-block btn-lg" tabindex="5">
        </a>
    </div>
</body>
</html>