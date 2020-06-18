<?php require_once('templates/top.php') ;
if (!empty($_POST)){
    $error = [];
    if ($_POST['password'] != $_POST['password-repeat']){
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
<div class="body">
<form action="register.php" class="form" method="post">
    <h1 class="form_title">Регистрация на сайте</h1>
    <div class="form_group">
        <input class="form_input" name="name">
        <label class="form_label">Имя пользователя</label>
    </div>
    <div class="form_group">
        <input class="form_input" name="password">
        <label class="form_label">Пароль</label>
    </div>
    <div class="form_group">
        <input class="form_input" name="password-repeat">
        <label class="form_label">Повторите пароль</label>
    </div>
    <div class="form_group">
        <input class="form_input" name="Email">
        <label class="form_label">Email</label>
    </div>
    <button class="form_button" name="registation">Регистрация</button>


</form>
</div>


<?php require_once('templates/bottom.php') ?>


