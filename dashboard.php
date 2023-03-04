<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Witaj, <?php echo $_SESSION['login']; ?>!</h1>
    <p>To jest panel kontrolny dla zalogowanych użytkowników.</p>
    <a href="logout.php">Wyloguj</a>
</body>
</html>