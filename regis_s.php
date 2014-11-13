<?php

ini_set('error_reporting', E_ALL);


if(isset($_POST['name']) && !empty($_POST['name'])) {



$link = mysqli_connect("localhost","root","","cars");


$query="INSERT INTO  branches (name, address, phone, created) "; 

$query.= "VALUES ('{$_POST['name']}', '{$_POST['address']}', '{$_POST['phone']}', NOW())";




mysqli_query($link,$query);


$my_error = mysql_error($link);


header("location:sucursales.php");

}



?>