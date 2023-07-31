<?php
// 开启会话
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

// 读取 player.txt 文件的内容
$players = file_get_contents('player.txt');
?>

<!DOCTYPE html>
<html>
<head>
  <title>后台管理</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>后台管理</h2>
    <p><a href="logout.php">退出登录</a></p>
    <h3>玩家列表</h3>
    <pre><?php echo $players; ?></pre>
  </div>
</body>
</html>
