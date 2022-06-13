<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Кэширование | Quite</title>
</head>

<body>
<?php
require "header.php";

echo "Введите что хотите записать в текстовый файл (запишите информация и нажмите на кнопку ниже, после чего скачивайте)"
?>

<form action="Textovic.php" method="post">
<input type="text" name="txt">
<input type="submit">
</form>

<a href="Text.txt" download>Скачать</a><br>

<?php
$text = $_POST['txt'];

$file = fopen("Text.txt", 'w');
fwrite($file, $text);
fclose($file);
?>

</body>
</html>