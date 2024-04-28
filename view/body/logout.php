<?php
// 開始會話
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 清除會話中的用戶點數
unset($_SESSION['user_point']);

// 重定向到登入頁面
header('Location:login');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <p>正在登出...</p>
</body>
</html>