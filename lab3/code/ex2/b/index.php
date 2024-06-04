<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 2б</title>
</head>
<body>
<h2>Введите ФИ и возраст</h2>
<form action="process.php" method="POST">
    <label for="surname">Фамилия:</label><br>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Возраст:</label><br>
    <input type="number" id="age" name="age"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>