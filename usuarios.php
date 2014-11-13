<html>
<head>
	<meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>


<style type="text/css">
.top
{

background-color:white ; 
color: black;
border-color: white;
font-size: 30px;
font-style: normal;

}
.jumbotron
{
	background-color: beige;
}
.background
{
	background-color: #FFFF5A;
}
h1
{
	text-align: center;
	font: bold 170% monospace;
}
</style>
<body class='background'>
	<?php
	$link = mysqli_connect('localhost', 'root', '','cars') or die('No se pudo conectar: ' . mysql_error($link));

	$query = 'SELECT * FROM persona';
	$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
	?>
	<div class='jumbotron'><h1>Consulta Usuarios;<h1></div>
	<div>
		<?php
		
<<<<<<< HEAD
			echo '<table  class="table">';
			echo '<tr ><td >id</td>';
			echo '<td >names</td>';
			echo '<td >midle_name</td>';
			echo '<td >last_name</td>';
			echo '<td >email</td></tr>';
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo '<tr >';
    				
    				
    					
        				echo '<td >';
        				echo $line['id'];
        				echo '</td>';
        				echo '<td >';
        				echo $line['names'];
        				echo '</td>';
    					echo '<td >';
        				echo $line['midle_name'];
        				echo '</td>';
    					echo '<td >';
        				echo $line['last_name'];
        				echo '</td>';
    					echo '<td >';
=======
			echo '<table  align="center" class"table">';
			echo '<tr class="top"><td class="border">id</td>';
				echo '<td>names</td>';
				echo '<td>midle_name</td>';
				echo '<td>last_name</td>';
				echo '<td>email</td></tr>';
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo '<tr class="table">';
    				
    				
    					
        				echo '<td">';
        				echo $line['id'];
        				echo '</td>';
        				echo '<td>';
        				echo $line['names'];
        				echo '</td>';
    					echo '<td>';
        				echo $line['midle_name'];
        				echo '</td>';
    					echo '<td>';
        				echo $line['last_name'];
        				echo '</td>';
    					echo '<td>';
>>>>>>> 73e3066e8d8c83977bce8d140a7a1e754092eab5
        				echo $line['email'];
        				echo '</td>';
    				

    				
    			echo '</tr>';
				}
			echo '</table>';
		
		?>
	</div>
	<div class'row'>
		<div class='col-md-3'></div>
		<div class='col-md-9'> <input type="button" value="REGRESAR" onClick="location.href = 'index.php'"><br></div>
	</div>
</body>
</html>
