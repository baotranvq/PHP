<?php
session_start();

// Kiểm tra user đã đăng nhập
if (!isset($_COOKIE['info'])) {
    // Chuyển hướng đến trang đăng nhập
    header('Location: cookie.php');
    exit;
}

// Lấy dữ liệu của user từ cookie
$info = unserialize($_COOKIE['info']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($info['uname']); ?>!</h1>
    <p>Your password is: <?php echo htmlspecialchars($info['psw']); ?></p>
</body>
</html>