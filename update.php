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
        }

        button {
            font-size: 32px;
            padding: 20px 40px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #218838;
        }

        pre {
            font-size: 18px;
            color: #ddd;
            white-space: pre-wrap;
            text-align: left;
            width: 80%;
            max-width: 800px;
            background: #333;
            padding: 15px;
            border-radius: 5px;
            overflow: auto;
        }

        main {
            background-color: #0b69dd;
        }
    </style>
</head>

<body>
    <main>
        <form method="POST">
            <button type="submit" name="update">UPDATE WEBSITE</button>
        </form>
    </main>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>" . shell_exec('cd C:/xampp/htdocs/onlymok && git pull origin main 2>&1') . "</pre>";
    }
    ?>

</body>

</html>