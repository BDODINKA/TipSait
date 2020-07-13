<?php
require_once('config/config.php');
$id = (int)$_POST['id'];
$query = "SELECT * FROM maintexts WHERE id =$id";
$mas = mysqli_query($link,$query);
if(!$mas){
    exit($query);
}
$maintext = mysqli_fetch_array($mas);
echo "<h1>".$maintext['name']."</h1>";
echo "<div>".$maintext['body']."</div>";
echo "<div >ссылка:<a href ='/about.php?url=".$maintext['url']."'>Open</a></div>";

?>