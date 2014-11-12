<html>
<head>
	<meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
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
	$link = mysqli_connect('localhost', 'root', '','cars') or die('No se pudo conectar: ' . mysqli_error($link));

	$query = 'SELECT * FROM persona';
	$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());
	?>
	<div class='jumbotron'><h1>Consulta Usuarios;<h1></div>
	<div>
		<?php
			echo "<table>\n";
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo "\t<tr>\n";
    				foreach ($line as $col_value)
    				{
        				echo "\t\t<td>$col_value</td>\n";
    				}
    			echo "\t</tr>\n";
				}
			echo "</table>\n";
		?>
	</div>
</body>
</html>