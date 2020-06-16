<?php
error_reporting(E_ALL & ~E_NOTICE);

$dblocation = "localhost";

$dbname = "Molotok";

$dbuser = "root";

$dbpasswd = "";

$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

if (!$link){
    exit('Error connect database');
}
