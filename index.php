<html>
<head>
	<meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
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
	<div class='jumbotron'><h1>Bienvenido<h1></div>
	<div>
		<form>
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-9'>
					<div class='col-md-3'><input type="button" value="Usuarios" onClick="location.href = 'usuarios.php'"><br></div>
					<div class='col-md-5'>Muestra una lista de usuarios y un formulario para agregar.<br></div>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-9'>
					<div class='col-md-3'><input type="button" value="Autos" onClick="location.href = 'autos.php'"><br></div>
					<div class='col-md-5'>Muestra una lista de autos y un formulario para agregar.<br></div>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-9'>
					<div class='col-md-3'><input type="button" value="Registro Usuarios" onClick="location.href = 'registrar_usuarios.php'"><br></div>
					<div class='col-md-5'>Dan de alta los registros de Usuarios.<br></div>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-9'>
					<div class='col-md-3'><input type="button" value="Registro Autos" onClick="location.href = 'registrar_autos.php'"><br></div>
					<div class='col-md-5'>Dan de alta los registros de Autos.<br></div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>