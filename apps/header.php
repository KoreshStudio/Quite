<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>

<div id="header">
<h1>Quite</h1>
<a href="index.php" target="a_blank">Главная</a> |
<a href="searc.php" target="a_blank">Искать сервисы</a> |
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
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;1,900&display=swap');

a {
	color: blue;
}
  
body {
  font-family: 'Nunito', sans-serif;
}

#header {
	background-color: #FFEBCD;
}
</style>
</body>

</html>