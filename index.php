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

    // Prepare and execute the SQL query to fetch the user data based on the username
    $sql = 'SELECT id, username, password FROM users WHERE username = :username';
    $user = $connect->prepare($sql);
    $user->execute(['username' => $username]);

    // Print the executed SQL query for debugging
    echo 'Executed SQL query: ' . $sql . '<br>';
    echo 'With parameters: username=' . $username . '<br>';

    // Check if the query returned any results
    if ($user->rowCount() > 0) {
        $userData = $user->fetch(PDO::FETCH_ASSOC);
        echo 'User data fetched successfully.<br>';
        var_dump($userData);

        // Check if the provided password matches the stored password
        if ($password === $userData['password']) {
            echo 'Password is correct.<br>';
            $_SESSION['user'] = $userData['id'];
            header('Location: /shop.html');
            exit();
        } else {
            echo 'Invalid password.<br>';
        }
    } else {
        echo 'Invalid username.<br>';
    }
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
