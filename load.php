<?php
$a = $_POST['search'];

if($a == "!conv") {
	header('Location: apps/Converter.php');
	exit;
}

if($a == "!math") {
	header('Location: apps/Math.php');
	exit;
}

if($a == "!cash") {
	header('Location: apps/Cash.php');
	exit;
}

if($a == "!random") {
	header('Location: apps/Random.php');
	exit;
}

if($a == "!text") {
	header('Location: apps/Textovic.php');
	exit;
}

if($a == "!shablon") {
	header('Location: apps/Files.php');
	exit;
}

else {
	echo "Данная команда не существует!";
}
?>