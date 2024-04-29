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
    <div class="container">
        <div class="text-center">
            <h1 class="mb-4">歡迎查詢點數！</h1>
            <p class="lead">您的點數為： <?php echo $user_point; ?></p>
            <a href="logout" class="btn btn-primary btn-lg">登出</a>
        </div>
    </div>
</body>
</html>
