<?php require_once('templates/top.php') ;
if (!empty($_POST)){
    $error = [];
    if ($_POST['password'] != $_POST['password_repeat']){
        $error[] = 'Не совпадают пароли';
    }
    if (empty($error)){
        $query = "INSERT INTO users VALUES (NULL,'{$_POST['name']}','{$_POST['email']}','{$_POST['password']}','default',NOW(),NOW())";
        $result = mysqli_query($link, $query);
        if (!$result){
            exit($query);
            ?>
            <script>
                document.location.href='/';
            </script>
            <?

        }
    }
}



?>
<form action="register.php" method="post">
    <h1 title="Регистрация на сайте"></h1>
    <div class="group">
        <label>Имя пользователя
            <input type="text" name="name">
        </label>
    </div>
    <div class="group">
        <label>Пароль
            <input type="password" name="password">
        </label>
    </div>
    <div class="group">
        <label>Повтор пароля
            <input type="password" name="password_repeat">
        </label>
    </div>
    <div class="group">
        <label>Еmail
            <input type="email" name="email">
        </label>
    </div>
    <div class="group">
        <button>Регистрация</button>
    </div>
</form>


<?php require_once('templates/bottom.php') ?>


