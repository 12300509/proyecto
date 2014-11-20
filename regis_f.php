<?php

ini_set('error_reporting', E_ALL);


if(isset($_POST['monto']) && !empty($_POST['monto'])) {



$link = mysqli_connect("localhost","root","","cars");


$query="INSERT INTO  facturas (amount, iva, extra_tax, total, created) "; 

$query.= "VALUES ('{$_POST['monto']}', '{$_POST['iva']}', '{$_POST['impuesto_extra']}', '{$_POST['total']}', NOW())";




mysqli_query($link,$query);


$my_error = mysql_error($link);


header("location:facturas.php");

}



?>