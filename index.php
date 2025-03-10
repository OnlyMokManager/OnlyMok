<?php
require 'db.connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $connect->prepare('SELECT id, username, password FROM users WHERE username = :username AND password = :password');
    $user->execute(['username' => $username, 'password' => $password]);

    if ($query->rowCount() > 0) {
        $_SESSION['user'] = $query['id'];
        header('Location: shop.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyMok - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="login-page">
        <img class="logo" src="onlymoklogo.png" alt="OnlyMok logo">
        <div class="login-box"></div>
        <form class="login-form" method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button class="login-button" type="submit">Login</button>
        </form>
    </main>
</body>

</html>