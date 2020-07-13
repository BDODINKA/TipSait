<?php require_once('templates/top.php') ?>
<h1>Добро пожаловать на главную страницу сайта</h1>
<php? 
$query = "SELECT * FROM maintexts";
$mas = mysqli_query($link,$query);
if($mas){
    exit($query);
}
while($maintext = mysqli_fetch_array($mas)){
    ?>

<div><a href ="#" class= "maintext" data-id=<?php echo $maintext['id']?><?php echo $maintext['name']?> </div>
<php?
}
?>


<?php require_once('templates/bottom.php') ?>



