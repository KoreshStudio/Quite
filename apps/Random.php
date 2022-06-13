<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Найти сайт | Quite</title>
</head>

<body>
<?php
require "header.php";

$a = mt_rand(1, 10);

if($a == 1) {
	header('Location: http://beesbeesbees.com/');
	exit;
}

if($a == 2) {
	header('Location: http://everydayim.com');
	exit;
}

if($a == 3) {
	header('Location: http://eelslap.com');
	exit;
}

if($a == 4) {
	header('Location: http://leduchamp.com/');
	exit;
}

if($a == 5) {
	header('Location: http://koalastothemax.com');
	exit;
}

if($a == 6) {
	header('Location: http://randomcolour.com');
	exit;
}

if($a == 7) {
	header('Location: http://rrrgggbbb.com');
	exit;
}

if($a == 8) {
	header('Location: http://cat-bounce.com');
	exit;
}

if($a == 9) {
	header('Location: http://taghua.com/');
	exit;
}

if($a == 10) {
	header('Location: http://chrismckenzie.com/');
	exit;
}
?>

</body>
</html>