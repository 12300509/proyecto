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
.tabla
{
	font-size: 20px;

background-color: green;
background-size: 3px;
color: white;
font-style:  oblique;

}
.border
{
border-width: medium;
border-color: black;
border-style: solid;


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
			echo '<table align="center">';
			echo '<tr class="top"><td class="border">id</td>';
			echo '<td class="border">name</td>';
			echo '<td class="border">color</td>';
			echo '<td class="border">make</td>';
			echo '<td class="border">model</td>';
			echo '<td class="border">year</td></tr>';
				while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
				{
    				echo '<tr class="tabla">';
    				
    				
    					
        				echo '<td class="border">';
        				echo $line['id'];
        				echo '</td>';
        				echo '<td class="border">';
        				echo $line['name'];
        				echo '</td>';
    					echo '<td class="border">';
        				echo $line['color'];
        				echo '</td>';
    					echo '<td class="border">';
        				echo $line['make'];
        				echo '</td>';
    					echo '<td class="border">';
        				echo $line['model'];
        				echo '</td>';
        				echo '<td class="border">';
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
