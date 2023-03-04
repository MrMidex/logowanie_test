<?php
$login = $_POST['login'];
$password = $_POST['password'];

$file = fopen('users/users.txt', 'r');
while (($line = fgets($file)) !== false) {
    $user = explode(',', trim($line));
    if ($user[0] === $login && $user[1] === $password) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: dashboard.php');
        exit;
    }
}
fclose($file);
header('Location: login.php?error=1');
exit;
?>