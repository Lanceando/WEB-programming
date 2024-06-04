<?php
session_start();


if (isset($_SESSION["user_info"])) {
    $userInfo = $_SESSION["user_info"];

    echo "Фамилия: " . $userInfo["surname"] . "<br>";
    echo "Имя: " . $userInfo["name"] . "<br>";
    echo "Возраст: " . $userInfo["age"] . "<br>";
} else {
    echo "Нет информации о пользователе";
}
