<?session_start();?>
<? require_once('config/config.php');?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Molotok</title>
    <link rel="stylesheet" href="/media/css/style.css">
</head>
<body>
<div class="header">
    <div class="wrapper">
        <header>
            <ul class="hdr-list">
                <li class="logo">
                    <a href="/index.php"><img src="/img/logo.png" alt="Logo"></a>
                </li>
                <li class="description">Интернет магазин <br/>Строительных материалов
                </li>
                <li>
                    <a href="/index.php" class="basket">4 товара <br/>на сумму 100 рублей </a>
                </li>
            </ul>
            <div class="info-block">
                <ul class="net-icons">
                    <li><a href="/index.php" class="vk"></a></li>
                    <li><a href="/index.php" class="fb"></a></li>
                </ul>
                <span class="tel">+375292000327</span>
                <ul class="registration">
                    <li><a href="/login.php">Войти</a></li>
                    <li><a href="/register.php">Зарегистрироваться</a></li>
                </ul>
            </div>
        </header>
    </div>
</div>
<div class="nav">
    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/about.html">О магазине</a></li>
                <li>
                    <a href="/index.php">Каталог</a>
                    <ul>
                        <li><a href="/index.php">Сухие смеси</a></li>
                        <li><a href="/index.php">Инструмент</a></li>
                        <li><a href="/index.php">Деревянные изделия</a></li>
                        <li><a href="/index.php">Строительные Жидкости</a></li>
                    </ul>
                </li>
                <li><a href="/index.php">Новости</a></li>
                <li><a href="/index.php">Скидки</a></li>
                <li><a href="/index.php">Оплата</a></li>
                <li><a href="/index.php">Доставка</a></li>
                <li><a href="/contacts.html">Контакты</a></li>
            </ul>
        </nav>
    </div>
</div>