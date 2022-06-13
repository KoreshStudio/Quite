<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Конвертер | Quite</title>
</head>

<body>

<?php
require "header.php";
?>

<form action="Converter.php" method="post">
<input type="text" name="mer" placeholder="Введите длину (метры)">
<input type="submit"><br>
</form>

<?php 
$merka = $_POST['mer'];
$dm = $merka * 10;
$sm = $merka * 100;
$mm = $sm * 10;
$mrk = $merka * 1000000;
echo "Метры: ".$merka."<br>";
echo "Дециметры: ".$dm."<br>";
echo "Сантиметры: ".$sm."<br>";
echo "Миллиметры: ".$mm."<br>";
echo "Микрон: ".$mrk."<br>";
?>

</body>

</html>