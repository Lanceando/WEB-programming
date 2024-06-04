<!DOCTYPE html>
<html lang="en">
<head>
    <title>Задание 2а</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $word_count = str_word_count($text);
    $symb_count = strlen($text);
    echo "<p>Word Count: $word_count</p>";
    echo "<p>Symbols Count: $symb_count</p>";
}
?>
<a href="index.php">Back</a>
</body>
</html>