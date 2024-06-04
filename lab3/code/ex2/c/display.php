<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2с</title>
</head>
<body>
<h2>Информация о пользователе:</h2>
<ul>
    <?php
    if (isset($_SESSION['userData'])) {
        foreach ($_SESSION['userData'] as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
    } else {
        echo "<li>Нет информации</li>";
    }
    ?>
</ul>
</body>
</html>