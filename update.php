<?php
$allowed_key = "enzo";

if (!isset($_GET['key']) || $_GET['key'] !== $allowed_key) {
    die("<h1 style='color: blue; text-align: center;'>ACCESS DENIED YOUR IP WILL BE SEND TO THE FBI AND THEY WILL AREST YOU UNDER LAW OR SMTH IDK</h1>");
}

session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $message = "<pre>" . shell_exec('cd C:/xampp/htdocs && git pull origin main 2>&1') . "</pre>";
    } elseif (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        $message = "<p>All sessions have been removed.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Website</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #0793e9;
            color: white;
            font-family: Arial, sans-serif;
        }

        .message-box {
            background-color: #6caeff;
            font-size: 18px;
            color: #222;
            white-space: pre-wrap;
            text-align: left;
            width: 80%;
            max-width: 800px;
            padding: 15px;
            border-radius: 5px;
            overflow: auto;
            margin-bottom: 20px;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        button {
            font-size: 24px;
            padding: 20px;
            background-color: rgb(11, 98, 204);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: rgb(10, 91, 189);
        }

        .info-box {
            background-color: #6caeff;
            font-size: 18px;
            color: #222;
            white-space: pre-wrap;
            text-align: left;
            width: 80%;
            max-width: 800px;
            padding: 15px;
            border-radius: 5px;
            overflow: auto;
        }
    </style>
</head>

<body>

    <div class="message-box">
        <?php echo $message; ?>
    </div>

    <form method="POST" class="button-container">
        <button type="submit" name="update">Update Website</button>
        <button type="submit" name="logout">Unset Sessions</button>
        <button type="button">Button 3</button>
        <button type="button">Button 4</button>
        <button type="button">Button 5</button>
    </form>

    <div class="info-box">
        <p>Current session gebruiker: <?php echo isset($_SESSION['gebruiker']) ? $_SESSION['gebruiker'] : 'None'; ?></p>
    </div>

</body>

</html>
