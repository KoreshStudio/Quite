<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Кэширование | Quite</title>
</head>

<body>
<?php
require "header.php";
?>

<form action="Cash.php" method="post">
<input type="text" name="cas" placeholder="Введите строку: ">
<input type="submit">
</form>

<?php 
$s = $_POST['cas'];
$res = md5($s);

echo "Закешированная строка: ".$res."<br>";
?>

</body>
</html>
