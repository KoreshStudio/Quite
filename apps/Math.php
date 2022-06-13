<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Математика | Quite</title>
</head>

<body>
<?php
require "header.php";
?>

<form action="Math.php" method="post">
<input type="krug" name="round" placeholder="Округление числа">
<input type="submit"><br>
</form>

<?php
$rounder = $_POST['round'];

echo "Округленное число: ".round($rounder)."<br>";

echo "Рандомное число: ".mt_rand(1, 999)."<br>";
?>

<form action="Math.php" method="post">
<input type="text" name="cos" placeholder="Найти косинус">
<input type="submit">
</form>

<?php
$cos = $_POST['cos'];
$cs = cos($cos);

echo "Косинус равен: ".$cs."<br>";
?>

<form action="Math.php" method="post">
<input type="text" name="sin" placeholder="Введите синус">
<input type="submit">
</form>

<?php
$s = $_POST['sin'];
$sin = sin($s);

echo "Синус равен: ".$sin."<br>";
?>

<?php
echo "От 1 января 1970 прошло: ".time()." секунд"."<br>";
$cok = "Этот сервис находится на стадии бета версии!";
setcookie("sessiya", $cok, time() + 3888000);
echo $_COOKIE['sessiya'];
?> 

</body>
</html>