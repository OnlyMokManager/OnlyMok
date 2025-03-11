<?php
require 'db.connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo 'Username: ' . $username . '<br>';
    echo 'Password: ' . $password . '<br>';

    // Check if the username and password are not empty
    if (empty($username) || empty($password)) {
        echo 'Username or password is empty.<br>';
        exit();
    }

    // Prepare and execute the SQL query to fetch all data from users table
    $users = $connect->prepare('SELECT * FROM users');
    $users->execute();

    // Fetch all user data
    $allUsers = $users->fetchAll(PDO::FETCH_ASSOC);
    echo 'All user data fetched successfully.<br>';
    var_dump($allUsers);
    exit(); // Ensure the script stops execution so you can see the var_dump output
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
            <button class="login-button" type="submit">Login</button>
        </form>
    </main>
</body>

</html>
