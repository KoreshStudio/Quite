<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Поиск | Quite</title>
</head>

<body>

<?php
require "blocks/header.php";
?>

<center><img src="img/logo.png" width="600px" height="500px"></center>

<form action="load.php" method="post">
<center><input type="text" name="search" class="but"></center>
<center><input type="submit" text="Искать" placeholder="Введите" class="btn btn-primary"></center>
</form>

<?php
echo "<center>"."Сегодня: ".date("d M o")."</center>";
?>

<style>
.but {
	margin-bottom: 10px;
}
</style>

</body>

</html>