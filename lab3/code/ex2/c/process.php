<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $food = $_POST['food'];


    $userData = array(
        'Имя' => $name,
        'Возраст' => $age,
        'Любимая еда' => $food
    );


    $_SESSION['userData'] = $userData;


    header("Location: display.php");
    exit();
} else {

    header("Location: index.php");
    exit();
}
?>