<?php

ini_set('error_reporting', E_ALL);


if(isset($_POST['name']) && !empty($_POST['name'])) {



$link = mysqli_connect("localhost","root","","cars");


$query="INSERT INTO  persona (names, midle_name, last_name, email, created) "; 

$query.= "VALUES ('{$_POST['name']}', '{$_POST['last_name']}', '{$_POST['midle_name']}', '{$_POST['mail']}', NOW())";




mysqli_query($link,$query);


$my_error = mysql_error($link);


header("location:usuarios.php");

}



?>