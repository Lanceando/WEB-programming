<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Доска объявлений</title>
</head>
<body>
<h1>Доска объявлений</h1>

<h2>Добавить объявление</h2>
<form action="post_ad.php" method="post">
    Email: <input type="email" name="email" required><br>
    Категория:
    <select name="category">
        <option value="Машины">Машины</option>
        <option value="Вакансии">Вакансии</option>
    </select><br>
    Заголовок объявления: <input type="text" name="title" required><br>
    Текст объявления: <textarea name="description" required></textarea><br>
    <input type="submit" value="Добавить">
</form>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>

</table>
</body>
</html>