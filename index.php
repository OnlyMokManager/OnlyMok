<?php
require 'db.connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'POST request received.<br>';
    if (isset($_POST['login'])) {
        echo 'Login button clicked.<br>';
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo 'Username: ' . $username . '<br>';
        echo 'Password: ' . $password . '<br>';

        $db = startConnection();
        if ($db) {
            echo 'Database connection successful.<br>';
        } else {
            echo 'Database connection failed.<br>';
        }

        $sql = 'SELECT username, [password] FROM [Users] WHERE username = :username';
        $query = $db->prepare($sql);
        echo 'SQL query prepared.<br>';

        $data_array = [
            ':username' => htmlspecialchars($username)
        ];
        $query->execute($data_array);
        echo 'SQL query executed.<br>';

        if ($user = $query->fetch()) {
            echo 'User found.<br>';
            $connectedPassword = $user['password'];
            echo 'Connected password: ' . $connectedPassword . '<br>';

            if ($password === $connectedPassword) {
                echo 'Password matches.<br>';
                $_SESSION['gebruiker'] = $username;
                header('Location: /shop.html');
                exit();
            } else {
                echo 'Password does not match.<br>';
            }
        } else {
            echo 'User not found.<br>';
        }
    } else {
        echo 'Login button not clicked.<br>';
    }
} else {
    echo 'Not a POST request.<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyMok - Login</title>
    <link rel="stylesheet" href="normalize.css">
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
            <button class="login-button" type="submit" name="login">Login</button>
        </form>
    </main>
</body>

</html>