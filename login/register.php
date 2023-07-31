<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen('user.txt', 'a');
fwrite($file, "$username:$password\n");
fclose($file);

header("Location: login.html");
exit;
?>
