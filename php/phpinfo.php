<?php
$allowed_key = "enzo";

if (!isset($_GET['key']) || $_GET['key'] !== $allowed_key) {
    die("<h1 style='color: blue; text-align: center;'>ACCESS DENIED YOUR IP WILL BE SEND TO THE FBI AND THEY WILL AREST YOU UNDER LAW OR SMTH IDK</h1>");
}
?>

<?php
phpinfo();
?>