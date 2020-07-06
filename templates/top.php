<?session_start();?>
<? require_once('config/config.php');?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Molotok</title>
    <link rel="stylesheet" href="/media/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<div class="header">
    <div class="wrapper">
        <header>
            <ul class="hdr-list">
                <li class="logo">
                    <a href="/index.php"><img src="/media/img/logo.png" alt="Logo"></a>
                </li>
                <li class="description">Интернет магазин <br/>Строительных материалов
                </li>
                <li>
                    <a href="/index.php" img src="/media/img/basket.png" class="basket" >4 товара <br/>на сумму 100 рублей </a>
                </li>
            </ul>
            <div class="info-block">
                <ul class="net-icons">
                    <li><a href="/index.php" class="vk"img src="/media/img/vk.png"></a></li>
                    <li><a href="/index.php" class="fb"img src="/media/img/vk.png"></a></li>
                </ul>
                <span class="tel">+375292000327</span>
                <ul class="registration">
                    <li><a href="/login.php">Войти</a></li>
                    <li><a href="/register.php">Зарегистрироваться</a></li>
                </ul>
                <ul class="registration">
                    <? if ($_SESSION['user_id']) { ?>
                        <li>
                            <a class="registration" href="/cabinet.php">Кабинет</a>
                        </li>
                        <li>
                            <a class="registration" href="/logout.php">Выход</a>
                        </li>
                        <?
                        if (isset($profile_user['id'])) {
                            ?>
                            <li>
                                <img src="<?= $profile_user['picture'] ?>" alt="l">
                            </li>
                        <? } ?>
                    <? } else { ?>
                        <li>
                            <a class="registration" href="/register.php">

                            </a>
                        </li>
                        <li>
                            <a class="registration" href="/login.php">

                            </a>
                        </li>

                    <? } ?>
                </ul>
                <div id="empty">
                <div id="title"></div> 
                <div id="body"></div>  

                </div>
            </div>

        </header>
    </div>
</div>
<div class="nav">
    <div class="wrapper">
        <nav>
            <ul class ="topmenu">
                <li><a href="/index.php" data-title="Интеренет магазин строительных материалов Молоток" data-body="ONe" data-picture="/media/img/pic.png" >Главная</a></li>
                <li><a href="/about.php" data-title="Приходите в наш магазин" data-body="Описание магазина" data-picture="/media/img/catalog.png" >О магазине</a></li>
                <li>
                    <a href="/index.php" data-title="Категории товаров" data-body="Для мелкого и крупного ремонта" data-picture="/media/img/pic.png">Каталог</a>
                    <ul>
                        <li><a href="/index.php">Сухие смеси</a></li>
                        <li><a href="/index.php">Инструмент</a></li>
                        <li><a href="/index.php">Деревянные изделия</a></li>
                        <li><a href="/index.php">Строительные Жидкости</a></li>
                    </ul>
                </li>
                <li><a href="/index.php" data-title="Распродажа товаров от производителя" data-body="Технониколь" data-picture="/media/img/news.png" >Новости</a></li>
                <li><a href="/index.php" data-title="Каждому новоселу" data-body="5% скидка" data-picture="/media/img/pic.png" >Скидки</a></li>
                <li><a href="/index.php"  data-title="Наличный и Безналичный расчет" data-body="А также рассрочка и кредит" data-picture="/media/img/pic.png" >Оплата</a></li>
                <li><a href="/index.php" data-title="Доставка бесплатная" data-body="от 100 руб" data-picture="/media/img/pic.png" >Доставка</a></li>
                <li><a href="/contacts.php" data-title="Наш магазин в Минске и Бресте" data-body="По адресу г.Минск ул.Сенницкая" data-picture="/media/img/pic.png">Контакты</a></li>
            </ul>
        </nav>
    </div>
</div>