<?php require_once('templates/top.php') ;
if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = 'index';
}
$query = "SELECT * FROM maintexts WHERE url = '".$url."'";
$mas = mysqli_query($link, $query);
if(!$mas){
    exit($query);
}
$main = mysqli_fetch_array($mas);

?>

<main class="about">
<h1><?php echo $main['name']?></h1>
<?php echo $main['body']?>


</main>








<?php require_once('templates/bottom.php') ?>