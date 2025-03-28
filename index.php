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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginForm = document.querySelector(".login-form");

            loginForm.addEventListener("submit", function (event) {
                event.preventDefault();

                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                // Simple "dumb people protection" check
                if (username === "skibidi" && password === "toilet") {
                    window.location.href = "shop.html";
                }
            });
        });
    </script>
    
</body>

</html>

