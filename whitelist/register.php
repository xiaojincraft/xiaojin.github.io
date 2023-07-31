<?php
// 获取游戏ID和QQ号
$gameId = $_POST['game_id'];
$qq = $_POST['qq'];

// 格式化数据
$data = $gameId . ':' . $qq . "\n";

// 将信息追加到player.txt文件
file_put_contents('player.txt', $data, FILE_APPEND);

// 重定向到成功页面
header('Location: success.html');
exit;
?>
