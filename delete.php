<?php
require_once 'config/config.php';
$query = 'DELETE FROM category WHERE id  =' . (int)$_GET['id'];
mysqli_query($link, $query);
header('Location: http://tipsait/cabinet.php');