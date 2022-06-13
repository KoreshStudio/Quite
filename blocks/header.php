<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>

<div id="header">
<h1>Quite</h1>
<a href="index.php" target="a_blank">Главная</a> <a>|</a>
<a href="searc.php" target="a_blank">Искать сервисы</a> <a>|</a>
<a href="https://www.donationalerts.com/r/kirill888dobrovolec" target="a_blank">Донат</a>

<?php
$srok = "Работаем для вас пока меньше года";
setcookie("term", $srok, time() + 31536000);
echo "<center>".$_COOKIE["term"]."</center>";
?>
</div>

<div id="a">
</div>

<style>

a {
	color: blue;
	padding-left: 10px;
}

h1 {
	padding-left: 10px;
	color: black;
}
  
body {
  font-family: 'Nunito', sans-serif;
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>