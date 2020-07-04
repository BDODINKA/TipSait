<?php require_once('templates/top.php') ;
if (!empty($_POST)){
    $error = [];
    if ($_POST['password'] != $_POST['password-repeat']){
        $error[] = 'Не совпадают пароли';
    }
    $query = "SELECT * FROM users WHERE email = '".$_POST['email']."'";

    $usr = mysqli_query($link, $query);

    /*
     Если пользователя нет, то отключаемся. Иначе, добавляем ошибку
     */
    if(!$usr)
    {
        exit($query);
    }

    $check = @mysqli_fetch_array($usr);

    #print_r($check);

    if($check['id'])
    {
        $error[] = "Пользователь с таким именем уже существует";
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

    }else{

        foreach ($error as $item) {
            echo $item . '<br>';
        }

    }
}



?>
<div class="group">
<form action="register.php" class="form" method="post">
    <h1 class="form_title">Регистрация на сайте</h1>
  
        <input class="form_input" name="name">
        <label class="form_label">Имя пользователя</label>
 
   
        <input class="form_input" name="password">
        <label class="form_label">Пароль</label>
    
    
        <input class="form_input" name="password-repeat">
        <label class="form_label">Повторите пароль</label>
    
    
        <input class="form_input" name="Email">
        <label class="form_label">Email</label>

    <button class="form_button" name="registation">Регистрация</button>


</form>
</div>


<?php require_once('templates/bottom.php') ?>


