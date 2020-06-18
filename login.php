

<?php require_once('templates/top.php') ;?>
    if (!empty($_POST)){
    $error = [];}
    if ($_POST['password'] != $_POST['password-repeat']){
        $error[] = 'Не совпадают пароли';
    }
    $query = "SELECT * FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['pass']}' AND status='default' LIMIT 1";

    $result = mysqli_query($link, $query);

    if (!$result){
        echo 'Ошибка';
    }

    $user = mysqli_fetch_array($result);
<form action="login.php" method="post">
    <h1 title="Авторизация на сайте"></h1>
    <div class="group">
        <label>Имя пользователя
            <input type="text">
        </label>
    </div>
    <div class="group">
        <label>Пароль
            <input type="password">
        </label>
    </div>
    <div class="group">
        <button>Войти</button>
    </div>
</form>
<?php require_once('templates/bottom.php') ?>