<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Главная | Quite</title>
</head>

<body>

<?php
require "blocks/header.php";
?>

<div id="oneinfo">
<center><h2>Хостинг уникальных веб-приложений</h3></center>
<center><h4>Для тебя</h4></center>
</div>

<div id="ostap">
<center><h1>Информация</h1></center>
<center><img src="img/logo.png" width="400px" height="400px"></center>
<p>Quite - проект основной идеей которого, заключается размещение многих полезных для всех веб-приложений в одном месте. Данный проект начал работу 2 июня 2022, на разработку первой версии сайта понадобилось всего несколько дней. Сайт создан и управляется одним человеком - Кириллом Дятловым. Логотип создан Smith_12, за что мы его благодарим. Чтобы найти нужный сервис, вам надо открыть вкладку в шапке "Поиск" и воспользоваться простым поисковиком там. Снизу представлены команды данного поисковика</p>
<center><h1>Команды</h1></center>
<ul>
<li>!conv - запускает интересный конвертер длины</li>
<li>!math - приложение которое проведет различные мат. манипуляции</li>
<li>!cash - закешируйте пароль например</li>
<li>!random - хотите найти какой-нибудь прикольный, но малоизвестный сайт? Вам туда!</li>
<li>!text - нет под рукой блокнота, а надо записать текстовый файл? Вам сюда!</li>
<li>!shablon - иногда нужно скачать пустые файлы чтобы потом их редактировать</li>
</ul>

<center><h1>Почему Quite?</h1></center>
<center><img src="img/why.png"></center>

</div>


<style>
#oneinfo {
	padding-top: 350px;
}

h2 {
	color: white;
}

#oneinfo {
	width: 100%;
    height: 900px;
    background-image: url(https://get.pxhere.com/photo/laptop-notebook-computer-work-keyboard-technology-mouse-macro-modern-font-electronics-multimedia-computer-keyboard-electronic-device-computer-hardware-musical-keyboard-computer-component-993802.jpg);
    background-blend-mode: multiply;
    background-color: #2e3a;
    background-size: cover;
    text-align: center;
    font-size: 3em;
}

#ostap {
	padding-top: 125px;
}
</style>

<?php
require "blocks/footer.php";
?>

</body>

</html>