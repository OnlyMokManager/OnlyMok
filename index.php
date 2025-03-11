<?php
require 'db.connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $naam = $_POST['innaam'];
        $wachtwoord = $_POST['inwachtwoord'];

        $db = startConnection();
        $sql = 'SELECT id, username, [password] FROM [Users] WHERE username = :naam';
        $query = $db->prepare($sql);

        $data_array = [
            ':naam' => htmlspecialchars($naam)
        ];
        $query->execute($data_array);

        if ($rij = $query->fetch()) {
            $passwordhash = $rij['password'];

            if (password_verify($wachtwoord, $passwordhash)) {
                $_SESSION['gebruiker'] = $naam;
                header('Location: /shop.html');
                exit();
            } else {
                echo 'Fout: onjuiste inloggegevens!';
            }
        } else {
            echo 'Onjuiste inloggegevens.';
        }
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
            <button class="login-button" type="submit" name="login">Login</button>
        </form>
    </main>
</body>

</html>