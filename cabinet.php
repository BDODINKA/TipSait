<?php require_once('templates/top.php') ;
if ($_SESSION['user_id']) {
  if ($_POST) {
    if ($FILES['picture']['error'] == 0) {
      $picture = time().''.$_SESSION['user_id'].basename($_FILES['picture']['name']);
              move_uploaded_file($_FILES['picture']['tmp_name'],
                  $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $picture);
  } else {
      $picture = '';
  }
  $query = "INSERT INTO category VALUES (NULL,
  '{$_POST['name']}',
  '{$_POST['body']}',
  '{$_POST['catalog_id']}',
  '{$_SESSION['user_id']}',
'$picture',
NOW()
  )";

    $result = mysqli_query($link, $query);
    if (!$result) {
        exit($query);
    } else {
        echo 'Профиль добавлен';
    }?>
        <script>
            document.location.href='cabinet.php';
        </script>
<?php
    }

?>
<div class="form" id="draggable">
<form action="cabinet.php"  method="post" enctype="multipart/form-data">
         <label for="exampleInputText">Название</label></br>
            <input type="text" name="name" class="form-control" id="exampleInputText"></br>
              <label for="exampleFormControlSelect1">Категория</label>
                <select class="form-control" name="catalog_id" id="exampleFormControlSelect1">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
            </select></br>
              <label for="exampleFormControlTextarea1">Описание</label></br>
              <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea></br>
              <label for="exampleFormControlFile1">Загрузить файл</label></br>
              <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
              <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>
    <? } else {
    ?>
    <h1>Ошибка, вы не авторизованы</h1>
<? } 

?>
<table class ="table">

      <tr>
        <th>Изображение</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Категории</th>
        <th>Действие</th>
    </tr>

<?


$query = "SELECT * FROM category WHERE user_id='{$_SESSION['user_id']}'";
    $prod = mysqli_query($link, $query);
    if(!$prod){
      exit($query);
  }
    while($values = mysqli_fetch_array($prod)){ 
   ?>
   <tr>
   <td><?=$values['picture']?></td>
   <td><?=$values['name']?></td>
   <td><?=$values['body']?></td>
   <td><?=$values['catalog_id']?></td>
   <td><a href="/delete.php?id=<?=$values['id']?>">Удалить</a></td>
   </tr>
   <?
   }
   ?>

   </table>






<?php require_once('templates/bottom.php') ?>