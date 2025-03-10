<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Website</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #222;
            color: white;
            font-family: Arial, sans-serif;
            background-color: #0793e9;
        }

        button {
            font-size: 48px;
            padding: 20px 40px;
            background-color:rgb(11, 98, 204);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color:rgb(10, 91, 189);
        }

        pre {
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

        <form method="POST">
            <button type="submit" name="update">UPDATE WEBSITE</button>
        </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>" . shell_exec('cd C:/xampp/htdocs/onlymok && git pull origin main 2>&1') . "</pre>";
    }
    ?>

</body>

</html>