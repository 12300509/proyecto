<html>
<head>
	<meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
</head>
<style type="text/css">
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
			echo "<table>\n";
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo "<tr>";
    				
    				
    					
        				echo "<td>";
        				echo $line['id'];
        				echo "</td>";
    				
    			echo "</tr>";
				}
			echo "</table>";
			
		?>
	</div>
</body>
</html>