<html>
<head>
	<meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/autos.js"></script>
    
</head>
<style type="text/css">
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
	$query = 'SELECT * FROM atributes';
	$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
	?>
	<div class='jumbotron'><h1>Consulta Autos;<h1></div>
	<div>
		<?php
			echo '<table class="table">';
			echo '<tr ><td >id</td>';
			echo '<td >name</td>';
			echo '<td >color</td>';
			echo '<td >make</td>';
			echo '<td >model</td>';
			echo '<td >year</td></tr>';
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo '<tr >';
    				
    				
    					
        				echo '<td >';
        				echo $line['id'];
        				echo '</td>';
        				echo '<td >';
        				echo $line['name'];
        				echo '</td>';
    					echo '<td >';
        				echo $line['color'];
        				echo '</td>';
    					echo '<td >';
        				echo $line['make'];
        				echo '</td>';
    					echo '<td >';
        				echo $line['model'];
        				echo '</td>';
        				echo '<td >';
        				echo $line['year'];
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
