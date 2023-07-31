<?php
$username = $_POST['username'];
$password = $_POST['password'];

$credentials = file('user.txt', FILE_IGNORE_NEW_LINES);
$valid = false;

foreach ($credentials as $credential) {
    list($fileUsername, $filePassword) = explode(':', $credential);
    if ($username === $fileUsername && $password === $filePassword) {
        $valid = true;
        break;
    }
}

if ($valid) {
    echo '登录成功！';
} else {
    echo '用户名或密码错误！';
}
?>
