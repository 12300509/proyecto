<?php

ini_set('error_reporting', E_ALL);


if(isset($_POST['name']) && !empty($_POST['name']) ) {



$link = mysqli_connect("localhost","root","","cars");


$query="INSERT INTO atributes (name, color, make, model, year, created) "; 

$query.= "VALUES ('{$_POST['name']}', '{$_POST['color']}', '{$_POST['mark']}', '{$_POST['model']}', '{$_POST['year']}', NOW())";




mysqli_query($link,$query);


$my_error = mysql_error($link);


header("location:autos.php");

}
?>