<?php require_once('templates/top.php') ;
if (!empty($_POST)){
    $query = "SELECT * FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['pass']}' AND status='default' LIMIT 1";
    $result = mysqli_query($link, $query);
    if (!$result){
        echo 'Ошибка';
    }
    $user = mysqli_fetch_array($result);
    if ($user['id']){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        ?>
        <script>
            document.location.href="index.php";
        </script>

        <?php

    }else{
        echo 'Не удалось войти';
    }
}

    ?>
<form action="login.php" class="form" method="post">
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